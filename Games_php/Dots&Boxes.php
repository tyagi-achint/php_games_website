<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Dots&Boxes/game.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class=" game">
        <div class="buttons">
            <button class="restartdotandboxes">Start / Restart</button>
        </div>
        <div id="canvasDiv">
        </div>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Doodle</h1>
        <ul>
            <li>Click on Start button to start the game.</li>

            <li>Click on a line to select it and fill it with your color.</li>
            <li>Try to complete squares by connecting lines.</li>
            <li>If you complete a square, you get another turn.</li>
            <li>The player who completes the most squares wins!</li>
            <li>Click "Restart" to start a new game</li>

        </ul>


    </div>
    <button class="howToPlayButton">How to Play?</button>

</div>


<script src="../Games_File/Dots&Boxes/game.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>