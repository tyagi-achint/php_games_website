<div id="game_2048" class="modal">
    <div class="modal-content">
        <span id='close2048' class="close">&times;</span>
        <div class="game">
            <h1>Score : <span id="score_2048"> 0</span></h1>
            <div id="board_game">
            </div>
            <button class="restart2048">Restart</button>
        </div>
    </div>
</div>




<script>
var game_2048 = document.getElementById("game_2048");
var game2048 = document.getElementById("game2048");
var span2048 = document.getElementById("close2048");

game2048.onclick = function() {

    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/2048/game.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);
    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/2048/game.js";
    scriptElement.onload = function() {
        game_2048.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

span2048.onclick = function() {
    reset2048();

    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (game_2048.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/2048/game.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>