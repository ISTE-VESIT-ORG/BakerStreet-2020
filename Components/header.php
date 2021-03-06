<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000">
  <a class="navbar-brand" href="Home.php">
  <i class="fas fa-user-secret fa-2x text-white"></i></a>
  <h4><b class="text-warning "><i>221B Baker Street</i></b></h4>
  <!-- Collapse button -->
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end mr-5" id="basicExampleNav">
    <ul class="navbar-nav ">
      <li class="nav-item mx-2">
        <a class="nav-link" href="../Pages/Home.php">Home</a>
      </li>
      <?php
              error_reporting(E_ERROR | E_WARNING | E_PARSE);
              session_start();
              if(isset($_SESSION['progress'])){
                  print"<li class=\"nav-item mx-2\">
                          <a class=\"nav-link\" href=\"../Backend/timer.php\">Current Scene<span class=\"sr-only\">(current)</span></a>
                        </li>";
              }
          ?>
      <!-- <li class="nav-item mx-2">
        <a class="nav-link" href="../Pages/Leaderboard.php">Leaderboard</a>
      </li> -->
      <?php
              error_reporting(E_ERROR | E_WARNING | E_PARSE);
              session_start();
              if(isset($_SESSION['email'])){
                  print"<li class=\"nav-item mx-2\">
                          <a class=\"nav-link\" href=\"../Backend/logout.php\">Logout<span class=\"sr-only\">(current)</span></a>
                        </li>";
              }
          ?>
          <?php
              error_reporting(E_ERROR | E_WARNING | E_PARSE);
              session_start();
              if(isset($_SESSION['progress'])){
                  print"<li class=\"nav-item ml-2\">
                          <h3><span class=\"badge badge-secondary ml-3\">Points: ".$_SESSION['points']."</span></h3>
                        </li>";
              }
          ?>
    </ul>
  </div>
</nav>


