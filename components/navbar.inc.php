<style>

.btn.btn-secondary.dropdown-toggle {
  background-color: #343a40;
  border: 0px solid #4cc9f0;

}

.navbar-brand img {
/* height: 40px; */
margin-top: -22px;
margin-bottom: -30px;
}

*/
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

  <div class="container">
    
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>


    <div
      class="collapse navbar-collapse justify-content-left"
      id="navbarNav"
    >
      <ul class="navbar-nav">

      <li class="nav-item dropdown">
      <div class="dropdown show">
<a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Modules
</a>


<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="../final-php/logicgate.php">Logic Gates</a>
<a class="dropdown-item" href="../final-php/combilogiccircuit.php">Combinational Logic Circuit</a>
<a class="dropdown-item" href="../final-php/applilogiccircuit.php">Application of Logic Circuit</a>
</div>
</div>
    </li>

</ul>
</div>

<a href="../final-php/index.php" class="navbar-brand"><img src="img/opetella.png" alt="" height="63px" /></a>


<div class="collapse navbar-collapse justify-content-end"
      id="navbarNav"
    >
      <ul class="navbar-nav">
        <li class="nav-item">

          <?php
          include "dbconnect.php";
          session_start();

          if (isset($_SESSION['valid_user']))
          {
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="profilepage.php">Your Profile</a>';
            echo '</li>';
          }

          else {
            echo '<a class="nav-link" href="login.php">Login</a>';
            echo '  <li class="nav-item">
            <a class="nav-link" href="signup.php">Sign Up</a>
          </li>';
          }


          ?>


        </li>
      </ul>
    </div>

  </div>

        </nav>