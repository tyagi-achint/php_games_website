<div id="tictactoe" class="modal">
    <div class="modal-content">
        <span id='closetictactoe' class="close">&times;</span>
        <div class="gamecontent">
            <p id="Status">Play Now <span style="color: green;">X</span></p>
            <section class="game-pad">
                <input type="text" id="b1" readonly />
                <input type="text" id="b2" readonly />
                <input type="text" id="b3" readonly />
                <input type="text" id="b4" readonly />
                <input type="text" id="b5" readonly />
                <input type="text" id="b6" readonly />
                <input type="text" id="b7" readonly />
                <input type="text" id="b8" readonly />
                <input type="text" id="b9" readonly />
            </section>
            <button class="restart-btn">Restart</button>
        </div>
    </div>
</div>

<script>
var tictactoe = document.getElementById("tictactoe");
var TicTacToe = document.getElementById("Tic-Tac-Toe");
var spantictactoe = document.getElementById("closetictactoe");



TicTacToe.onclick = function() {

    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Tic-Tac-Toe/tictactoe.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Tic-Tac-Toe/tic_tac_toe.js";
    scriptElement.onload = function() {
        tictactoe.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

spantictactoe.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (tictactoe.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Tic-Tac-Toe/tic_tac_toe.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>