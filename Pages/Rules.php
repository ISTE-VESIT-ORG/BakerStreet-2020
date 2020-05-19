<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    require_once '../Backend/auth.php';
    require_once '../Backend/authLogin.php';

        if(!isset($_SESSION['email'])){
            include '../Components/error.php';

            return ;
        }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FE-Quiz_Rules</title>
</head>
<style>
    body{
        background-image:url(../Images/Home.jpg);
    }
    #card{
        background-color: rgba(0,0,0,0.75);
        color : white;
        margin-bottom: 100px;
    }
     .display{
    margin: 195px 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 150px;
    padding-right: 150px;
}

@media (max-width: 760px) {

  .display {
    margin: 0px 10px ;
      padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 20px
}
.abc{
    font-size: 9px;
    color:#000;

}
.card1{
    width: 90%; 
   height:80%;
    height:100%;


}


  }
  
}
.card1{
    width: 90%; 
    
    height:150%;

}
.abc{
    font-size: 15px;
    color:#FFF;
    padding-bottom: 30px;

}


</style>
<body>
    <!--Header-->
    <?php include '../Components/header.php'; ?>

    <!--Content-->
   <div class="display " id="card-body" >
          <div class="row" style="width: 100%;height:300px; justify-content: space-evenly; align-items: center;">
            <div class="col-lg-6 col-md-5 col-sm-12" style="margin: 10px 0px;align-items: center;display: flex; justify-content: center;height: 100%">
              <video class="w-100" controls>
                        <source src="../Videos/s2.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
            </div>
            <div class=" col-lg-6 col-md-5 col-sm-12" style="margin: 10px 0px;align-items: center;display: flex;justify-content: center;height: 100%">
  
                 
                  <div class="card1 "  >
                   
                       <p class="abc">
                        
                        Initially, you will be credited with <b>10</b> points.<br>

                        Taking up a hint will cost you <b>10</b> points.The values of the hints will increase by 2 points for the next hint after every 1 hint taken.<b>2</b> points.<br>

                        For eg-If you are taking a hint in the 1st round then<b>10</b> points will be deducted.If you again take the hint in the 2nd round then<b>12</b> points, for the 3rd round <b>14</b> points and so on.<br>

                        A maximum of <b>9</b> points will be credited for each round.<br>

                        With every incorrect attempt, points will be deducted in the following manner:<br> 
Answer in first attempt: <b>9</b> points<br>
Answer in second attempt: <b>8</b> points<br>
Answer in third attempt: <b>6</b> points<br>
Answer in fourth attempt and more: 3 points<br>

                        You will be credited with a minimum of <b>3</b> points for passing each round.<br>

                        If the player has points less than the cost of the hint, he or she cannot take the hint.<br>
                        <a href="../Conversations/conversation.php" type="button" class="btn btn-success mx-auto">Start</a>
                    </p>
                    
                   
                      </div>
                  </div>
              </div>
           
          </div>
    </div>

    <!--Footer-->
    <?php include '../Components/footer.php'; ?>
</body>
</html>