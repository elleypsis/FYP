<section class="feature gradient">

<header class="page-header gradient">
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/profile.css">

</header>


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opetella";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  $sql = "SELECT * FROM users where email = '{$_SESSION['valid_user']}'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
      $firstName = $row['firstName'];
      $lastName = $row['lastName'];
      $userid = $row['userid']; 
      $email = $row['email'];
      $CLCchap1 = $row['CLCchap1'];
      $CLCchap2 = $row['CLCchap2'];
      $CLCchap3 = $row['CLCchap3'];
      $CLCchap4 = $row['CLCchap4'];
      $ALCChap1 = $row['ALCChap1'];
      $ALCChap2 = $row['ALCChap2'];
      $ALCChap3 = $row['ALCChap3'];
      $ALCChap4 = $row['ALCChap4'];
      
      echo '<div class="grid-container">';
      echo ' <div class="toprow">';
      echo '<div class="topRowTable">';
      echo '<table class="TopTable">';
echo '<tbody>';
echo '<tr>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';
echo '<th></th>';

echo '</tr>';

echo '<tr>';
echo '<td> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
//   <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
// </svg></td>';
echo '<td><h1> Welcome Back, '.$firstName.' '.$lastName.' </h1> </td>';
echo '<td><h2>'.$userid.'</h2></td>';
echo '<td><h2>'.$email.'</h2></td>';
echo '<td><a href="logout.php"><button type="button" class="logOutButton">Log Out</button></a></td>';
echo '</tr>';
echo '';
echo '</tbody>';
echo '</table>';
      echo '</div>';
      echo '</div>';

      echo '<div class="bottomrow">';

      echo '<br><br>';
                        echo '<table class="GeneratedTable">';
              
                        echo '<tbody>';

                        echo '<tr>';
                        echo '<th></th>';
                        echo '<th>Chapter 1</th>';
                        echo '<th>Chapter 2</th>';
                        echo '<th>Chapter 3</th>';
                        echo '<th>Chapter 4</th>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>
                        <h3>Combi Logic Circuit </h3>  </td>';

                        if ($CLCchap1 == '0'){
                          echo '<td><i class="bi bi-circle"></i></td>';
                        }
                        elseif ($CLCchap1 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';
                        }

                        if ($CLCchap2 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';
                        }
                        elseif ($CLCchap2 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';
                        }

                        if ($CLCchap3 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';

                        }
                        elseif ($CLCchap3 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';

                        }

                        if ($CLCchap4 == '0'){
                          echo '<td><i class="bi bi-x-lg"></i></td>';
                        }
                        elseif ($CLCchap4 == '1'){
                          echo '<td><i class="bi bi-x-lg"></i></td>';

                        }
                        
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td><h3>Application of Logic Circuit </h3> 
                        </td>';

                        if ($ALCChap1 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';

                        }
                        elseif ($ALCChap1 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';

                        }

                        if ($ALCChap2 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';

                        }
                        elseif ($ALCChap2 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';

                        }

                        if ($ALCChap3 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';

                        }
                        elseif ($ALCChap3 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';

                        }

                        if ($ALCChap4 == '0'){
                          echo '<td><i class="bi bi-circle" style="font-size: 20px;"></i></td>';

                        }
                        elseif ($ALCChap4 == '1'){
                          echo '<td><i class="bi bi-check2-circle" style="font-size: 20px;" ></i></td>';
                        }
                        
                        echo '</tr>';
                        echo '';
                        echo '</tbody>';
                        echo '</table>';   
                        echo '</div>';


                        echo '<div class="mostbottom">';
                        echo '';
                        echo '<div class="container-fluid py-5">';
                        echo '<div class="horizontal-timeline">';
                        echo '';
                        echo '<ul class="list-inline items text-center">';
                        echo '';
                        echo '<li class="list-inline-item items-list">';
                        echo '<div class="px-4">';
                        echo '<div class="event-date badge bg-info"> <i class="bi bi-book" style="font-size: 20px;"></i> </div>';
                        echo '<h5 class="pt-2">Logic Gate</h5>';
                        echo '<p class="text-muted">Refresh your memory on the fundamental building blocks of digital circuits and how they operate before tackling the harder concepts.</p>';
                        echo '<div>';
                        echo '<a href="../final-php/logicgate.php" class="logOutButton">Go There!</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                        echo '';
                        echo '<li class="list-inline-item items-list">';
                        echo '<div class="px-4">';
                        echo '<div class="event-date badge bg-info"> <i class="bi bi-book" style="font-size: 20px;"></i> </div>';
                        echo '<h5 class="pt-2">Combinational Logic Circuits</h5>';
                        echo '<p class="text-muted"> Learn about how digital circuits are constructed using basic logic gates, & how they can be combined to create more complex circuits.';
                        echo '</p>';
                        echo '<div>';
                        echo '<a href="../final-php/combilogiccircuit.php" class="logOutButton">Go There!</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                        echo '';
                        echo '<li class="list-inline-item items-list">';
                        echo '<div class="px-4">';
                        echo '<div class="event-date badge bg-info"> <i class="bi bi-book" style="font-size: 20px;"></i> </div>';
                        echo '<h5 class="pt-2">Application</h5>';
                        echo '<p class="text-muted">Delve deep into the practical application of these circuits in real-world situations and learn how to apply them solve various problems</p>';
                        echo '<div>';
                        echo '<a href="../final-php/applilogiccircuit.php" class="logOutButton">Go There!</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                        echo '';
                        echo '</ul>';
                        echo '';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '';
                        
echo '</div>';
    }
  }

  else {
    echo '<link rel="stylesheet" href="css/bootstrap.min.css" />';
    echo '<link rel="stylesheet" href="css/styles.css" />';
    echo '<link rel="stylesheet" type="text/css" href="css/custom.css">';
    echo '';
    echo '';
    echo '<section class="vh-100 gradient-custom">';
    echo '<div class="container py-5 h-100">';
    echo '<div class="row d-flex justify-content-center align-items-center h-100">';
    echo '<div class="col-12 col-md-8 col-lg-6 col-xl-5">';
    echo '<div class="card bg-dark text-white" style="border-radius: 1rem;">';
    echo '<div class="card-body p-5 text-center">';
    echo 'Oops... It seems like you dont have permission to access this page.';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';  }
   ?>


</div>

    </header>

      
    </section>