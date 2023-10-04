
var you;
var yourScore = 0;
var opponent;
var opponentScore = 0;

var choices = ["rock", "paper", "scissors"];
restartRPS = document.querySelector('button.restartrockpaperscissors')

restartRPS.onclick = restartGame;

function resetGame() {
    document.getElementById("choices").innerHTML = "";
    restartGame();
    setTimeout(function () {
        location.reload();
    }, 1)
}


function restartGame() {
    document.getElementById("your-choice").src = "Games/Rock-Paper-Scissors/question_mark.png";
    document.getElementById("opponent-choice").src = "Games/Rock-Paper-Scissors/question_mark.png";
    yourScore = 0;
    opponentScore = 0;
    document.getElementById("your-score").innerText = yourScore;
    document.getElementById("opponent-score").innerText = opponentScore;
}

if (document.getElementById("rockpaperscissors")) {
    for (let i = 0; i < 3; i++) {
        let choice = document.createElement("img");
        choice.id = choices[i];
        choice.src = "Games/Rock-Paper-Scissors/" + choices[i] + ".png";
        choice.addEventListener("click", selectChoice);
        document.getElementById("choices").append(choice);
    }
}

function selectChoice() {
    you = this.id;
    document.getElementById("your-choice").src = "Games/Rock-Paper-Scissors/" + you + ".png";

    //random for oppponent
    opponent = choices[Math.floor(Math.random() * 3)]; //0- .999999 * 3 = 0-2.99999
    document.getElementById("opponent-choice").src = "Games/Rock-Paper-Scissors/" + opponent + ".png";

    //check for winner
    if (you == opponent) {
        yourScore += 1;
        opponentScore += 1;
    }
    else {
        if (you == "rock") {
            if (opponent == "scissors") {
                yourScore += 1;
            }
            else if (opponent == "paper") {
                opponentScore += 1;
            }
        }
        else if (you == "scissors") {
            if (opponent == "paper") {
                yourScore += 1;
            }
            else if (opponent == "rock") {
                opponentScore += 1;
            }
        }
        else if (you == "paper") {
            if (opponent == "rock") {
                yourScore += 1;
            }
            else if (opponent == "scissors") {
                opponentScore += 1;
            }
        }
    }

    document.getElementById("your-score").innerText = yourScore;
    document.getElementById("opponent-score").innerText = opponentScore;
}