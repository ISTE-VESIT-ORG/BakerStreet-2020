<!--Session-->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<!--Validation-->
<script>
  function validateForm(){
    var usernameCheck = document.forms["authForm"]["name"].value
    var emailCheck = document.forms["authForm"]["email"].value
    var branchCheck = document.forms["authForm"]["branch"].value

    console.log("in there")

    if(usernameCheck == ""){
      alert("Please choose a Secret Name")
      return false
    }

    if(emailCheck == ""){
      alert("Please enter your VES Email ID")
      return false
    }

    if(branchCheck == "-1"){
        alert("Please enter your branch")
        return false
    }

  }
</script>
<body>

    <!--Header-->
    <?php include '../Components/header.php'?>

    <!-- form -->
    <form name="authForm" action="Questions.php" method="POST" onsubmit="return validateForm()">
        <div class="input-group mb-3 my-5 mx-5" style="width: 30%;">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Secret Name" 
                  aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 my-5 mx-5" style="width: 30%;">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" name="email" class="form-control" placeholder="VES Email ID" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3 my-5 mx-5" style="width: 30%;">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Branch</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="branch">
                <option value="-1" selected disabled>Choose...</option>
                <option value="INST">INST</option>
                <option value="ETRX">ETRX</option>
                <option value="CMPN">CMPN</option>
                <option value="EXTC">EXTC</option>
                <option value="INFT">INFT</option>
            </select>
            </div>
          <button type="submit" value="Submit" class="btn btn-primary mx-5">Submit</button>
    </form>

    <!--Footer-->
    <?php include '../Components/footer.php';?>  

</body>
</html>


