<div id="rockpaperscissors" class="modal">
    <div class="modal-content">
        <span id='closerockpaperscissors' class="close">&times;</span>



        <div class="Rock-Paper-Scissors">
            <h1 id="opponent-score">0</h1>
            <div class="imgMatch">
                <img id="opponent-choice" src="Games/Rock-Paper-Scissors/question_mark.png">
                <br>
                <img id="your-choice" src="Games/Rock-Paper-Scissors/question_mark.png">
            </div>

            <div id="choices">
            </div>
            <h1 id="your-score">0</h1>
            <button class="restartrockpaperscissors">Restart</button>

        </div>
    </div>
</div>










<script>
var rockpaperscissors = document.getElementById("rockpaperscissors");
var RockPaperScissors = document.getElementById("Rock-Paper-Scissors");
var spanrockpaperscissors = document.getElementById("closerockpaperscissors");


RockPaperScissors.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Rock-Paper-Scissors/style.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Rock-Paper-Scissors/script.js";
    scriptElement.onload = function() {
        rockpaperscissors.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

spanrockpaperscissors.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (rockpaperscissors.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Rock-Paper-Scissors/script.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>