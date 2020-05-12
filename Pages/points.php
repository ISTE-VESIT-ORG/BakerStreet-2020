<?php

    require_once 'auth.php';

    //JSON Parsing
    $data = file_get_contents("../Database/Questions.json");
    $data = json_decode($data,true);

    $_SESSION['wrongAnswer'] = null;

    $question_no = (int)$_SESSION['progress_count'];

    if(isset($_POST['answer'])){

        //Collecting Strings
        $correct_answer = trim(strtoupper($data[$question_no]['answer']));
        $input = trim(strtoupper($_POST['answer']));

        echo "Input: ".$input;
        echo "<br>";
        echo "Answer: ".$correct_answer;
        echo "<br>";

        //Regex Match
        if(preg_match('/'.$correct_answer.'/',$input)){
            //echo "Matched";
            $_SESSION['progress_count']++;
            $_SESSION['points'] += 10;

            
            // echo "<br>";
            // echo $_SESSION['progress_count'];
            // echo "<br>";
            // echo "Points: ".$_SESSION['points'];
            // echo "<br>";
            
            //updateProgress($_SESSION['email'],$_SESSION['progress_count'],$_SESSION['points']);
            //header('location:Questions2.php');

        }else{
            echo "not matched";

            $_SESSION['wrongAnswer'] = "true";

            //header('location:Questions2.php');
        }
    }

    function updateProgress($email,$progress_count,$points){
        $collection = connectDB();

        $updateResult = $collection->updateOne(
            ['email' => $email],
            ['$set' => ['progress_count' => (int)$progress_count, 'points' => (int)$points]]
        );
    }

?>