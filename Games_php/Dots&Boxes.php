<div id="dotandboxes" class="modal">
    <div class="modal-content">
        <span id='closedotandboxes' class="close">&times;</span>
        <div class="buttons">

            <button class="restartdotandboxes">Start / Restart</button>
        </div>
        <div id="canvasDiv">

        </div>
    </div>
</div>




<script>
var dotandboxes = document.getElementById("dotandboxes");
var Dots_Boxes = document.getElementById("Dots&Boxes");
var spandotandboxes = document.getElementById("closedotandboxes");

Dots_Boxes.onclick = function() {
    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "Games/Dots&Boxes/game.css";
    linkElement.id = "custom-css";
    document.head.appendChild(linkElement);

    var scriptElement = document.createElement("script");
    scriptElement.src = "Games/Dots&Boxes/game.js";
    scriptElement.onload = function() {
        dotandboxes.style.display = "block";
    };
    document.body.appendChild(scriptElement);


}

spandotandboxes.onclick = function() {
    resetGame();
    var linkElement = document.getElementById("custom-css");
    if (linkElement) {
        linkElement.remove();
    }
    if (dotandboxes.style.display = "none") {
        var scriptElement = document.querySelector('script[src="Games/Dots&Boxes/game.js"]');
        if (scriptElement) {
            scriptElement.remove();
        }
    }
}
</script>