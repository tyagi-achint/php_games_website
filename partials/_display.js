
let clickButton = document.querySelectorAll("#games button");
let containerGames = document.getElementById("games");
let navBar = document.querySelector("nav");
let closeButton = document.querySelectorAll(".close");
let footerDiv = document.querySelector("footer");


let originalContainerGamesDisplay = containerGames.style.display;
let originalNavBarDisplay = navBar.style.display;
let originalfooterDivDisplay = footerDiv.style.display;
for (let i = 0; i < clickButton.length; i++) {

    clickButton[i].addEventListener("click", checkStyle);
}
function checkStyle() {


    window.addEventListener("keydown", function (e) {
        if (e.code === "Space" || e.code == "ArrowDown" || e.code == "ArrowUp") {
            e.preventDefault();
        }
    });


    containerGames.style.visibility = "hidden";
    navBar.style.visibility = "hidden";
    footerDiv.style.visibility = "hidden";
}
for (let i = 0; i < closeButton.length; i++) {
    closeButton[i].addEventListener("click", closeButtonClick);
}

function closeButtonClick() {
    containerGames.style.display = originalContainerGamesDisplay;
    navBar.style.display = originalNavBarDisplay;
    footerDiv.style.display = originalfooterDivDisplay;
}
