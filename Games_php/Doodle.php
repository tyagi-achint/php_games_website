<div id="doodle_game_menu" class="modal">
    <div class="modal-content">
        <span id='closedoodle' class="close">&times;</span>
        <div class="container">
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
            <img id="sprite" src="Games/Doodle/2WEhF.png" />
            <div id="scoreBoard">
                <p id="score">0</p>
            </div>
        </div>
    </div>
</div>




<script>
var doodle_game_menu = document.getElementById("doodle_game_menu");
var doodle_game = document.getElementById("doodle_game");
var spandoodle = document.getElementById("closedoodle");

doodle_game.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Doodle/doodle.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Doodle/doodle.js";
    scriptElement.onload = function() {
        doodle_game_menu.style.display = "block";
    };
    document.body.appendChild(scriptElement);


}

spandoodle.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (doodle_game_menu.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Doodle/doodle.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>