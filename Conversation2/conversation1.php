<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
           <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-Conversation2</title>
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
            background-image:url('../Images/2.jpg')
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
    <div class="container" id="card">
        <div class="row">
            
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
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">The suspicion started to grow that I was the killer. It was clear until now that someone was playing with me. The question was, who? We searched the room and found an unsolved case file. I looked into it.<br>It was about Mr. Schlansky.</div><br><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 2:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Mr. Schlansky? He was invited to the wedding. He didn not show up.</div><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/john.png" alt="" class="try"><h2>John</h2></div>';
                break;
            case 3:
                box.innerHTML = '<div class="row"><div class="col-4"><img src="../Images/sherlock.png" alt=""class="try" ><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> Maybe something has happened to him.</div><button class="btn btn-info button" onclick="back();">Back</button><a href="../Pages/Questions2.php" type="button" class="ml-2 btn btn-dark">Move to next Scene</a></div></div>';
                break;
           
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>

</body>
</html>