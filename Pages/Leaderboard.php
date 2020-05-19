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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221B Baker Street-Leaderboard</title>
</head>
<body style="background-image: url('../Images/Leaderboard.jpg'); ">
    
    <!--Header-->
    <?php include '../Components/header.php'; ?>

    <div class="container">
        <div class="justify-content-center h-100 mt-5" >
            <div class="card text-white" style="background-color: rgba(0,0,0,0.75); height: 450px">
              <div class="card-header mx-auto">
                <h3>Leaderboard</h3>
              </div>
              <div class="card-body">
              <div style="overflow:scroll;">
                <table class="table table-striped mx-auto text-white table-dark" style="width:85%, height:400px">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Score</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            require '../Database/Database.php';

                            $cursor = sortLeaderboard();
                            $i=0;
                            
                            foreach ($cursor as $state) {
                                $time_taken = $state['time_end'] - $state['time_start'];
                                $i++;

                                if($time_taken <= 0){
                                    print"<tr>
                                        <th scope=\"row\">$i</th>
                                        <td>".$state['email']."</td>
                                        <td>".$state['points']."</td>
                                        <td>".$state['progress_count']."</td>
                                        <td> NA  </td>
                                    </tr>";
                                }else{
                                    $time =  getHoursMinutes($time_taken);
        
                                    print"<tr>
                                            <th scope=\"row\">$i</th>
                                            <td>".$state['email']."</td>
                                            <td>".$state['points']."</td>
                                            <td>".$state['progress_count']."</td>
                                            <td>".$time."</td>
                                        </tr>";
                                }

                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>

    <!--Footer-->   
    <?php include '../Components/footer.php'; ?>

</body>
</html>