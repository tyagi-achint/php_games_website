<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Connect4/connect_4.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class=" game">
        <h2 id="winner"></h2>
        <div id="board_connect4"></div>
        <button class="restartConnect4" onclick="restartGame()">Restart</button>

    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Connect 4</h1>
        <ul>
            <li>Click on a column to drop your piece into the grid.</li>
            <li>Try to connect four of your pieces vertically, horizontally, or diagonally to win.</li>
            <li>The game alternates between RED and YELLOW players.</li>
            <li>The player who forms a winning sequence of four pieces first wins the game.</li>
            <li>If the grid is filled without a winner, the game is declared a draw.</li>
            <li>Click the "Restart" button to start a new game.</li>
        </ul>

    </div>
    <button class="howToPlayButton">How to Play?</button>

</div>


<script src="../Games_File/Connect4/connect_4.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>