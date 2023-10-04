

if (document.getElementById("game_2048")) {

    var board;
    var score = 0;
    var rows = 4;
    var columns = 4;
    var pName = "Anonymous";


    pName = prompt("Enter your Name: ");
    if (pName != null) {
        var pName = pName.replace(/\s+/g, ' ').trim();
    }
    if (pName == null || pName.length == 0) {
        pName = "Anonymous";
    }

    function setGame() {

        board = [
            [0, 0, 0, 0],
            [0, 0, 0, 0],
            [0, 0, 0, 0],
            [0, 0, 0, 0]
        ]

        for (let r = 0; r < rows; r++) {
            for (let c = 0; c < columns; c++) {
                let tile = document.createElement("div");
                tile.id = r.toString() + "-" + c.toString();
                let num = board[r][c];
                updateTile(tile, num);
                document.getElementById("board_game").append(tile);
            }
        }

        setTwo();
        setTwo();

    }

    function updateTile(tile, num) {
        tile.innerText = "";
        tile.classList.value = ""; //clear the classList
        tile.classList.add("tile");
        if (num > 0) {
            tile.innerText = num.toString();
            if (num <= 4096) {
                tile.classList.add("x" + num.toString());
            } else {
                tile.classList.add("x8192");
            }
        }
    }

    document.addEventListener('keyup', (e) => {
        if (e.code == "ArrowLeft") {
            slideLeft();
            setTwo();
        }
        else if (e.code == "ArrowRight") {
            slideRight();
            setTwo();
        }
        else if (e.code == "ArrowUp") {
            slideUp();
            setTwo();
        }
        else if (e.code == "ArrowDown") {
            slideDown();
            setTwo();
        }
        document.getElementById("score_2048").innerText = score;
        if (isGameOver()) {
            if (score > 1500 && pName !== null) {
                saveScoreToDatabase(score, pName);
                restartGame();
            }
            else {
                restartGame();
            }
        }
    })


    function filterZero(row) {
        return row.filter(num => num != 0); //create new array of all nums != 0
    }

    function slide(row) {
        //[0, 2, 2, 2] 
        row = filterZero(row); //[2, 2, 2]
        for (let i = 0; i < row.length - 1; i++) {
            if (row[i] == row[i + 1]) {
                row[i] *= 2;
                row[i + 1] = 0;
                score += row[i];
            }
        }

        row = filterZero(row); //[4, 2]
        //add zeroes
        while (row.length < columns) {
            row.push(0);
        } //[4, 2, 0, 0]
        return row;
    }

    function slideLeft() {
        for (let r = 0; r < rows; r++) {
            let row = board[r];
            row = slide(row);
            board[r] = row;
            for (let c = 0; c < columns; c++) {
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                let num = board[r][c];
                updateTile(tile, num);
            }
        }
    }

    function slideRight() {
        for (let r = 0; r < rows; r++) {
            let row = board[r];
            row.reverse();
            row = slide(row);
            board[r] = row.reverse();
            for (let c = 0; c < columns; c++) {
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                let num = board[r][c];
                updateTile(tile, num);
            }
        }
    }

    function slideUp() {
        for (let c = 0; c < columns; c++) {
            let row = [board[0][c], board[1][c], board[2][c], board[3][c]];
            row = slide(row);
            for (let r = 0; r < rows; r++) {
                board[r][c] = row[r];
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                let num = board[r][c];
                updateTile(tile, num);
            }
        }
    }

    function slideDown() {
        for (let c = 0; c < columns; c++) {
            let row = [board[0][c], board[1][c], board[2][c], board[3][c]];
            row.reverse();
            row = slide(row);
            row.reverse();
            for (let r = 0; r < rows; r++) {
                board[r][c] = row[r];
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                let num = board[r][c];
                updateTile(tile, num);
            }
        }
    }

    function setTwo() {
        if (!hasEmptyTile()) {
            return;
        }
        let found = false;
        while (!found) {
            //find random row and column to place a 2 in
            let r = Math.floor(Math.random() * rows);
            let c = Math.floor(Math.random() * columns);
            if (board[r][c] == 0) {
                board[r][c] = 2;
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                tile.innerText = "2";
                tile.classList.add("x2");
                found = true;
            }
        }
    }

    function hasEmptyTile() {
        let count = 0;
        for (let r = 0; r < rows; r++) {
            for (let c = 0; c < columns; c++) {
                if (board[r][c] == 0) { //at least one zero in the board
                    return true;
                }
            }
        }
        return false;
    }

    function isGameOver() {
        // Check if there are no more empty tiles
        if (!hasEmptyTile()) {
            // Check if no more valid moves (no adjacent tiles with the same value)
            for (let r = 0; r < rows; r++) {
                for (let c = 0; c < columns; c++) {
                    let currentValue = board[r][c];
                    // Check adjacent tiles (up, down, left, right)
                    if (
                        (r > 0 && board[r - 1][c] === currentValue) ||
                        (r < rows - 1 && board[r + 1][c] === currentValue) ||
                        (c > 0 && board[r][c - 1] === currentValue) ||
                        (c < columns - 1 && board[r][c + 1] === currentValue)
                    ) {
                        return false; // There's at least one valid move
                    }
                }
            }
            return true; // No more valid moves
        }
        return false;
    }

    function hasValidMoves() {
        // Check if there are any valid moves (adjacent tiles with the same value)
        for (let r = 0; r < rows; r++) {
            for (let c = 0; c < columns; c++) {
                let currentValue = board[r][c];
                // Check adjacent tiles (up, down, left, right)
                if (
                    (r > 0 && board[r - 1][c] === currentValue) ||
                    (r < rows - 1 && board[r + 1][c] === currentValue) ||
                    (c > 0 && board[r][c - 1] === currentValue) ||
                    (c < columns - 1 && board[r][c + 1] === currentValue)
                ) {
                    return true; // There's at least one valid move
                }
            }
        }
        return false; // No valid moves
    }



    function saveScoreToDatabase(playerScore, playerName) {
        var data = {
            playerScore: playerScore, playerName: playerName
        };
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'SaveScore/2048.php', true);
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

    // ...


    function reset2048() {
        setTimeout(function () {
            location.reload();
        }, 1)


    }


    function restartGame() {

        // Clear the displayed tiles on the board
        for (let r = 0; r < rows; r++) {
            for (let c = 0; c < columns; c++) {
                let tile = document.getElementById(r.toString() + "-" + c.toString());
                tile.innerText = "";
                tile.classList.value = ""; // Clear the classList
                tile.classList.add("tile");
            }
        }

        // Reset game state (board and score)
        board = [
            [0, 0, 0, 0],
            [0, 0, 0, 0],
            [0, 0, 0, 0],
            [0, 0, 0, 0]
        ];
        score = 0;
        document.getElementById("score_2048").innerText = score;
        setTwo();
        setTwo();


    }


    var restart2048 = document.querySelector('.restart2048');
    restart2048.onclick = restartGame;


    setGame();

}