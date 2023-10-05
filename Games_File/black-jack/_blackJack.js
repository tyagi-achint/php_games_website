
var dealerSum = 0;
var yourSum = 0;

var dealerAceCount = 0;
var yourAceCount = 0;

var hidden;
var deck;

var canHit = true;



window.addEventListener("load", () => {
    buildDeck();
    shuffleDeck();
    startGame();
});




function buildDeck() {
    var values = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
    var types = ["C", "D", "H", "S"];
    deck = [];

    for (var i = 0; i < types.length; i++) {
        for (var j = 0; j < values.length; j++) {
            deck.push(values[j] + "-" + types[i]); // A-C -> K-C, A-D -> K-D
        }
    }
    // console.log(deck);
}

function shuffleDeck() {
    for (var i = 0; i < deck.length; i++) {
        var j = Math.floor(Math.random() * deck.length); // (0-1) * 52 => (0-51.9999)
        var temp = deck[i];
        deck[i] = deck[j];
        deck[j] = temp;
    }

}

function startGame() {
    hidden = deck.pop();
    dealerSum += getValue(hidden);
    dealerAceCount += checkAce(hidden);
    // console.log(hidden);
    // console.log(dealerSum);
    while (dealerSum < 17) {
        //<img src="Games_File/black-jack/4-C.png">
        var cardImg = document.createElement("img");
        var card = deck.pop();
        cardImg.src = "../Games_File/black-jack/" + card + ".png";
        dealerSum += getValue(card);
        dealerAceCount += checkAce(card);
        document.getElementById("dealer-cards").append(cardImg);
    }


    for (var i = 0; i < 2; i++) {
        var cardImg = document.createElement("img");
        var card = deck.pop();
        cardImg.src = "../Games_File/black-jack/" + card + ".png";
        yourSum += getValue(card);
        yourAceCount += checkAce(card);
        document.getElementById("your-cards").append(cardImg);
    }


    document.getElementById("hit").addEventListener("click", hit);
    document.getElementById("stay").addEventListener("click", stay);
}

function hit() {
    if (!canHit) {
        return;
    }

    var cardImg = document.createElement("img");
    var card = deck.pop();
    cardImg.src = "../Games_File/black-jack/" + card + ".png";
    yourSum += getValue(card);
    yourAceCount += checkAce(card);
    document.getElementById("your-cards").append(cardImg);

    if (reduceAce(yourSum, yourAceCount) > 21) { // A, J, 8 -> 1 + 10 + 8
        canHit = false;
    }
}

function stay() {
    dealerSum = reduceAce(dealerSum, dealerAceCount);
    yourSum = reduceAce(yourSum, yourAceCount);

    canHit = false;
    document.getElementById("hidden").src = "../Games_File/black-jack/" + hidden + ".png";

    var message = "";
    if (yourSum > 21) {
        message = "You Lose!";
        messageColor = "red";
    }
    else if (dealerSum > 21) {
        message = "You Win!";
        messageColor = "green";
    }
    // both you and dealer <= 21
    else if (yourSum == dealerSum) {
        message = "Tie!";
        messageColor = "purple";
    }
    else if (yourSum > dealerSum) {
        message = "You Win!";
        messageColor = "green";
    }
    else if (yourSum < dealerSum) {
        message = "You Lose!";
        messageColor = "red";
    }

    document.getElementById("dealer-sum").innerText = dealerSum;
    document.getElementById("your-sum").innerText = yourSum;
    document.getElementById("results").innerText = message;
    document.getElementById("results").style.color = messageColor;


    setTimeout(function () {
        restartGame(); // Call the function to reset the game
    }, 2000);
}
function restartGame() {
    resetGame();
    startGame();
}

function resetGame() {
    // Reset all variables and clear the card images
    dealerSum = 0;
    yourSum = 0;
    dealerAceCount = 0;
    yourAceCount = 0;
    canHit = true;
    deck = [];

    document.getElementById("dealer-cards").innerHTML = '<img id="hidden" src="../Games_File/black-jack/BACK.png">';
    document.getElementById("your-cards").innerHTML = '';

    document.getElementById("dealer-sum").innerText = '';
    document.getElementById("your-sum").innerText = '';
    document.getElementById("results").innerText = '';

    buildDeck();
    shuffleDeck();

}



function getValue(card) {
    var data = card.split("-"); // "4-C" -> ["4", "C"]
    var value = data[0];

    if (isNaN(value)) { // A J Q K
        if (value == "A") {
            return 11;
        }
        return 10;
    }
    return parseInt(value);
}

function checkAce(card) {
    if (card[0] == "A") {
        return 1;
    }
    return 0;
}

function reduceAce(playerSum, playerAceCount) {
    while (playerSum > 21 && playerAceCount > 0) {
        playerSum -= 10;
        playerAceCount -= 1;
    }
    return playerSum;
}

