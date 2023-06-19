<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();
?>
<html>
<body>
<?php 
  if (!empty($old_user))
  {
    echo '<meta http-equiv="refresh" content="1;url=../final-php/index.php" />';
  	include 'redirect.php';
    }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br />'; 
  }
?> 
<a href="index.php">Back to main page</a>
</body>
</html>
