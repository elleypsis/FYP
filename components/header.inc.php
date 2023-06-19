    <style>

.startLearningButton {
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-outline-success:hover {
  color: black ;
  background-color: #4cc9f0;
  border-color: #4cc9f0;
}

@import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

/* h2 {
  font-family: 'Anton', sans-serif;
} */

*/



</style>
    
    <header class="page-header gradient">
      <div class="container pt-3">

        <div class="row align-items-center justify-content-center">

        <!-- <div class="col-md-5">
            <img
              src="img/email_campaign_monochromatic.svg"
              alt="Header image"
            />
          </div> -->

          <div class="col-md-5">
          <div class="image-container">
            <img
              src="img/header.png"
              alt="Header image"
            />
          </div>
          </div>


          <div class="col-md-5">
          <h2>WELCOME TO <span style="font-weight: bold; color:black;   font-family: 'Anton', sans-serif;">optella.</span></h2>

            <p>
            We are dedicated to providing you with a convenient and flexible platform to help you learn and grow.</p>
            <p>You can learn at your own pace and on your own schedule, making it easy to fit learning into your busy life.  </p>

           
            <div class='startLearningButton'>
            <?php
              include "dbconnect.php";
              session_start();

              if (isset($_SESSION['valid_user']))
              {
                echo '<a href="../final-php/profilepage.php" class="tn btn-outline-success btn-lg" role="button">Start Learning Here</a>';
              }

              else {
                echo '<a href="../final-php/signup.php" class="tn btn-outline-success btn-lg" role="button">Start Learning Here</a>';
              }
              ?>
          </div>


          </div>
          
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </header>