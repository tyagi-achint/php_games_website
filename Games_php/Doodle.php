<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Doodle/doodle.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="container game">
        <canvas id="canvas">
        </canvas>
        <div id="mainMenu">
            <h1>doodle jump</h1>
            <p class="info">
                use
                <span class="key left">←</span>
                <span class="key right">→</span>
                to move and space to (re) start...
            </p>
            <a class="button" href="javascript:init()">Play</a>
        </div>
        <div id="gameOverMenu">
            <h1>game over!</h1>
            <h3 id="go_score">you scored 0 points</h3>
            <a style="bottom: 40vh;" class="button" href="javascript:reset()">Restart</a>

        </div>
        <img id="sprite" src="../Games_File/Doodle/2WEhF.png" />
        <div id="scoreBoard">
            <p id="score">0</p>
        </div>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Doodle</h1>
        <ul>
            <li>Use the left and right arrow keys to move the player left and right.</li>
            <li>Avoid falling through the gaps between platforms.</li>
            <li>Jump on springs to reach higher platforms.</li>
            <li>Collect points by jumping on platforms.</li>
            <li>If you fall off the screen, the game is over.</li>
            <li>Try to achieve the highest score possible!</li>
        </ul>


    </div>
    <button class="howToPlayButton">How to Play?</button>

</div>


<script src="../Games_File/Doodle/doodle.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>