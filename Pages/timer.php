<?php
    session_start();

    header('location:Questions2.php');
    $_SESSION['time_start'] = time();
?>