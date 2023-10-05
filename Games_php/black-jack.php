<?php include "../partials/_head.php" ?>

<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/black-jack/_blackjack.css">
<div id="blackJack" class="modal">
    <a href="../games.php" id='closeblackJac' class="close">&times;</a>
    <div class="blackjack">
        <h2>Dealer: <span id="dealer-sum"></span></h2>
        <div id="dealer-cards">
            <img id="hidden" src="../Games_File/black-jack/BACK.png">
        </div>
        <h2>You: <span id="your-sum"></span></h2>
        <div id="your-cards"></div>

        <br>
        <button id="hit">Hit</button>
        <button id="stay">Stay</button>
        <p id="results"></p>
    </div>

</div>


<script src="../Games_File/black-jack/_blackJack.js"></script>
<?php include 'partials/_progress.php'?>