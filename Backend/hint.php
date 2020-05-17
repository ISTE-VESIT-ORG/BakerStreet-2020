<?php
    require_once '../Database/Database.php';

    session_start();
    
    //hint handling
    $_SESSION['hint'] = true;

    //echo $_SESSION['hint'];

    updatePointsForHints($_SESSION['email'],$_SESSION['hints_used'],$_SESSION['points']);

    header('location: ../Pages/Questions2.php');
?>