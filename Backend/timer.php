<?php
    require "../Database/Database.php";

    session_start();

    $user_info = fetchUser($_SESSION['email']);
    
    $_SESSION['hint'] = null;
    $_SESSION['current_points'] = (int)$user_info['points'];
    $_SESSION['incorrect_attempts_count'] = (int)$user_info['incorrect_attempts_count'];

    header('location: ../Pages/Questions2.php');
?>