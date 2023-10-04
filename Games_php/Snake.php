<div id="snake_game" class="modal">
    <div class="modal-content">
        <span id='closesnake_game' class="close">&times;</span>
        <div class="snake_game">
            <div class="game">
                <div class="container">
                    <h2>Press arrow key or space to start!</h2>
                    <div class="grid"></div>
                    <header>
                        <div class="contrast">100%</div>
                        <div class="score">0</div>
                    </header>
                </div>
                <div class="howToPlay contentHide">
                    <h1>How to Play</h1>
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
                <button id="howtoMenu" class="otherbtn">How to Play?</button>
            </div>
        </div>
    </div>
</div>




<script>
var snake_game = document.getElementById("snake_game");
var Snake = document.getElementById("Snake");
var spansnake_game = document.getElementById("closesnake_game");

Snake.onclick = function() {

    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Snake/style.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);
    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Snake/script.js";
    scriptElement.onload = function() {
        snake_game.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

spansnake_game.onclick = function() {
    resetSnakeGame();

    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (snake_game.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Snake/script.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>