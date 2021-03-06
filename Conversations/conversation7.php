<!DOCTYPE html>
<html>
<head>
           <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>221B Baker Street-Conversation8</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <style>
        #dialogue-box{
       
            color: white;
            text-align: center;
            padding: 10px;
        }
        .rectangle-left{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            position: relative;
            top: 25%;
            color: #000;
            text-align: left;
            font-size: 30px;
            }
        .rectangle-right{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            position: relative;
            top: 25%;
            color: #000;
            text-align: right;
            font-size: 30px;

        }
        .rectangle-center{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            color: #000;
            text-align: center;
            font-size: 30px;

        }
        .button{
            position: relative;
            float: bottom;
        }
        body{
            background-image:url('../Images/8.jpg')
        }
        #card{
            margin-bottom:100px;
            background-color: rgba(0,0,0,0.75)
        }
        .rectangle-left,.rectangle-right,.rectangle-center{
            margin-bottom:150px;
        }
.try{
 height:80%;
 width:80%;
}
@media screen and (max-width: 780px) {
.rectangle-left{
    font-size:15px;

}
.rectangle-right{
    font-size:15px;
}
.rectangle-center{
    font-size:15px;
}
.rectangle-left,.rectangle-right,.rectangle-center{
            margin-bottom:55px;
        }
        .try{
             height:60%;
             width:80%;
        }
    </style>
</head>
<body>
 <?php 
    error_reporting(E_ERROR | E_WARNING | E_PARSE); 
    session_start(); 
    include '../Components/header.php';
?> 
  <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row" id="card">
            
            <div id="dialogue-box" class="col-12 row">
                <h4 class="ml-3"><b>
                   After we went to the chemistry Lab owned by RuBi and NeO, we found Olivia tied to a chair with a lead in her hand:

    </b></h4> 
                <button class="btn btn-success" onclick="change();" style=" position:relative ;left: 45%;">Start</button>
            </div>
      
        </div>
    </div>
  <div id="particles-js">

   
    </div>
        <script>
        var i=0;
        var box = document.getElementById('dialogue-box'); 
        function change(){
          i = i+1;
          render(i);
          }
        function back(){
            i = i-1;
            render(i);
        }
        function render(i){
            switch(i) {
                case 1:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> Okay Olivia everything’s fine. You are safe now.</div><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
           
             case 2:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right"> Thank you so much. I was so scared that I couldn’t think of anything.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/o1.png" alt="" width="80%" height="80%"><h2>Olivia</h2></div>';
                break;
                case 3:
               box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt=""class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> Can you describe your kidnapper?</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button</div>';
                break;
                case 4:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">  I don’t know. He wore a mask. The last thing I remember is I was in my house sleeping and heard someone break in. I could hear my dad screaming. I woke up and felt a hard hit on my head just before I lost consciousness. I don’t know. He wore a mask. The last thing I remember is I was in my house sleeping and heard someone break in. I could hear my dad screaming. I woke up and felt a hard hit on my head just before I lost consciousness.</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/o1.png" alt="" class="try"><h2>Olivia</h2></div>';
                break;
                case 5:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt=""class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">  Okay Olivia, no problem. Just calm down we will take you back safely.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button</div>';
                break;
                case 6:
            box.innerHTML = '<div class="col-8"><div class="rectangle-right">We opened the note that we found in Olivia’s hand. </div><button class="btn btn-info button" onclick="back();">Back</button><a href="../Pages/Questions2.php" type="button" class="btn btn-dark ml-2">Move to next Scene</a> </div><div class="col-4"><img src="../Images/sherlock.png" alt=""class="try"><h2>Sherlock</h2></div>';
           
           
           
            }          
        }
      </script>


 <?php include '../Components/footer.php';?>

</body>
</html>