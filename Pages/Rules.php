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
    <title>FE-Quiz_Rules</title>
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
</style>
<body>
    <!--Header-->
    <?php include '../Components/header.php'; ?>

    <!--Content-->
    <div class="card mx-5 mt-5" id="card">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <h1>Introduction & Rules</h1>
                </div>
                
            </div>
            <div class="row">
                <div class="col-5">
                    <video class="w-100" controls>
                        <source src="../Videos/s2.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="col-6">
                    <p>
                        
                        Initially, you will be credited with <b>15</b> points.<br><br>

                        Taking up a hint will cost you <b>10</b> points. As you proceed to the next round the value of hints will increase subsequently by <b>2</b> points.<br><br>

                        For eg- If you are taking a hint in the 1st round <b>10</b> points will be deducted, for the 2nd round <b>12</b> points, for the 3rd round <b>14</b> points and so on.<br><br>

                        A maximum of <b>9</b> points will be credited for each round.<br><br>

                        With every incorrect attempt <b>2</b> points will be deducted.<br><br>

                        For eg- For the  first correct attempt you will be awarded with <b>9</b> points, for the second correct attempt <b>8</b> points, for the third <b>6</b> points and from fourth onwards <b>3</b> points.<br><br>

                        You will be credited with a minimum of <b>3</b> points for passing each round.<br><br>

                        If the player has gone negative points then no hints are allowed.<br><br>

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