<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style1.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FE-Quiz_Home</title>
          
</head>
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
<body>
  
   <?php include '../Components/header.php'?>
    <div class="display" >
          <div class="row" style="width: 100%;height:300px; justify-content: space-evenly; align-items: center;">
            <div class="col-lg-6 col-md-5 col-sm-12" style="margin: 10px 0px;align-items: center;display: flex; justify-content: center;height: 100%">
              <img src="../images/diwali.jpg" width="90%" height="100%"></img>
            </div>
            <div class=" col-lg-6 col-md-5 col-sm-12" style="margin: 10px 0px;align-items: center;display: flex;justify-content: center;height: 100%">
  
                  <?php echo isset($_SESSION['email']); ?>

                  <div class="card  "  style="width: 90%; background-color: rgba(255,255,255,0.5);height:100%">
                        <h5 class="card-title" >Request OTP</h5>
                          <!--Form-->
                          <form name="LoginForm" method="POST" onsubmit="return sendOTP()">
                              
                                <div class="input-group mt-5 mb-3 mb-2 mx-5" style="width: 80%;">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                  </div>
                                  <input type="text" name="email" class="form-control" placeholder="VES Email ID" aria-label="email" aria-describedby="basic-addon1">
                                  
                                </div>
                                <button type="submit" id="requestOTP" value="Submit" class="btn btn-primary ml-5 my-2">Request OTP</button>
                          </form>
                      </div>
            </div>
          </div>
    </div>
    <div id="particles-js">
   
    </div>

<script type="text/javascript"src="../js/particles.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
 <?php include '../Components/footer.php';?>
</body>
</html>