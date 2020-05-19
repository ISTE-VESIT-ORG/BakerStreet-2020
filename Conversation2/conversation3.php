<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
 <title>221B Baker Street-Conversation4</title>
           <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            font-size: 20px;

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
            background-image:url('../Images/4.jpg')
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
            <div id="dialogue-box" class="col-12 row">
            <h4 class="ml-5"><b>
                   Let's move to the next Scene
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
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> So Andrea killed him.</div><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 2:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">How do you know that?</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/john.png" alt="" class="try"><h2>John</h2></div>';
                break;
                case 3:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right"> Because fog always forms on the hotter side of a surface. That’s exactly what happened to my glasses when we were leaving our venue.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/sherlock.png "alt="" class="try"><h2>Sherlock</h2></div>';
                break;
            case 4:
                box.innerHTML = '<div class="col-4"><img src="../Images/john.png " alt=""class="try" ><h2>John </h2></div><div class="col-8"><div class="rectangle-left"> Oh that’s incredible.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                 case 5:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">  I wonder what goes on in your funny little heads.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/sherlock.png " alt="" class="try"><h2>Sherlock</h2></div>';
                break;
                 case 6:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png "class="try" alt=""class="try" ><h2>herlock</h2></div><div class="col-8"><div class="rectangle-left">Start an immediate search for the maid(Andrea).</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 7:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Meanwhile we visited her house. Her husband Carl and their 13 year old daughter Olivia were present in the house. Lestrade started interrogating Carl.  </div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
                case 8:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right"> Why’s your shirt torn from your elbow? Where is Andrea?</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/Lestrade.png " alt=""class="try"><h2>Lestrade</h2></div>';
                break;
                case 9:
                box.innerHTML = '<div class="col-4" style="align-items:left"><img src="../Images/Carl.png" alt=""class="try"  ><h2>Carl</h2></div><div class="col-8"><div class="rectangle-left"> I don’t know, she hasn’t been home since last night. </div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break; case 10:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right"> Don’t you care for your wife? She has not been home since last night and you don’t seem to be bothered by it. Or by the fact that something might have happened to her?</div><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/Lestrade.png " alt=""class="try"><h2>Lestrade</h2></div>';
                break;
                case 11:
                box.innerHTML = '<div class="col-4" style="align-items:left"><img src="../Images/Carl.png" alt=""class="try"  ><h2>Carl</h2></div><div class="col-8"><div class="rectangle-left">Yeah you’r right inspector, I d’nt care where she is. We are undergoing divorce.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break; case 12:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">  Why’s your shirt torn from your elbow?</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/Lestrade.png " alt=""class="try"><h2>Lestrade</h2></div>';
                break;
                case 13:
                box.innerHTML = '<div class="col-4" style="align-items:left"><img src="../Images/Carl.png" alt=""class="try"  ><h2>Carl</h2></div><div class="col-8"><div class="rectangle-left">We had a fight recently, I think it went missing since then.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                  case 6:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png "class="try" alt=""class="try" ><h2>herlock</h2></div><div class="col-8"><div class="rectangle-left"> I started searching the house, I found Carl’s personal diary. Carl had a very abnormal handwriting which was difficult to understand. There was something written about Andrea getting more money. We assumed someone might have given money to Andrea to kill Jorge Manley.  </div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
               
                case 14:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Suddenly we received a call from Hotel Caesars Palace and we were informed about a crime scene in their hotel. We reached the crime scene as soon as possible.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <a href="../Pages/Questions2.php" type="button" class="btn btn-dark ml-2">Move to next Scene</a></div>'
                break;
                 
           
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>

</body>
</html>