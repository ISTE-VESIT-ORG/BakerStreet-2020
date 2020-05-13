<?php

session_start();

require '../vendor/autoload.php';  
require_once '../Database/Database.php';

$_SESSION['loginStatus2'] = null;

if(isset($_POST['email']) && isset($_POST['otp'])){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['otp'] = $_POST['otp'];
    
    $verifyCredentials = verifyCredentials($_SESSION['email'],$_SESSION['otp']);
    if($verifyCredentials == null){
        echo "Invalid Credentials";
        $_SESSION['loginStatus2'] = "failed";

        header('location: ../Pages/Login.php');
        
    }else{
        echo "UserFound";

        $_SESSION['user_info'] = $verifyCredentials;
        
        //var_dump($_SESSION['user_info']);
        //print_r($verifyCredentials['email']);
        
        $progress = (int)$_SESSION['user_info']['progress_count'];

        echo $progress;

        if($progress == 11){
            header("location: ../Pages/End.php");
        }else{
            header('location: ../Pages/Rules.php');
        }

        return ;

    }

}

?>