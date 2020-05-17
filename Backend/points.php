<?php
    require_once '../Database/Database.php';
    require_once 'auth.php';
    require_once 'authLogin.php';

    //JSON Parsing
    $data = file_get_contents("../Database/Questions.json");
    $data = json_decode($data,true);

    $_SESSION['wrongAnswer'] = null;

    $question_no = (int)$_SESSION['progress_count'];

    // Initial Points => +15 : done
    // Correct Answer in 1st attempt => +9 : done
    // Incorrect Attempts => -(3 +(incorrect_attempts)*2) : done
    // Hint => -(10 + (hints_used)*2) : done

    if(isset($_POST['answer'])){

        //Collecting Strings
        $correct_answer = trim(strtoupper($data[$question_no]['answer']));
        $input = trim(strtoupper($_POST['answer']));


        //Regex Match
        if(preg_match('/'.$correct_answer.'/',$input)){
            //echo "Matched";
            $_SESSION['progress_count']++;
            $_SESSION['points'] += 9;

            $current_time = time();
            
            updateProgress($_SESSION['email'],$_SESSION['progress_count'],$_SESSION['points'],$current_time);
            header('location: timer.php');

        }else{
            echo "not matched";

            $_SESSION['wrongAnswer'] = "true";
            updatePointsForAttempts($_SESSION['email'],$_SESSION['attempts'],$_SESSION['points']);
            header('location: ../Pages/Questions2.php');
        }
    }

    $user_details = fetchUser($_SESSION['email']);
    $_SESSION['current_points'] = (int)$user_details['points'];
    
?>