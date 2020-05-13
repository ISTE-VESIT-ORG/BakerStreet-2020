<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    require_once '../Backend/auth.php';
    require_once '../Backend/authLogin.php';

        if(!isset($_SESSION['email'])){
            include '../Components/error.php';

            return ;
        }

        if(isset($_SESSION['userinfo']['progress_count']) != 11){
            include '../Components/incomplete.php';

            return ;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FE-Quiz_End</title>
</head>
<body>
    <!--Header-->
    <?php include '../Components/header.php'?>

    <!--Content-->
    <div class="card mx-5 mt-5">
        <div class="card-body">
            <h1>Congratulations</h1>
            <a href="../Backend/logout.php" type="button" class="btn btn-dark">End</a>
        </div>
    </div>
</body>
</html>