<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Snake/style.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="game">
        <div class="container">
            <h2>Press arrow key or space to start!</h2>
            <div class="grid"></div>
            <header>
                <div class="contrast">100%</div>
                <div class="score">0</div>
            </header>
        </div>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Snake</h1>
        <ul>
            <li>Use Arrow/Space Keys to start.</li>
            <li>Use Up arrow for turning snake up.</li>
            <li>Use Down arrow for turning snake down. </li>
            <li>Use Right arrow for turning snake right. </li>
            <li>Use Left arrow for turning snake left. </li>
            <li>Ready for hard mode? Press the letter H.</li>
            <li>Back to easy mode? Press the letter E.</li>
            <li>Reset the Game? Use Spacebar</li>
        </ul>
    </div>
    <button class="howToPlayButton">How to Play?</button>
</div>


<script src="../Games_File/Snake/script.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>