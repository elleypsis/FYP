<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>

<?php 
include "dbconnect.php";
session_start();

if (isset($_POST['email']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $email = $_POST['email'];
  $password = $_POST['password'];

$password = md5($password);
  $query = 'select * from users '
           ."where email='$email' "
           ." and password='$password'";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $email;  

  }

  else {
    echo "<script>alert('Invalid login credentials. Please try again.');</script>";
}

  $dbcnx->close();
}
?>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <?php
if (isset($_SESSION['valid_user']))
{
  echo '<meta http-equiv="refresh" content="3;url=../final-php/index.php" />';
  echo 'Welcome Back, '.$_SESSION['valid_user'].' <br> Redirecting you to homepage.';
}

else
{
  if (isset($email))
  {
    // if they've tried and failed to log in
    echo 'Could not log you in.<br />';
  }
  
            echo '<div class="mb-md-5 mt-md-4 pb-5">';
echo '<form action="login.php" action="index.php" method=POST>';
echo '';
echo '<h2 class="fw-bold mb-2 text-uppercase">Login</h2>';
echo '<p class="text-white-50 mb-5">Please enter your login and password!</p>';
echo '';
echo '<div class="form-outline form-white mb-4">';
echo '<input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" />';
echo '<label class="form-label" for="typeEmailX">Email</label>';
echo '</div>';
echo '';
echo '<div class="form-outline form-white mb-4">';
echo '<input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />';
echo '<label class="form-label" for="typePasswordX">Password</label>';
echo '</div>';
echo '';
echo '';
echo '<button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>';
echo '';

echo '';
echo '</form>';
echo '</div>';
echo '<div>';
echo '<p class="mb-0">Dont have an account? <a href="../final-php/signup.php" class="text-white-50 fw-bold">Sign Up</a>';
echo '</p>';
echo '</div>';

}
  
  ?>

          

          </div>
        </div>
      </div>
    </div>
  </div>
</section>