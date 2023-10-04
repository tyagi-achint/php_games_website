<div id="connect_4" class="modal">
    <div class="modal-content">
        <span id='closeconnect_4' class="close">&times;</span>
        <h2 id="winner"></h2>
        <div id="board_connect4"></div>
    </div>
</div>





<script>
var connect_4 = document.getElementById("connect_4");
var connect4 = document.getElementById("Connect4");
var spanconnect_4 = document.getElementById("closeconnect_4");

connect4.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Connect4/connect_4.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Connect4/connect_4.js";
    scriptElement.onload = function() {
        connect_4.style.display = "block";
    };
    document.body.appendChild(scriptElement);
}

spanconnect_4.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }

    if (connect_4.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Connect4/connect_4.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>