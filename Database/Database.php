<?php

require '../vendor/autoload.php';  


/*
            JSON Format for user:
                {
                    '_id' : '',
                    'email' : '',
                    'progress_count' : '',
                    'points' : '',
                    'incorrect_attempts' : '',
                    'hints_used' : '',
                    'time_start' : '',
                    'time_end' : '',
                    'otp' : '',
                    'verification' : ''
                }
        
*/

//Database Connection
function connectDB(){
    $client = new MongoDB\Client(
        'mongodb+srv://ADI-KOTKAR:base1234@cluster0-vicgr.mongodb.net/test?retryWrites=true&w=majority');
    $db = $client->ISTE_Quiz;
    $collection = $db->user_info;
    
    //echo "Connected Succesfully";
    return $collection;
}

//Verify if user exists
function verifyUser($email){

    $collection = connectDB();
    $document = $collection->findOne(['email' => $email]);
    
    var_dump($document);

    return $document;
}

//Create new user
function createUser($email){
    $otp = generateOTP();

    $collection = connectDB();
    $document = $insertOneResult = $collection->insertOne([
        'email' => $email,
        'progress_count' => 0,
        'points' => 10,
        'incorrect_attempts' => 0,
        'hints_used' => '',
        'time_start' => '',
        'time_end' => '',
        'otp' => (int)$otp,
        'verification' => 0
    ]);

    $to_email = $email;
    $subject = 'OTP for FE_Quiz';
    $message = 'Requested OTP: '.$otp;
    $headers = 'From: noreply @ company . com';
    mail($to_email,$subject,$message,$headers);
    echo "Mail sent";
}

//To generate 4 digit OTP
function generateOTP(){
    $fourdigitrandom = rand(1000,9999); 
    return $fourdigitrandom; 
}

//Fetch user document
function fetchUser($email){
    $collection = connectDB();
    $document = $collection->findOne(['email' => $email]);

    var_dump($document);
    return $document;
}

//New OTP for registered Users
function updateOTP($email){
    $otp = generateOTP();

    $collection = connectDB();
    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => ['otp' => $otp]]
    );

    $to_email = $email;
    $subject = '(R) OTP for FE_Quiz';
    $message = 'Requested OTP: '.$otp;
    $headers = 'From: noreply @ company . com';
    mail($to_email,$subject,$message,$headers);
    echo "Mail sent";

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

//Update start of Quiz
function updateStartTime($email,$time_start){
    $collection = connectDB();

    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => ['time_start' => $time_start]]
    );
}


//Update Progress of user
function updateProgress($email,$progress_count,$points,$time){
    $collection = connectDB();

    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => [
            'progress_count' => (int)$progress_count, 
            'points' => (int)$points, 
            'time_end' => $time
            ]
        ]
    );
}

//Update points for incorrect attempts
function updatePointsForAttempts($email,$attempts,$points){
    $collection = connectDB();

    $updateResult = $collection->updateOne(
        ['email' => $email],
        ['$set' => ['incorrect_attempts' => ( (int)$attempts+1 ), 'points' => ( (int)$points-2 )]]
    );
}

?>