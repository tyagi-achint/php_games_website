var pName = "Anonymous";


pName = prompt("Enter your Name: ");
if (pName != null) {
  var pName = pName.replace(/\s+/g, ' ').trim();
}
if (pName == null || pName.length == 0) {
  pName = "Anonymous";
}
var gamePattern = [];
var userClickedPattern = [];
var buttonColours = ["red", "blue", "green", "yellow"];
var level = 0;
var started = false;

var numberOfButtons = document.querySelectorAll(".btn").length;
var buttons = document.querySelectorAll(".btn");

for (var i = 0; i < numberOfButtons; i++) {
  buttons[i].addEventListener("click", function () {
    var userChosenColour = this.id;
    userClickedPattern.push(userChosenColour);
    animatePress(userChosenColour);
    checkAnswer(userClickedPattern.length - 1);
  });
}

document.querySelector(".btnStart").addEventListener("click", function () {
  if (!started) {
    document.querySelector("#level-title").textContent = "Level " + level;
    nextSequence();
    started = true;
  }
});

function nextSequence() {
  userClickedPattern = [];
  level++;
  document.querySelector("#level-title").textContent = "Level " + level;
  var randomNumber = Math.floor(Math.random() * 4);
  var randomChosenColour = buttonColours[randomNumber];
  gamePattern.push(randomChosenColour);

  animatePress(randomChosenColour);
}

function animatePress(currentColour) {
  document.getElementById(currentColour).classList.add("pressed");
  setTimeout(function () {
    document.getElementById(currentColour).classList.remove("pressed");
  }, 100);
}

function startOver() {
  if (level > 5) {
    saveScoreToDatabase(level, pName)
  }
  gamePattern = [];
  userClickedPattern = [];
  level = 0;
  started = false;
}

function checkAnswer(currentLevel) {
  if (gamePattern[currentLevel] === userClickedPattern[currentLevel]) {
    if (userClickedPattern.length === gamePattern.length) {
      setTimeout(function () {
        nextSequence();
      }, 1000);
    }
  } else {
    document.querySelector(".container").classList.add("game-over");
    setTimeout(function () {
      document.querySelector(".container").classList.remove("game-over");
    }, 200);
    document.querySelector("#level-title").textContent = "Game Over, Restart";
    startOver();
  }
}







function saveScoreToDatabase(playerScore, playerName) {
  var data = {
    playerScore: playerScore, playerName: playerName
  };
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'SaveScore/Colour_memory.php', true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
      } else {
        console.error('Request failed with status:', xhr.status);
      }
    }
  };
  var jsonData = JSON.stringify(data);
  xhr.send(jsonData);
}