<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Colour_memory/style.css">
<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="colour_memory game">
        <h1 id="level-title">Click to Start</h1>
        <div class="container">
            <div class="playButtons">
                <div class="row">
                    <div type="button" id="green" class="btn green">
                    </div>
                    <div type="button" id="red" class="btn red">

                    </div>
                </div>

                <div class="row">

                    <div type="button" id="yellow" class="btn yellow">

                    </div>
                    <div type="button" id="blue" class="btn blue">

                    </div>

                </div>
            </div>

        </div>
        <button class="btnStart otherbtn">Start / Restart</button>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Colour Memory</h1>
        <ul>
            <li>Press the "START / RESTART" button to begin the game.</li>
            <li>Simon will give the first signal. Repeat the signal by pressing the same color box.</li>
            <li>Simon will then add one more signal. Repeat both signals by pressing the same colored boxes
                in
                order.
            </li>
            <li>Simon will continue to add one more signal after each successful repetition.</li>
            <li>Continue playing as long as you can repeat each sequence of signals correctly.</li>
            <li>If you fail to repeat a sequence exactly, Simon responds with a "Red" Light. You've lost,
                and
                the
                sequence of signals ends.</li>
        </ul>
    </div>
    <button class="howToPlayButton">How to Play?</button>
</div>


<script src="../Games_File/Colour_memory/game.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>