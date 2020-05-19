<?php
    require "../Database/Database.php";

    session_start();

    $user_info = fetchUser($_SESSION['email']);
    
    $_SESSION['progress'] = (int)$user_info['progress_count'];
    $_SESSION['hint_status'] = (int)$user_info['hint_status'];
    $_SESSION['current_points'] = (int)$user_info['points'];
    $_SESSION['incorrect_attempts_count'] = (int)$user_info['incorrect_attempts_count'];

    $conversation = "conversation".$_SESSION['progress'];
    // header('location: ../Conversations/'.$conversation.'.php');
?>