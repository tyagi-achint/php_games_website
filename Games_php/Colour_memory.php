<div id="colour_memory" class="modal">
    <div class="modal-content">
        <span id='closecolourmemory' class="close">&times;</span>
        <div class="colour_memory">
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
                <div class="howToPlayColour contentHide">
                    <h2>How to play:</h2>
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
            </div>
            <button class="btnStart otherbtn">Start / Restart</button>
            <button id="howtoMenuColour" class="otherbtn">How to Play? </button>
        </div>
    </div>
</div>





<script>
var colour_memory = document.getElementById("colour_memory");
var colourMemory = document.getElementById("colourMemory");
var spancolour_memory = document.getElementById("closecolourmemory");




colourMemory.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Colour_memory/style.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Colour_memory/game.js";
    scriptElement.onload = function() {
        colour_memory.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

spancolour_memory.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (colour_memory.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Colour_memory/game.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>