<?php include "../partials/_head.php" ?>
<link rel="stylesheet" href="../partials/_modal.css">
<link rel="stylesheet" href="../Games_File/Drum_sound/game.css">


<div class="modal">
    <a href="../games.php" class="close">&times;</a>
    <div class="drum_sound">
        <div class=" heading">
            Drum 🥁 Kit
        </div>


        <div class="row">
            <button class="a drum col">a</button>
            <button class="s drum col">s</button>
            <button class="d drum col">d</button>
            <button class="h drum col">h</button>
            <button class="j drum col">j</button>
            <button class="k drum col">k</button>
            <button class="l drum col">l</button>
        </div>

    </div>

    <div class="page-footer">
        <h3>Click/Press on above Alphabet.
            <br>
            Turn on sound.
        </h3>
    </div>


</div>


<script src="../Games_File/Drum_sound/game.js"></script>
<?php include '../partials/_progress.php'?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var faviconElement = document.getElementById("FavIcon");
    if (faviconElement) {
        faviconElement.href = "../images/favicon.png";
    }
});
</script>