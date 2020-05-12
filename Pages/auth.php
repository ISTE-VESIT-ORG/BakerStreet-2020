<?php

session_start();

require '../vendor/autoload.php';  

/*
        JSON Format for user:
            {
                "_id" : "",
                "email" : "",
                "progress_count" : "",
                "points" : "",
                "hints_used" : "",
                "time" : "",
                "otp" : "",
                "verification" : ""
            }
    
*/
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

        header('location:Home.php');
        
    }else{
        echo "UserFound";

        $_SESSION['user_info'] = $verifyCredentials;
        //var_dump($_SESSION['user_info']);
        //print_r($verifyCredentials['email']);
        updateVerificationStatus($_SESSION['email']);
        
        header('location:Rules.php');

        return ;

    }

}

//Database Connection
function connectDB(){
    $client = new MongoDB\Client(
        'mongodb+srv://ADI-KOTKAR:base1234@cluster0-vicgr.mongodb.net/test?retryWrites=true&w=majority');
    $db = $client->ISTE_Quiz;
    $collection = $db->user_info;
    
    //echo "Connected Succesfully";
    return $collection;
}

//Used for verifying credentials and returning user document
function verifyCredentials($email,$otp){
    $collection = connectDB();
    
    $document = $collection->findOne([
        'email' => $email,
        'otp' => (int)$otp
    ]);

    var_dump($document);
    return $document;
}

//Update Verification Status
function updateVerificationStatus($email){
    $collection = connectDB();

    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => ['verification' => 1]]
    );
}

function updateStartTime($email,$time_start){
    $collection = connectDB();

    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => ['time_start' => $time_start]]
    );
}

?>