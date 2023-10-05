<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/black-jack/_blackjack.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="blackjack game">
        <p id="results"></p>
        <h2>Dealer: <span id="dealer-sum"></span></h2>
        <div id="dealer-cards">
            <img id="hidden" src="../Games_File/black-jack/BACK.png">
        </div>
        <h2>You: <span id="your-sum"></span></h2>
        <div id="your-cards"></div>
        <br>
        <button id="hit">Hit</button>
        <button id="stay">Stay</button>
    </div>
    <div class="howToPlay contentHide">
        <h1>How to Play Blackjack</h1>
        <ul>
            <li>Click "Hit" to draw a card and increase your hand value.</li>
            <li>Try to get as close to 21 as possible without going over.</li>
            <li>If your hand value exceeds 21, you lose the game.</li>
            <li>Click "Stay" to keep your current hand and end your turn.</li>
            <li>After your turn, the dealer will draw cards.</li>
            <li>The dealer must draw cards until their hand value is at least 17.</li>
            <li>If the dealer's hand value exceeds 21, you win the game.</li>
            <li>If neither player exceeds 21, the player with the highest hand value wins.</li>
        </ul>
    </div>
    <button class="howToPlayButton">How to Play?</button>

</div>


<script src="../Games_File/black-jack/_blackJack.js"></script>
<?php include '../partials/_progress.php'?>
<script src="../partials/_model.js"></script>