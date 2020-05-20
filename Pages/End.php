<!--Event Expired-->
<?php
    include '../Components/closed.php';
    include '../Components/footer.php';
    return ;

?>

<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    require_once '../Backend/auth.php';
    require_once '../Backend/authLogin.php';

        if(!isset($_SESSION['email'])){
            include '../Components/error.php';

            return ;
        }

        //fetch user_info
        ob_start();
        $user_info = fetchUser($_SESSION['email']);
        ob_end_clean();

        if( (int)$user_info['progress_count'] != 11){
            include '../Components/incomplete.php';

            return ;
        }

        function getHoursMinutes2($seconds, $format = '%02d:%02d:%02d') {

            if (empty($seconds) || ! is_numeric($seconds)) {
                return false;
            }
        
            $minutes = round($seconds / 60);
            $hours = floor($minutes / 60);
            $remainMinutes = ($minutes % 60);
            $remainSeconds = ($seconds % 60);
        
            return sprintf($format, $hours, $remainMinutes, $remainSeconds);
        }
?>
<style>
    #card{
        color:white;
        height: 360px;
        /* margin-top: auto;
        margin-bottom: auto; */
        font-size:16px;
        margin:0 auto;
        width: 75%;
        background-color: rgba(0,0,0,0.75) !important;
    }
    #card-body{
        width: 75%;
        font-size:16px;
    }
    .font{
        font-size : 36px;
    }
    .try{
        height:80%;
        width:80%;
    }
    .item1{
        float:left;
        width:50%;
    }
    .item2{
        float:right;
        width:50%;
    }
    /* #list{
        background-color: rgba(0,0,0,0.75) !important;
    } */
    @media(max-width:760px){
        #card{
            font-size:14px;
        }
        #card-body{
            margin-top:-4px;
            width: 100%;
            font-size:13px;
            padding:10px;
        }
        .font{
            font-size : 20px;
            margin:0 auto;
            padding:0 10px;
            align:center;
        }
        .try{
            height:90%;
            width:100%;
        }
        .item1{
            float:left;
            height:50%;
            width:80%;
            margin:0 auto;  
            padding:1px;
        }
        .item2{
            float:left;
            width:100%;
            margin:0 auto;
            background-color: rgba(0,0,0,0.75) !important;
            justify-content:center;
            align:center;
            align-items:center;
            display:flex;
            flex-direction:column;
        }
        #list-group{
            width:parent;
        }
        #video{
            padding:10px;
        }
        .btnn{
            /* margin-top:-4px;
            margin-left:10px;*/
            margin-bottom:10px;
            padding:2px;
            align:center;
            align-items:center;
            justify-content:center;
        }
    }
    @media(max-height:636px){
        .item1{
            margin:4px;
            padding:4px;
        }
        .item2{
            margin:4px;
            padding:4px;
            display:flex;
            flex-direction:column;
        }
        #list-group{
            margin:2px;
            padding:4px;
        }
        .btn{
            padding:2px;
            margin:2px;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-End</title>
</head>
<body style="background-image:url('../Images/Home.jpg');">
    <!--Header-->
    <?php include '../Components/header.php'?>

    <!--Content-->
    <div class="card mx-5 mt-5" id="card">
        <div class="card-body">
            <h1 class="font">Congratulations!!</h1>
            <div>
                <div class=item1>
                    <video class="try" controls>
                        <source src="../Videos/InterrogationScene.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <div class="item2">
                    <ul class="list-group my-3 text-dark">
                        <?php
                            $time_taken = $user_info['time_end'] - $user_info['time_start'];
                            $time =  getHoursMinutes2($time_taken);

                            print"  <li class=\"list-group-item\"><b>Points: </b>".$user_info['points']."</li>
                                    <li class=\"list-group-item\"><b>Incorrect Attempts: </b>".$user_info['incorrect_attempts']."</li>
                                    <li class=\"list-group-item\"><b>Hints used: </b>".$user_info['hints_used']."</li>
                                    <li class=\"list-group-item\"><b>Time taken: </b>".$time."</li>";
                        ?>
                    </ul>
                    <a href="../Backend/logout.php" type="button" class="btn btn-dark btnn">End</a>
                </div>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <?php include '../Components/footer.php';?> 
</body>
</html>