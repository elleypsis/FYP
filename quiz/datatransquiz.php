<script>

const questions = [
    {
        //multiplexer
        question: "The boolean function realised by the given logic circuit is:",
        optionA: "Σm(0,1,3,5,9,10,14)",
        optionB: "Σm(2,3,5,6,10,12,15)",
        optionC: "Σm(1,2,4,5,11,14,15)",
        optionD: "Σm(2,3,5,7,8,9,12)",

        correctOption: "optionA",
        image: "quiz/datatransquestion1.png"
    },

    {
        //demultiplexer
        question: "Most demultiplexers facilitate which type of conversion?",
        optionA: "AC to DC",
        optionB: "Single Input, Multiple Outputs",
        optionC: "Odd parity to even parity",
        optionD: "Decimal to hexadecimal",
        correctOption: "optionB",
        image: ""


    },

    {
        //priority encoder
        question: "The logic shown in the given figure works as?",
        optionA: "Decoder",
        optionB: "Binary to Gray Encoder",
        optionC: "Priority Encoder",
        optionD: "Binary to XS-3 Converter",
        correctOption: "optionC",
        image: "quiz/datatransquestion3.png"
    },

    {
        //binaray decoder
        question: "Which of the following Boolean Expressions can be realised by the given Binary Encoder? Assume that, at any given time, only one input is high.",
        optionA: "A+C",
        optionB: "B+D",
        optionC: "C+D",
        optionD: "B+C",
        correctOption: "optionC",
        image: "quiz/datatransquestion4.png"
    }

]
  
let shuffledQuestions = [] //empty array to hold shuffled selected questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    while (shuffledQuestions.length <= 2) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}

let questionNumber = 1
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0

// function for displaying next question in the array to dom
function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question + '<br><img src="' + currentQuestion.image + '" width="300">';

    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })
   
    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
  event.preventDefault();

    checkForAnswer()
    unCheckRadioButtons()
    //delays next question displaying for a second
    setTimeout(() => {
        if (indexNumber <= 2) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore == 0) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore == 1 || playerScore == 2) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore == 3) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 3) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal and resets game
function closeScoreModal() {
    event.preventDefault();

    // questionNumber = 1
    // playerScore = 0
    // wrongAttempt = 0
    // indexNumber = 0
    // shuffledQuestions = []
    // NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    event.preventDefault();

    document.getElementById('option-modal').style.display = "none"
    
}

function refreshQuiz (){
    event.preventDefault();
    
    questionNumber = 1;
  playerScore = 0;
  wrongAttempt = 0;
  indexNumber = 0;
  shuffledQuestions = [];
  handleQuestions();
  NextQuestion(0);

}

</script>