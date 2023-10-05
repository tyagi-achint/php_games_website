var howToPlayButton = document.querySelector(".howToPlayButton");
howToPlayButton.addEventListener("click", function () {
    document.querySelector(".modal .game").classList.toggle("contentHide");
    document.querySelector(".howToPlay").classList.toggle("contentHide");
    howToPlayButton.innerText = (howToPlayButton.innerText === "How to Play?") ? "Back to Game" : "How to Play?";
});
document.addEventListener("DOMContentLoaded", function () {
    var faviconElement = document.getElementById("FavIcon");
    if (faviconElement) {
        faviconElement.href = "../images/favicon.png";
    }
});