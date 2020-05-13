<?php

    session_unset();
    session_destroy();
    header('location: ../Pages/Home.php');
    
?>