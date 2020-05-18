<?php
    require_once '../Database/connStatus.php';

    if(!is_connected()){
    include '../Components/internetError.php';

    return ;
    }
?>
<!--Session-->
<?php 
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/Register.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-Register</title>
</head>
<!--Validation-->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  
  function validateLoginForm(){
    var emailCheck = document.forms["LoginForm"]["email"].value
    var contactCheck = document.forms["LoginForm"]["contact_no"].value
    var divisionCheck = document.forms["LoginForm"]["division"].value
    var otpCheck = document.forms["LoginForm"]["otp"].value

    console.log("in there")

    if(emailCheck == ""){
      alert("Please enter your VES Email ID")
      return false
    }

    if(contactCheck == ""){
      alert("Please enter your contact number")
      return false
    }

    if(divisionCheck == "-1"){
      alert("Please enter your division")
      return false
    }

    if(otpCheck == ""){
      alert("Please enter the OTP sent to your mail")
      return false
    }
    
    document.forms["LoginForm"].action="../Backend/auth.php"

  }
</script>
<body>

    <!--Header-->
    <?php include '../Components/header.php'?>

     <!--Register-->
     <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
              <div class="card-header mx-auto">
                <h3>Register</h3>
              </div>
              <div class="card-body">
              <form name="LoginForm" method="POST" onsubmit="return validateLoginForm()">
                <!--Email-->
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" required autocomplete="off" name="email" class="form-control" placeholder="Email ID">
                </div>
                <!--Contact Number-->
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                  </div>
                  <input autocomplete="off" type="tel" pattern="[7-9]{1}[0-9]{9}" required name="contact_no" class="form-control" placeholder="Contact Number">
                </div>
                <!--Division-->
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="division">
                    <option value="-1" selected disabled>Division</option>
                    <option value="D1">D1</option>
                    <option value="D2A">D2A</option>
                    <option value="D2B">D2B</option>
                    <option value="D2C">D2C</option>
                    <option value="D3">D3</option>
                    <option value="D4A">D4A</option>
                    <option value="D4B">D4B</option>
                    <option value="D5A">D5A</option>
                    <option value="D5B">D5B</option>
                  </select>
                </div>
                <!--OTP-->
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input autocomplete="off" id="OTPinput" type="tel" pattern="[0-9]{4}" required name="otp" class="form-control" placeholder="OTP">
                </div>
                <div class="form-group ">
                  <input type="submit" id="requestOTP" value="Register" class="btn login_btn btn-warning">
                </div>
                <?php
                  if(isset($_SESSION['loginStatus'])=='failed'){
                    print "<div class=\"alert alert-danger mx-5 text-center\" role=\"alert\">
                              Invalid Credentials
                           </div>";  
                    $_SESSION['loginStatus'] = null;
                  }
                  
                  if(isset($_SESSION['loginStatus3'])=='failed'){
                    print "<div class=\"alert alert-danger mx-5 text-center\" role=\"alert\">
                              Your profile is incomplete.
                           </div>";  
                    $_SESSION['loginStatus2'] = null;
                  }
                ?>
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

