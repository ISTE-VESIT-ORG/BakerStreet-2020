<?php

session_start();

require '../vendor/autoload.php';  
require_once '../Database/Database.php';

$_SESSION['loginStatus'] = null;

if(isset($_POST['email']) && isset($_POST['otp'])){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['otp'] = $_POST['otp'];
    
    echo $_SESSION['email']."<br>";
    echo $_SESSION['otp']."<br>";

    $verifyCredentials = verifyCredentials($_SESSION['email'],$_SESSION['otp']);
    if($verifyCredentials == null){
        echo "Invalid Credentials";
        $_SESSION['loginStatus'] = "failed";

        header('location: ../Pages/Home.php');
        
    }else{
        echo "UserFound";

        $_SESSION['user_info'] = $verifyCredentials;
        
        //var_dump($_SESSION['user_info']);
        //print_r($verifyCredentials['email']);

        updateVerificationStatus($_SESSION['email']);
        
        header('location: ../Pages/Rules.php');

        return ;

    }

}

?>