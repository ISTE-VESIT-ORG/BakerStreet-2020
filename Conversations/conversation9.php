<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
   <title>221B Baker Street-Conversation10</title>
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
            background-image:url('../Images/10.jpg')
        }
        #card{
            margin-bottom:1000px;
        }
        .rectangle-left,.rectangle-right,.rectangle-center{
            margin-bottom:125px;
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
        <div class="row">
            
            <div id="dialogue-box" class="col-12 row">
                <h4><b>
                   Lestrade starts interrogating Erin.

    </b>
    </h4> 
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
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">So Erin,why did you kill Scarlett?</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/Lestrade.png" alt="" class="try"><h2>Lestrade</h2></div>';
                break;
                case 2:
                box.innerHTML = '<div class="col-4"><img src="../images/erin.png" alt="" class="try"><h2>Erin</h2></div><div class="col-8"><div class="rectangle-left mb-5">Scarlett and I were head over heels over the same guy. I really wanted Scarlett to step back, but she wouldn’t. What was absurd was that over the next  few days I kept receiving calls from a man who knew about my jealousy and kept suggesting ways to get rid of Scarlett; always insisting on poison. I tried to get his identity by flirting with him over the telly but he wouldn’t budge and even threatened me with my life.</div><br><br><br><br><BR><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 3:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">  Did you arrange a meeting with him?</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/Lestrade.png" alt=""class="try"><h2>Lestrade</h2></div>';
                break;
                case 4:
                box.innerHTML = '<div class="col-4"><img src=../images/erin.png" alt="" class="try"><h2>Erin</h2></div><div class="col-8"><div class="rectangle-left">  No, I was scared. But I have to admit, heartbroken that I was, it was very tempting to just give in to his advice back then.Erin was handed over for further investigation.</div><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                case 5:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">We assumed that Scarlett might have some leads about the real mastermind, who is pretending to be S.H. So where does this take us boss?</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt=""class="try" ><h2>John</h2></div>';
                break;
                case 6:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">  I am not so sure Watson. But what I know for sure is that I am running low on cash. Haha! Let’s make a quick run to the bank, shall we? </div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
                 case 7:
              box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">At the bank, they were surprised to bump into most of the very people who had attended Sherlock’s wedding. </div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
                break;
           case 8:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png"" alt="" width="80%" height="80%"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">   Keep your guard up, Watson. This is a set up. Here the time arrived</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 9:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Here the time arrived</div><br><button class="btn btn-info button" onclick="back();">back</button><a href="../Pages/Questions2.php" type="button" class="btn btn-dark ml-2">Next</a> </div><div class="col-1"></div>'
                break;
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php //include '../Components/footer.php';?>

</body>
</html>