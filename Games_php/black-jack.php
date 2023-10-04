<div id="blackJack" class="modal">
    <div class="modal-content">
        <span id='closeblackJac' class="close">&times;</span>
        <div class="blackjack">

            <h2>Dealer: <span id="dealer-sum"></span></h2>
            <div id="dealer-cards">
                <img id="hidden" src="Games/black-jack/BACK.png">
            </div>

            <h2>You: <span id="your-sum"></span></h2>
            <div id="your-cards"></div>

            <br>
            <button id="hit">Hit</button>
            <button id="stay">Stay</button>
            <p id="results"></p>
        </div>
    </div>
</div>











<script>
var blackJack = document.getElementById("blackJack");
var black_jack = document.getElementById("black-jack");
var spanblackJack = document.getElementById("closeblackJac");


black_jack.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/black-jack/blackjack.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/black-jack/blackJack.js";
    scriptElement.onload = function() {
        blackJack.style.display = "block";
    };
    document.body.appendChild(scriptElement);

}

spanblackJack.onclick = function() {
    resetblackJack();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (blackJack.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/black-jack/blackJack.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>