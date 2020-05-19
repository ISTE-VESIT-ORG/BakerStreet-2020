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
                <div class="column">
                    <a href="../Conversations/conversation.php" type="button" class="btn btn-dark align-self-right">Start</a>
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
                        
                        Initially, you will be credited with 15 points.<br><br>

                        Taking up a hint will cost you 10 points. As you proceed to the next round the value of hints will increase subsequently by 2 points.<br><br>

                        For eg- If you are taking a hint in the 1st round 10 points will be deducted, for the 2nd round 12 points, for the 3rd round 14 points and so on.<br><br>

                        A maximum of 9  points will be credited for each round.<br><br>

                        With every incorrect attempt 2 points will be deducted.<br><br>

                        For eg- For the  first correct attempt you will be awarded with 9 points, for the second correct attempt 8 points, for the third 6 points and from fourth onwards 3 points.<br><br>

                        You will be credited with a minimum of 3  points for passing each round.<br><br>

                        If the player has gone negative points then no hints are allowed.<br><br>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php include '../Components/footer.php'; ?>
</body>
</html>