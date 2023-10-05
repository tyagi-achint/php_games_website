<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Tic-Tac-Toe/tictactoe.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="gamecontent game">
        <p id="Status">Play Now <span style="color: green;">X</span></p>
        <section class="game-pad">
            <input type="text" id="b1" readonly />
            <input type="text" id="b2" readonly />
            <input type="text" id="b3" readonly />
            <input type="text" id="b4" readonly />
            <input type="text" id="b5" readonly />
            <input type="text" id="b6" readonly />
            <input type="text" id="b7" readonly />
            <input type="text" id="b8" readonly />
            <input type="text" id="b9" readonly />
        </section>
        <button class="restart-btn" onclick="restart()">Restart</button>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Tic Tac Toe</h1>
        <li>Click on a button to place your 'X' or 'O'.</li>
        <li>Players take turns to place their respective symbols.</li>
        <li>The first player to align three of their symbols in a row, column, or diagonal wins.</li>
        <li>If all spaces are filled and no player has aligned three symbols, the game is a draw.</li>
        <li>Click "Restart" to start a new game</li>
    </div>
    <button class="howToPlayButton">How to Play?</button>
</div>

<script src="../Games_File/Tic-Tac-Toe/tic_tac_toe.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>