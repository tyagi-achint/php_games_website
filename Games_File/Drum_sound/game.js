var numberOfDrumButtons = document.querySelectorAll(".drum").length;

for (var i = 0; i < numberOfDrumButtons; i++) {
    document.querySelectorAll(".drum")[i].addEventListener("click", function () {
        var buttonInnerHTML = this.innerHTML;

        makeSound(buttonInnerHTML);

        buttonAnimation(buttonInnerHTML);
    });
}

document.addEventListener("keypress", function (event) {
    makeSound(event.key);

    buttonAnimation(event.key);
});

function makeSound(key) {
    switch (key) {
        case "a":
            var tom1 = new Audio("../Games_File/Drum_sound/tom-1.mp3");
            tom1.play();
            break;

        case "s":
            var tom2 = new Audio("../Games_File/Drum_sound/tom-2.mp3");
            tom2.play();
            break;

        case "d":
            var tom3 = new Audio("../Games_File/Drum_sound/tom-3.mp3");
            tom3.play();
            break;

        case "h":
            var tom4 = new Audio("../Games_File/Drum_sound/tom-4.mp3");
            tom4.play();
            break;

        case "j":
            var snare = new Audio("../Games_File/Drum_sound/snare.mp3");
            snare.play();
            break;

        case "k":
            var crash = new Audio("../Games_File/Drum_sound/crash.mp3");
            crash.play();
            break;

        case "l":
            var kick = new Audio("../Games_File/Drum_sound/kick-bass.mp3");
            kick.play();
            break;

        default:
            console.log(key);
    }
}

function buttonAnimation(currentKey) {
    var activeButton = document.querySelector("." + currentKey);

    activeButton.classList.add("pressed");

    setTimeout(function () {
        activeButton.classList.remove("pressed");
    }, 100);
}

