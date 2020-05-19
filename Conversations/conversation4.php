<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
  <title>221B Baker Street-Conversation5</title>
           <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="row">
            
            <div id="dialogue-box" class="col-12 row">
                <p>
                   Let's go to next Question
                </p> 
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
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt="" width="80%" height="80%"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">So Andrea killed him.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 2:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">How do you know that?</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt="" ><h2>John</h2></div>';
                break;
            case 3:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt="" width="80%" height="80%"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> Because in winter fog comes on the inside. That’s what happened to my glasses when we were leaving our venue.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 4:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Oh that’s incredible.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt="" ><h2>John</h2></div>';
                break;
                case 5:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt=""width="80%" height="80%" ><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">  I wonder what goes on in your funny little heads.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 6:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right"> We revisited Andrea’s house to bring people into custody starting with Carl. But as soon as we reached her house we found Carl’s dead body.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/sherlock.png" alt=""width="80%" height="80%" ><h2>Sherlock</h2></div>';
                break;
                case 7:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt=""width="80%" height="80%" ><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left"> Okay, now we can inspect the house without a warrant.</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 8:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Start looking for evidence in the house</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt="" ><h2>John</h2></div>';
                break;
                case 9:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt=""width="80%" height="80%" ><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">  Look I found Carls personal diary!</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 10:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">He has mentioned Andreas extra marital affair with Jorge Manley. He also has stated ,”I thought a couple of times to end Jorge Manley and Andrea but I decided to wait and see how long this goes because Jorge Manley had another affair.”</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt="" ><h2>John</h2></div>';
                break;
                case 11:
                box.innerHTML = '<div class="col-4"><img src="../images/john.png" alt="" ><h2>Jhn </h2></div><div class="col-8"><div class="rectangle-left">  Maybe Andrea came to know about this and felt betrayed. Ergo, killed Jorge Manley and felt that he had to no reason to live so Andrea decided to commit suicide and frame Carl for all the torture.  </div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 12:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Maybe Andrea came to know about this and felt betrayed. Ergo, killed Jorge Manley and felt that he had to no reason to live so Andrea decided to commit suicide and frame Carl for all the torture.  </div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/sherlock.png" alt="" width="80%" height="80%"><h2>Sherlock</h2></div>';
                break;
                case 13:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt=""width="80%" height="80%" ><h2>Sherlockh2></div><div class="col-8"><div class="rectangle-left">  -By the way, Where is Olivia?</div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 14:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">(Screaming)Sherlockkk! You need to look at this.  </div><br><br><br><br><br><br><br><br><br><button class="btn btn-info button" onclick="back();">back</button> </div><div class="col-4"><img src="../images/Lestrade.png" alt=""width="80%" height="80%" ><h2>Lestrade</h2></div>';
                break;
           
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>

</body>
</html>