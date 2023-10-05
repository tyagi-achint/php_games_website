<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">

<link rel="stylesheet" href="../Games_File/2048/_game.css">

<div id="game_2048" class="modal">
    <a href="../games.php" id='close2048' class="close">&times;</a>
    <div class="game">
        <h1>Score : <span id="score_2048"> 0</span></h1>
        <div id="board_game">
        </div>
        <button class="restart2048"> Restart</button>
    </div>
</div>
<?php include '../partials/_progress.php'?>

<script src="../Games_File/2048/_game.js"></script>
<script>
var linkElement = document.getElementById("myCustomStyle");
if (linkElement) {
    linkElement.remove();
}
var faviconElement = document.getElementById("FavIcon");
if (faviconElement) {

    faviconElement.href = "images/favicon.png";
}
</script>