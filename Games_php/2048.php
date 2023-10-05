<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">

<link rel="stylesheet" href="../Games_File/2048/_game.css">

<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="game">
        <h1>Score : <span id="score_2048"> 0</span></h1>
        <div id="board_game">
        </div>
        <button class="restart2048" onclick="restartGame()"> Restart</button>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play 2048</h1>
        <ul>
            <li>Use Arrow keys to move tiles.</li>
            <li>Merge tiles with the same number by moving them into each other.</li>
            <li>Combine tiles to reach the 2048 tile!</li>
            <li>Press "Restart" to start a new game.</li>
        </ul>
    </div>


    <button class="howToPlayButton">How to Play?</button>


</div>
<?php include '../partials/_progress.php'?>

<script src="../Games_File/2048/_game.js"></script>
<script src="../partials/_model.js"></script>