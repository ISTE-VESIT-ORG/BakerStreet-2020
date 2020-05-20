<!--Event Expired-->
<?php
    // include '../Components/closed.php';
    // include '../Components/footer.php';
    // return ;

?>

<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    require_once '../Backend/auth.php';
    require_once '../Backend/authLogin.php';

        if(!isset($_SESSION['email'])){
            include '../Components/error.php';

            return ;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-Rules</title>
</head>
<style>
    body{
        background-image:url(../Images/Home.jpg);
    }
    #card{
        background-color: rgba(0,0,0,0.75);
        color : white;
        margin-bottom: 100px;
    }
    .font{
        font-size:16px;
    }
    .rectangle-left,.rectangle-right,.rectangle-center{
            margin-bottom:125px;
        }
    .try{
        height:80%;
        width:80%;
    }
    .item1{
        float:left;
        width:50%;
    }
    .item2{
        float:right;
        width:50%
    }
    .controls{
        margin-top:-100px;
    }
    @media screen and (max-width: 780px) {
        .font{
            font-size : 12px;
        }
        .try{
            height:60%;
            width:80%;
        }
        .row{
            display:flex;
            flex-direction:column;
        }
        .item1{
            float:left;
            height:100%;
            width:80%;
            margin:0 auto;  
        }
        .item2{
            float:left;
            width:80%;
            margin:0 auto;
            padding-top:30px;
        }
    }
</style>
<body>
    <!--Header-->
    <?php include '../Components/header.php'; ?>

    <!--Content-->
    <div class="card mx-5 mt-5" id="card">
        <div class="card-body">
            <div class="row px-2">
                <div class="px-2">
                    <h1>Introduction & Rules</h1>
                </div>
                
            </div>
            <div class="row font">
                <div class="item1">
                    <video class="try" controls>
                        <source src="../Videos/start.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="item2">
                <p>
                        <b>Description:</b><br>

                        This event follows a particular theme of Sherlock Holmes. You will get a chance to be a Detective alongside him. Sherlock Holmes is a consultant and this time he is consulting you to help him with one of a very peculiar case. So, here's your chance Detectives welcome to <b>221B BAKER STREET</b>.<br>

                        <br><b>Basic Outline:</b><br>

                        There are a total of 11 rounds. Each round will be active for a limited time period. Every round will have one question. While solving a round, If you get stuck somewhere you can take a hint for which points will be deducted in a particular manner. There will be a progress bar above the questions which will help you keep track of your progress.<br><br>
                        
                        <b>Flow of the event:</b>
                        <ul>
                            <li>The event will be active from 12pm to 7pm</li>
                            <li>You can proceed to the next level after giving the correct answer to the current level</li>
                        </ul>
                        <br>
                        <b>Points System</b>
                        <ol>
                            <li>Initially, you will be credited with 15 points.</li>
                            <li>
                                Taking up your first hint will cost you 10 points. The values of the hints will increase by 2 points for the next hint after every 1 hint taken.
                                <br>
                                For eg- If you are taking a hint in the 1st round then 10 points will be deducted. If you again take the hint in the 2nd round then 12 points will be deducted, for the 3rd hint 14 points and so on.
                            </li>
                            <li>A maximum of 9  points will be credited for each round.</li>
                            <li>
                                With every incorrect attempt, points will be deducted in the following manner: 
                                <ul>
                                    <li>Answer in first attempt: 9 points</li>
                                    <li>Answer in second attempt: 8 points</li>
                                    <li>Answer in second attempt: 6 points</li>
                                    <li>Answer in fourth attempt and more: 3 points</li>
                                </ul>
                            </li>
                            <li>You will be credited with a minimum of 3  points for passing each round.</li>
                            <li>If the player’s score goes negative, then no hints will be allowed.</li>
                        </ol>

                    </p>

                    <div class="">
                        <a href="../Conversations/conversation.php" type="button" class="btn btn-success mx-auto">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Components/footer.php'; ?>
</body>
</html>