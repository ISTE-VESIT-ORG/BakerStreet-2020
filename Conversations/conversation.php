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
        .rectangle-left,.rectangle-right,.rectangle-center{
            margin-bottom:125px;
        }
        .rectangle-left{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            position: relative;
            top: 25%;
            color: #000;
            text-align: left;
            font-size: 25px;
            }
        .rectangle-right{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            position: relative;
            top: 25%;
            color: #000;
            text-align: right;
            font-size: 25px;

        }
        .rectangle-center{
            background-color: #bbb;
            border-radius: 10px;
            padding: 5px;
            color: #000;
            text-align: center;
            font-size: 25px;

        }
        .try{
             height:80%;
             width:80%;
            }
        .button{
            position: relative;
            float: bottom;
        }
        body{
            background-image:url('../Images/Home.jpg');
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
        <div style="align-items: center;display: flex;
    justify-content: center;
">
            <a href="../Conversations/conversation0.php" type="button" class="btn btn-dark">View your 1st Case</a>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div id="dialogue-box" class="col-10 row" >
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem eos perspiciatis ipsa obcaecati quisquam architecto autem sequi beatae aliquam illum. Consectetur dolorum, corporis esse possimus pariatur commodi eos minima necessitatibus?
                </p> 
                <button class="btn btn-success" onclick="change();" style=" position:relative ;left: 45%;">Start</button>
            </div>
            <div class="col-1"></div>
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
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png "alt="" class="try"><h4>Sherlock</h4></div><div class="col-8"><div class="rectangle-left">Hey John.</div><button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 2:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Yes Sherlock?</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt=""class="try" ><h4>John</h4></div>';
                break;
            case 3:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png "alt="" class="try"><h4>Sherlock</h4></div><div class="col-8"><div class="rectangle-left">I know these couple of days have been quite difficult for us, but trust me like you always have.</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 4:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">For god’s sake Sherlock, why don’t you take external help for this one?</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt="" class="try"><h4>John</h4></div>';
                break;
            case 5:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png" alt="" class="try"><h4>Sherlock</h4></div><div class="col-8"><div class="rectangle-left">Look John,I am a consultant detective. People consult me to solve crimes.And it’s not vice versa</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 6:
                box.innerHTML = '<div class="col-8"><div class="rectangle-right">Oh my goodness Sherlock, don’t tell me that this has to do something with you goddamn ego.</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div><div class="col-4"><img src="../images/john.png" alt=""class="try" ><h4>John</h4></div>';
                break;
            case 7:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png "alt="" class="try"><h4>Sherlock</h4></div><div class="col-8"><div class="rectangle-left">Okay John, let’s do this one as your way.</div><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 8:
                box.innerHTML = '<div class="col-4"><img src="../images/sherlock.png "alt="" class="try"><h4>Sherlock</h4></div><div class="col-8"><div class="rectangle-left">Okay ladies and gentlemen. First of all thank you for volunteering to help me.</div><br><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary button" onclick="change();">Next</button></div>';
                break;
            case 9:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">This is particularly a case in which I am at a cliffhanger and need a fresh pair of eyes and hence I have asked you to help me.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 10:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Let me take you to the day where this all started. The day which has changed my life. It was my wedding with Molly S Hooper, my personal assistant.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 11:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Let me just start with introducing some of the people.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 12:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">The person to whom I was now talking with is my best friend, Dr John Watson, with help of whom I solve the crimes. He is a former Army doctor. He saves lives and I catch the bad guys.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 13:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">There were many people present and I think, among them, was my nemesis too.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 14:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly Hooper had an ex-lover named James and he had a brother named Edward.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            // case :
            //     box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">awfgawfguiaseghas</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
            //     break;
            case 15:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly’s father, Hubert.<br>Mr Hubert is the tallest and possibly the heaviest too. He has a large frame and is very strong like his son.He was leader of an Investigating team in a Local Police Department.  A huge loyal network helped his service to the nation. He is completely bald and has a large beard.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 16:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Molly’s brother, William.<br>Mr William is a middle-sized, strongly built man with a square jaw, thick neck and a moustache. He worked in the same Police department as that of Hubert. He was also quite handsome.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 17:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Lestrade, a middle sized man. He is an inspector in Scotland Yard Police Department. He is the one who brings cases for me. He covers me for any mistakes I make that can lead to legal charges.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 18:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">Yet one important guest who was supposed to be at the wedding, didn’t appear. Mr. Schlansky, John’s old friend, worked together at the military service.</div><br><button class="btn btn-info button" onclick="back();">back</button> <button class="btn btn-primary" onclick="change();">Next</button></div><div class="col-1"></div>'
                break;
            case 19:
                box.innerHTML = '<div class="col-1"></div><div class="col-10"><div class="rectangle-center">My brother, Mycroft Holmes.<br>Mycroft Holmes is older to me by seven years. He is the British Government when he"s not too busy being the British Secret Service or the CIA on a freelance basis.</div><br><button class="btn btn-info button" onclick="back();">back</button> </div><div class="col-1"></div>'
                break;
            }          
        }
      </script>


<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>

</body>
</html>