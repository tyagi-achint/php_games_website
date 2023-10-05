<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Rock-Paper-Scissors/style.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="Rock-Paper-Scissors game">
        <h1 id="opponent-score">Opponent: 0</h1>
        <div class="imgMatch">
            <div>
                <img id="your-choice" src="../Games_File/Rock-Paper-Scissors/question_mark.png">
                <p>Your Choice</p>
            </div>
            <div>
                <img id="opponent-choice" src="../Games_File/Rock-Paper-Scissors/question_mark.png">
                <p>Opponent Choice</p>
            </div>
        </div>

        <div id="choices">
        </div>
        <h1 id="your-score">Yours: 0</h1>
        <button class="restartGame" onclick="restartGame()">Restart</button>

    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Rock Paper Scissors</h1>
        <ul>
            <li>Click an image (Rock, Paper, or Scissors) to make your choice.</li>
            <li>You are playing against the computer, which will also make a random choice.</li>
            <li>The winner is determined based on the Rock-Paper-Scissors rules:</li>
            <ul>
                <li>Rock beats Scissors</li>
                <li>Scissors beats Paper</li>
                <li>Paper beats Rock</li>
            </ul>
            <li>If both you and the computer choose the same item, it's a tie.</li>
            <li>Your score is displayed at the bottom, and the computer's score is at the top.</li>
            <li>Click "Restart" to start a new game</li>

        </ul>


    </div>
    <button class="howToPlayButton">How to Play?</button>

</div>


<script src="../Games_File/Rock-Paper-Scissors/script.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>