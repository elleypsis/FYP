<head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

<!-- Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">

<link rel="stylesheet" type="text/css" href="css/chapter.css">

</head>

<?php
session_start();
?>

<header class="page-header gradient">
    <div class="grid-container">
        
    <div class="toprow">
    <i class="bi bi-arrow-left" style="font-size: 2rem; " onclick="goBack()"></i>

        <h1> Combinational Logic Circuit </h1>
    </div>
    
    <div class="leftcolumn">
        <h2> Experiment</h2>
        <div class='progressflow' style="text-align:center;margin-top:40px;">
    <span class="step"></span>Experiment Manual<br>
    <span class="vertical-line"></span><br>
    
    
    <span class="step"></span>Video<br>
    <span class="vertical-line"></span><br>
  

    <span class="step"></span>Recap!<br>
  </div>
    
    </div>
    
    <div class="rightcolumn">
    <form action="combilogiccircuit.php" method="POST">
   
    </form>

<form id="CLCchap4form" method="POST" action="combilogiccircuit.php" >


  <div class="tab">Notes:
    <div class="notes">
        <embed src="notes/experiment1.pdf" width="900vh" height="700vh"/>

      </div>
  </div>

  <div class="tab">Video:
    <div class="video">
    <iframe width="900vh" height="700vh"src="https://www.youtube.com/embed/rKt1LXkcrwE"></iframe>
    </div>
  </div>


  <div class="tab">Quiz:
  <body onload="NextQuestion(0)">
    <main>
        <div class="modal-container" id="score-modal">
          
            <div class="modal-content-container">
              
                <h1>Congratulations, Quiz Completed.</h1>
              
                <div class="grade-details">
                    <p>Attempts : 10</p>
                    <p>Wrong Answers : <span id="wrong-answers">/3</span></p>
                    <p>Right Answers : <span id="right-answers">/3</span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p ><span id="remarks"></span></p>
                </div>
              
                <div class="modal-button-container" height="auto">
                    <button class="quizCloseButton" onclick="closeScoreModal()">Close</button>
                </div>
              
            </div>
        </div>

        <div class="game-quiz-container">
          
            <div class="game-details-container">

            <button class="refresh-btn" onclick="refreshQuiz()">
  <i class="bi bi-arrow-clockwise"></i>
</button>
                <h1>Score : <span id="player-score"></span> / 3</h1>
                <h1> Question : <span id="question-number"></span> / 3</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">
              
               <div class="modal-container" id="option-modal">
                 
                    <div class="modal-content-container">
                         <h1>Please Pick An Option</h1>
                      
                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>
                      
                    </div>
                 
               </div>
              
                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>
              

                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>

            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next</button>
            </div>

        </div>
    </main>
</body>

<?php
  include 'quiz/experiment.php';
?>

  </div> 

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

</form> 


<?php
  include 'components/tab.php';
?>

<script>
    function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");

  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;

  // Hide the current tab:
  x[currentTab].style.display = "none";

  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;

  if (currentTab >= x.length) {
    // ... the form gets submitted:
        document.getElementById("CLCchap4form").submit();
        <?php
    
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opetella";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE users SET CLCchap4='1' WHERE email = '{$_SESSION['valid_user']}' ";

// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

//to make it work, must uncomment above code, save, refresh page, then comment above code 

$conn->close();
  
?> 
        return false;  
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function goBack() {
  window.history.back();
}
</script>



    </div>
  </div>
</div>

</div>

</div>

    
    </header>