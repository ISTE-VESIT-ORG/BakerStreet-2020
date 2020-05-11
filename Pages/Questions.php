<?php
    require_once 'auth.php';


    //JSON Parsing
    $data = file_get_contents("../Database/Questions.json");
    $data = json_decode($data,true);

    //fetch user_info
    ob_start();
    $user_info = verifyCredentials($_SESSION['email'],$_SESSION['otp']);
    ob_end_clean();
?>

<!--jquery-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!--Quiz functions-->
<script>
    var json_data

    fetch("../Database/Questions.json")
        .then( (res)=>{
                return res.json()
        })
        .then( (data)=>{
            console.log(data)
            json_data = data
        })

    // setTimeout(() => {
    //     console.log("json_data: "+json_data[0]['answer'])
    // }, 2000);

    var count = 0

    function startQuiz(){
        
        button_id = "questionButton"+count
        document.getElementById(button_id).disabled = false;

        document.getElementById("startQuiz").disabled = true
    }

    function nextQuestion(){
        input_id = "answer"+count
        answer = document.getElementById(input_id).value
        
        if(answer == ''){
            alert("Please write your answer")
            return false
        }
        
        correct_answer = json_data[count]['answer']

        if(answer.toUpperCase().trim().length!=correct_answer.toUpperCase().trim().length){
            alert("Incorrect Answer! Please try again")
            return false
        }
        
        pattern = new RegExp(correct_answer.toUpperCase().trim())
        matcher = pattern.test(answer.toUpperCase().trim())
        
        if(matcher==false){
            alert("You're close! Please try again") 
            return false
        }
        
        count++

        button_id = "questionButton"+count
        submit_id = "submit"+count
        document.getElementById(button_id).disabled = false;

        document.getElementById(submit_id).disabled = true;
        document.getElementById(input_id).disabled = true;
           
    }

    function hintSelected(){
        hint_id = "hint"+count

        alert("Points will be deducted if you choose for hint!")

        setTimeout(() => {
            document.getElementById(hint_id).disabled = true
        }, 1000);
    }
</script>

 <!--Handling Reloading of Page-->   
<script>
    // $(function (){
    //     $(window).on('beforeunload',function(){
    //         return '';
    //     })
    // })
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
</head>

<body>

    <!--Header-->
    <?php include '../Components/header.php'?>

    <!--Content-->
    <div class="card mx-5">
        <div class="card-header row">
            <h3 class="col"><?php print $user_info['email']; ?></h2>
            <button type="button" id="startQuiz" onclick="startQuiz()" class="btn btn-dark col-1 mx-2">Start</button>
            <a class="btn btn-dark col-1" href="logout.php" role="button">Logout</a>
        </div>
    </div>

    

    <div class="accordion my-3" id="accordionExample">
    <?php
        for($i=0; $i<count($data); $i++){
            $button_id = "questionButton".$i;

            $input_id = "answer".$i;

            $submit_id = "submit".($i+1);

            $heading = "heading".$i;

            $collapse = "collapse".$i;
            $collapseTarget = "#collapse".$i;

            $hint_id = "hint".$i;

            $hint_collapse = "hintCollapse".$i;
            $hint_collpaseTarget = "#hintCollapse".$i;

            print " <div class=\"card mx-5 \">
                        <div class=\"card-header\" id=\"$heading\">
                            <h2 class=\"mb-0\">
                                <button class=\"btn btn-link collapsed\" type=\"button\" id=\"$button_id\"
                                        data-toggle=\"collapse\" data-target=\"$collapseTarget\" 
                                        aria-expanded=\"false\" aria-controls=\"$collapse\" disabled>
                                    Question ".($i+1)."
                                </button>
                            </h2>
                        </div>
                        <div id=\"$collapse\" class=\"collapse\" aria-labelledby=\"$heading\" 
                            data-parent=\"#accordionExample\">
                            <div class=\"card-body mx-4\">
                                ".$data[$i]['question']."
                            </div>
                            <div class=\"input-group mb-3 mx-5 w-50\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Answer\" 
                                        aria-label=\"Answer\" aria-describedby=\"basic-addon1\"
                                        name=\"$input_id\" id=\"$input_id\">
                            </div>
                            <p>
                                <button class=\"btn btn-primary mx-5\" type=\"button\" 
                                        data-toggle=\"collapse\" data-target=\"$hint_collpaseTarget\" 
                                        aria-expanded=\"false\" aria-controls=\"collapseExample\"
                                        onclick=\"hintSelected()\" id=\"$hint_id\">
                                    Hint        
                                </button>
                            </p>
                            <div class=\"collapse mx-5 w-50\" id=\"$hint_collapse\">
                                <div class=\"card card-body\">
                                ".$data[$i]['hint']."
                                </div>
                            </div>
                            <button id=\"$submit_id\"type=\"button\" onclick=\"nextQuestion()\" 
                                    class=\"btn btn-dark mx-5 my-2\">
                                Submit
                            </button>
                        </div>
                    </div>";
        }
    
    ?>
    </div>
    

    <!--Footer-->
    <?php //include '../Components/footer.php';?>  

</body>
</html>
