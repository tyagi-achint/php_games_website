

var winner = document.getElementById("winner");
function rand(player1, player2) {
    return Math.random() < 0.5 ? player1 : player2;
}
var playerRed = "R";
var playerYellow = "Y";
var currPlayer = rand(playerRed, playerYellow);

if (currPlayer == playerRed) {
    winner.innerText = "Turn: RED";
    winner.style.textDecorationColor = "red";

}
else {
    winner.innerText = "Turn: YELLOW";
    winner.style.textDecorationColor = "yellow";
}

var gameOver = false;
var board;

var rows = 6;
var columns = 7;
var currColumns = []; // keeps track of which row each column is at.



function setGame() {
    board = [];
    currColumns = [5, 5, 5, 5, 5, 5, 5];

    for (var r = 0; r < rows; r++) {
        var row = [];
        for (var c = 0; c < columns; c++) {
            // JS
            row.push(' ');
            // HTML
            var tile = document.createElement("div");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            tile.addEventListener("click", setPiece);
            document.getElementById("board_connect4").append(tile);
        }
        board.push(row);
    }
}

function setPiece() {
    if (gameOver) {
        return;
    }

    // get coords of that tile clicked
    var coords = this.id.split("-");
    var r = parseInt(coords[0]);
    var c = parseInt(coords[1]);

    // figure out which row the current column should be on
    r = currColumns[c];

    if (r < 0) { // board[r][c] != ' '
        return;
    }

    board[r][c] = currPlayer; // update JS board
    var tile = document.getElementById(r.toString() + "-" + c.toString());
    if (currPlayer == playerRed) {
        tile.classList.add("red-piece");
        winner.innerText = "Turn: YELLOW";
        winner.style.textDecorationColor = "yellow";
        currPlayer = playerYellow;
    }
    else {
        tile.classList.add("yellow-piece");
        winner.innerText = "Turn: RED";
        winner.style.textDecorationColor = "red";

        currPlayer = playerRed;
    }

    r -= 1; // update the row height for that column
    currColumns[c] = r; // update the array

    checkWinner();
}

function checkDraw() {
    for (var r = 0; r < rows; r++) {
        for (var c = 0; c < columns; c++) {
            if (board[r][c] === ' ') {
                return false; // There's an empty cell, the game is not a draw
            }
        }
    }
    return true; // All cells are filled, it's a draw
}

function checkWinner() {
    // horizontal
    for (var r = 0; r < rows; r++) {
        for (var c = 0; c < columns - 3; c++) {
            if (board[r][c] != ' ') {
                if (board[r][c] == board[r][c + 1] && board[r][c + 1] == board[r][c + 2] && board[r][c + 2] == board[r][c + 3]) {
                    setWinner(r, c);
                    return;
                }
            }
        }
    }

    // vertical
    for (var c = 0; c < columns; c++) {
        for (var r = 0; r < rows - 3; r++) {
            if (board[r][c] != ' ') {
                if (board[r][c] == board[r + 1][c] && board[r + 1][c] == board[r + 2][c] && board[r + 2][c] == board[r + 3][c]) {
                    setWinner(r, c);
                    return;
                }
            }
        }
    }

    // anti diagonal
    for (var r = 0; r < rows - 3; r++) {
        for (var c = 0; c < columns - 3; c++) {
            if (board[r][c] != ' ') {
                if (board[r][c] == board[r + 1][c + 1] && board[r + 1][c + 1] == board[r + 2][c + 2] && board[r + 2][c + 2] == board[r + 3][c + 3]) {
                    setWinner(r, c);
                    return;
                }
            }
        }
    }

    // diagonal
    for (var r = 3; r < rows; r++) {
        for (var c = 0; c < columns - 3; c++) {
            if (board[r][c] != ' ') {
                if (board[r][c] == board[r - 1][c + 1] && board[r - 1][c + 1] == board[r - 2][c + 2] && board[r - 2][c + 2] == board[r - 3][c + 3]) {
                    setWinner(r, c);
                    return;
                }
            }
        }
    }

    // Check for a draw
    if (checkDraw()) {
        setDraw();
    }
}



function setWinner(r, c) {

    if (board[r][c] == playerRed) {
        winner.innerText = "Red Wins";
        winner.style.textDecorationColor = "red";
    } else {
        winner.innerText = "Yellow Wins";
        winner.style.textDecorationColor = "yellow";

    }
    gameOver = true;
}

function setDraw() {
    var winner = document.getElementById("winner");
    winner.innerText = "It's a Draw";
    winner.style.textDecorationColor = "blue";
    gameOver = true;
}


function restartGame() {
    // Clear the board
    for (var r = 0; r < rows; r++) {
        for (var c = 0; c < columns; c++) {
            board[r][c] = ' ';
            var tile = document.getElementById(r.toString() + "-" + c.toString());
            tile.classList.remove("red-piece", "yellow-piece");
        }
    }

    // Reset game variables
    currPlayer = rand(playerRed, playerYellow);
    gameOver = false;
    if (currPlayer == playerRed) {
        winner.innerText = "Turn: RED";
        winner.style.textDecorationColor = "red";

    }
    else {
        winner.innerText = "Turn: YELLOW";
        winner.style.textDecorationColor = "yellow";
    }

    // Reset the column heights
    currColumns = [5, 5, 5, 5, 5, 5, 5];
}


setGame();
