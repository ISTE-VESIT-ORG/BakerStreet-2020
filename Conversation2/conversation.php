<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
   <title>221B Baker Street-Conversation</title>
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
            background-image:url('../Images/Home.jpg')
        }
        #card{
            margin-bottom: 100px;
            background-color: rgba(0,0,0,0.75)
        }


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
    <div class="container try">
        <div style="margin-left:40%">
            
        </div>
        <div class="row" id="card">
            <div class="col-1"></div>
            <div id="dialogue-box" class="col-10 row" >
                <div class="col-4"><img src="../Images/sherlock.png" class="try" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">Hey John.</div><br><br><br><br><button class="btn btn-primary button" onclick="change();">Next</button></div>
            
            </div>
            <div class="col-1"></div>
        </div>
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
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Yes Sherlock?</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/john.png" alt=""class="try" ><h2>John</h2></div>';
                break;
            case 2:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png "alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">I know these couple of days have been quite difficult for us, but trust me like you always have.</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 3:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">For God’s sake Sherlock, why don’t you take external help for this one?</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/john.png" alt="" class="try"><h2>John</h2></div>';
                break;
            case 4:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">Look John, I am a consultant detective. People consult ME to solve crimes.And it’s not vice versa</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 5:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Oh my goodness Sherlock, don’t tell me that this has to do something with your goddamn ego.</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../Images/john.png" alt=" "class="try" ><h2>John</h2></div>';
                break;
            case 6:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt="" class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">Okay John, let’s do this one your way.</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 7:
                box.innerHTML = '<div class="col-4"><img src="../Images/sherlock.png" alt=""class="try"><h2>Sherlock</h2></div><div class="col-8"><div class="rectangle-left">Okay ladies and gentlemen. First of all thank you for volunteering to help me.</div><br><br><br><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 8:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">This is a very particular case in which I am at a cliffhanger and need a fresh pair of eyes and hence I have asked you to help me.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 9:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Let me take you to the day where this all started. The day which has changed my life.It was my wedding with Molly S Hooper, my personal assistant.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 10:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Let me just start with introducing some of the people.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 11:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">The person I was talking to just now is my best friend,<b> Dr John Watson</b>, with whose help, I solve the crimes. He is a former Army doctor. He saves lives and I catch the bad guys.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 12:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">There were many people present and I think, among them, was my nemesis too.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 13:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly Hooper had an ex-lover named <b>James</b> and he had a brother named <b>Edward</b>.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            // case :
            //     box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">awfgawfguiaseghas</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
            //     break;
            case 14:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly’s father, Hubert.<br><b>Mr Hubert</b> is the tallest and possibly the heaviest too. He has a large frame and is very strong just like his son. He was the leader of an investigating team in a Local Police Department. A huge loyal network helped his service to the nation. He is completely bald and has a large beard.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 15:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly’s brother, William.<br><b>Mr William</b> is a middle-sized, strongly built man with a square jaw, thick neck and a moustache. He worked in the same Police department as that of Hubert. He was also quite handsome.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 16:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center"><b>Lestrade</b>, a middle-sized man. He is an inspector in the Scotland Yard Police Department.<br>He is the one who brings cases for me. He covers me for any mistakes I make that can lead to legal charges. </div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 17:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Yet one important guest who was supposed to be at the wedding, didn’t appear.<b> Mr. Schlansky</b>, John’s old friend. They worked together at the military service.</div><br><button class="btn btn-info button" onclick="back();">Back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 18:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">My brother, Mycroft Holmes.<br><b>Mycroft Holmes</b> is older to me by seven years. He is the British Government when he is not too busy being the British Secret Service or the CIA on a freelance basis.</div><br><button class="btn btn-info button" onclick="back();">Back</button><a href="../Backend/timer.php" type="button" class="ml-2 btn btn-dark">Move to your Scene</a> </div><div class="col-1"></div>'
                break;
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>

</body>
</html>