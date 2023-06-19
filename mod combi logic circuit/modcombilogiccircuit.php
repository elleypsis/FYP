<head>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/mod.css">

</head>

<header class="page-header gradient">
<link rel="stylesheet" href="../css/custom.css">

<div class="grid-container">

 <div class="toprow">
<h1> Combinational Logic Circuit</h1>
    </div>

<div class="leftcolumn">
  
<h2> Chapters </h2>
<br>
<div class="progress">

<?php
  include 'progressbar.php';
?>

</div>
<br>
<p>Boolean Algebra </p>
Truth Table <br>
Logic Diagram  </div>

<div class="rightcolumn">
    <div class="container">
        <div class="column">
             <div class="col-sm-3">
                <h3> Boolean Algebra </h3>
                Boolean Algebra Notes <br>
                Video on Boolean Algebra <br>
                Test Your Knowledge! Quiz <br> 
                
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
            
                  $sql = "SELECT CLCchap1 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $chap_status = $row['CLCchap1'];

                      if($chap_status == '1')
                      {
                        echo '<br>';
                        echo '<br>';

                        echo '<div class="completeSection">';
                        echo '<p> Completed</p>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>';
                        echo '</div>';
                        
                      }

                      elseif ($chap_status == '0')
                      {
                        echo '<br>';
                        echo '<a href="../final-php/c1balgebra.php"><button type="button" class="startChapter">START</button></a>';
                      }
                    }
                  }
                  else {
                    echo '<br>';

                    echo '<a href="../final-php/login.php"><button type="button" class="startChapter">Log In To Begin</button></a>';
                  }
                ?>
            </div>

            <div class="col-sm-3">
            <h3> Truth Table </h3>
                Truth Table Notes <br>
                Video on Truth Table <br>
                Test Your Knowledge! Quiz <br>  
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
            
                  $sql = "SELECT CLCchap2 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $chap_status = $row['CLCchap2'];

                      if($chap_status == '1')
                      {
                        echo '<br>';
                        echo '<br>';
                        echo '<div class="completeSection">';
                        echo '<p> Completed</p>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>';
                        echo '</div>';
                        
                      }

                      elseif ($chap_status == '0')
                      {
                        echo '<br>';
                        echo '<a href="../final-php/c1truthtable.php"><button type="button" class="startChapter">Start</button></a>';

                      }
                    }
                  }
                ?>  
            </div>

            <div class="col-sm-3">
            <h3> Logic Diagram</h3>
                Logic Diagram Notes <br>
                Video on Logic Diagram <br>
                Test Your Knowledge! Quiz <br> 

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
            
                  $sql = "SELECT CLCchap3 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $chap_status = $row['CLCchap3'];

                      if($chap_status == '1')
                      {
                        echo '<br>';
                        echo '<br>';

                        echo '<div class="completeSection">';
                        echo '<p> Completed</p>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>';
                        echo '</div>';
                        
                      }

                      elseif ($chap_status == '0')
                      {
                        echo '<br>';

                        echo '<a href="../final-php/c1logicdiagram.php"><button type="button" class="startChapter">START</button></a>';
                      }
                    }
                  }
                ?>
    
                
            </div>

            <div class="col-sm-3">
                <h3> Experiment</h3>
                Experiment Manual<br>
                Video <br>
                Recap <br>
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
            
                  $sql = "SELECT CLCchap4 FROM users where email = '{$_SESSION['valid_user']}'";
                  $result = mysqli_query($conn, $sql);
            
                  if (mysqli_num_rows($result) > 0) {
                  
                    if($row = mysqli_fetch_assoc($result)) {
                      $chap_status = $row['CLCchap4'];

                      if($chap_status == '1')
                      {
                        echo '<br>';
                        echo '<br>';

                        echo '<div class="completeSection">';
                        echo '<p> Completed</p>';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>';
                        echo '</div>';
                        
                      }

                      elseif ($chap_status == '0')
                      {
                        echo '<br>';
                        echo '<a href="../final-php/c1experiment.php"><button type="button" class="startChapter">START</button></a>';
                      }
                    }
                  }
                ?>

            </div>



  </div>
</div>

</div>

</div>

      
    </header>