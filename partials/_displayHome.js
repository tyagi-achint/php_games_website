
let clickButtonHome = document.querySelectorAll(".games-container button");
let containerGamesHome = document.querySelector(".games-container");
let navBarHome = document.querySelector("nav");
let closeButtonHome = document.querySelectorAll(".close");
let footerDivHome = document.querySelector("footer");
let moreGamesDiv = document.getElementById("more-games");
let scroolingDiv = document.getElementById("scrooling_content");



let originalcontainerGamesHomeDisplay = containerGamesHome.style.display;
let originalnavBarHomeDisplay = navBarHome.style.display;
let originalfooterDivHomeDisplay = footerDivHome.style.display;
let originalmoreGamesDiv = moreGamesDiv.style.display;
let originalscroolingDiv = scroolingDiv.style.display;



for (let i = 0; i < clickButtonHome.length; i++) {

    clickButtonHome[i].addEventListener("click", checkStyle);
}
function checkStyle() {

    window.addEventListener("keydown", function (e) {
        if (e.code === "Space" || e.code == "ArrowDown" || e.code == "ArrowUp") {
            e.preventDefault();
        }
    });


    containerGamesHome.style.visibility = "hidden";
    navBarHome.style.visibility = "hidden";
    footerDivHome.style.visibility = "hidden";
    scroolingDiv.style.visibility = "hidden";
    moreGamesDiv.style.visibility = "hidden";
}
for (let i = 0; i < closeButtonHome.length; i++) {
    closeButtonHome[i].addEventListener("click", closeButtonHomeClick);
}

function closeButtonHomeClick() {
    containerGamesHome.style.display = originalcontainerGamesHomeDisplay;
    navBarHome.style.display = originalnavBarHomeDisplay;
    footerDivHome.style.display = originalfooterDivHomeDisplay;
    scroolingDiv.style.display = originalscroolingDiv;
    moreGamesDiv.style.display = originalmoreGamesDiv;

}
