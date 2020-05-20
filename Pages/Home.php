<!--Event Expired-->
<?php
    include '../Components/closed.php';
    include '../Components/footer.php';
    return ;

?>

<?php
    require_once '../Database/connStatus.php';

    if(!is_connected()){
      include '../Components/internetError.php';

      return ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/Home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-Home</title>
</head>
<!--Validation-->

<script>

  function sendOTP(){
    var emailCheck = document.forms["LoginForm"]["email"].value
    if(emailCheck == ""){
      alert("Please enter your Email ID")
      return false
    }

    alert("OTP will be sent to your Email ID. Please have some patience.")
    
    document.forms["LoginForm"].action="../Backend/sendOTP.php"
    
  }

</script>


<body style="background-color:black">

    <!--Header-->
    <?php include '../Components/header.php'?>

      <?php 
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
          
        session_start();

        if(isset($_SESSION['email'])){
            include '../Components/session.php';

            return ;
        }
      ?>
      

      <!--Request OTP-->
      <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
              <div class="card-header mx-auto">
                <h3>Request OTP</h3>
              </div>
              <div class="card-body">
              <form name="LoginForm" method="POST" onsubmit="return sendOTP()">
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" pattern="[[2019 2018.]+[a-zA-Z].+[a-zA-Z]+@[ves]+.[ac].+[in]$" required autocomplete="off" name="email" class="form-control" placeholder="VES Email ID">
                  
                </div>
                <div class="form-group ">
                  <input type="submit" id="requestOTP" value="Send OTP" class="btn login_btn btn-warning">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
     

    <!--Footer-->
    <?php include '../Components/footer.php';?>  

</body>
</html>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



