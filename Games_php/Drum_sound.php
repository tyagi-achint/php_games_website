<div id="drum_sound" class="modal">
    <div class="modal-content">
        <span id='closedrum_sound' class="close">&times;</span>
        <div class="drum_sound">
            <div class=" heading">
                Drum 🥁 Kit
            </div>


            <div class="row">
                <button class="a drum col">a</button>
                <button class="s drum col">s</button>
                <button class="d drum col">d</button>
                <button class="f drum col">f</button>
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
</div>




<script>
var drum_sound = document.getElementById("drum_sound");
var drumSound = document.getElementById("drumSound");
var spandrum_sound = document.getElementById("closedrum_sound");






drumSound.onclick = function() {

    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Drum_sound/game.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Drum_sound/game.js";
    scriptElement.onload = function() {
        drum_sound.style.display = "block";
    };
    document.body.appendChild(scriptElement);
}

spandrum_sound.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (drum_sound.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Drum_sound/game.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>