<!DOCTYPE html>
<html lang="en">

<?php include 'partials/_head.php'?>

<body>
    <?php include 'partials/_navbar.php'?>

    <div class="progress" style="margin:80px auto">
        <div class="topcontainer" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
            <p><span class="fa fa-signal"></span></p>
            <h1><span>Progress</span><br />is coming soon</h1>
            <p>It's almost ready ... honest</p>
        </div>
    </div>


    <div id="games" class="games-container">
        <div>
            <button id="black-jack"><img src="images/black-jack.png" alt="black-jack" />
                <h4>Black Jack</h4>
            </button>
        </div>
        <div>
            <button id="Dots&Boxes"><img src="images/Dots&Boxes.jpg" alt="Dots&Boxes_Game" />
                <h4>Dots & Boxes</h4>
            </button>
        </div>
        <div>
            <button id="doodle_game"><img src="images/Doodle.jpg" alt="Doodle_Game" />
                <h4>Doodle</h4>
                <button>
        </div>
        <div>
            <button id="Snake"><img src="images/snake.jpg" alt="Snake_Game" height="90%" width="60%" />
                <h4>Snake</h4>
            </button>
        </div>
        <div>
            <button id="drumSound"><img src="images/drum_sound.jpg" alt="drum_sound.jpg" />
                <h4>Drum Kit</h4>
            </button>
        </div>
        <div>
            <button id="colourMemory"><img src="images/colour_game.jpg" alt="Colour_Game" />
                <h4>Colour Memory</h4>
            </button>
        </div>
        <div>
            <button id="Tic-Tac-Toe">
                <img src="images/Tic_tac_toe.png" alt="Tic_tac_toe" height="90%" width="60%" />
                <h4>Tic Tac Toe</h4>
            </button>
        </div>
        <div>
            <button id="Connect4">
                <img src="images/Connect4.png" alt="Connect4" height="90%" width="60%" />
                <h4>Connect 4</h4>
            </button>
        </div>
        <div>
            <button id="Rock-Paper-Scissors">
                <img src="images/Rock-Paper-Scissors.png" alt="Rock-Paper-Scissors" height="90%" width="60%" />
                <h4>Connect 4</h4>
            </button>
        </div>
        <div>
            <button id="game2048">
                <img src="images/2048.png" alt="2048" height="90%" width="60%" />
                <h4>2048</h4>
            </button>
        </div>

    </div>

    <!-- Games -->

    <?php include 'Games_php/black-jack.php'?>
    <?php include 'Games_php/Dots&Boxes.php'?>
    <?php include 'Games_php/Doodle.php'?>
    <?php include 'Games_php/Snake.php'?>
    <?php include 'Games_php/Drum_sound.php'?>
    <?php include 'Games_php/Colour_memory.php'?>
    <?php include 'Games_php/Tic-Tac-Toe.php'?>
    <?php include 'Games_php/Connect4.php'?>
    <?php include 'Games_php/Rock-Paper-Scissors.php'?>
    <?php include 'Games_php/2048.php'?>







    <?php include 'partials/_footer.php'?>

    <script src="partials/_display.js">

    </script>



</body>

</html>