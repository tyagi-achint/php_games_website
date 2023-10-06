<!DOCTYPE html>
<html lang="en">

<?php include 'partials/_head.php'?>
<link rel='stylesheet' href='partials/_style.css' />

<body>
    <?php include 'partials/_navbar.php'?>

    <?php include 'partials/_progress.php'?>


    <div id="games" class="games-container">
        <div><a href="Games_php/black-jack.php">
                <button id="black-jack"><img src="images/black-jack.png" alt="black-jack" />
                    <h4>Black Jack</h4>
                </button>
            </a>
        </div>
        <div> <a href="Games_php/Dots&Boxes.php">
                <button id="Dots&Boxes"><img src="images/Dots&Boxes.jpg" alt="Dots&Boxes_Game" />
                    <h4>Dots & Boxes</h4>
                </button> </a>
        </div>
        <div><a href="Games_php/Doodle.php">
                <button id="doodle_game"><img src="images/Doodle.jpg" alt="Doodle_Game" />
                    <h4>Doodle Jump</h4>
                    <button></a>
        </div>
        <div><a href="Games_php/Snake.php">
                <button id="Snake"><img src="images/snake.jpg" alt="Snake_Game" height="90%" width="60%" />
                    <h4>Snake</h4>
                </button></a>
        </div>
        <div><a href="Games_php/Drum_sound.php">
                <button id="drumSound"><img src="images/drum_sound.jpg" alt="drum_sound.jpg" />
                    <h4>Drum Kit</h4>
                </button></a>
        </div>
        <div><a href="Games_php/Colour_memory.php">
                <button id="colourMemory"><img src="images/colour_game.jpg" alt="Colour_Game" />
                    <h4>Colour Memory</h4>
                </button></a>
        </div>
        <div><a href="Games_php/Tic-Tac-Toe.php">
                <button id="Tic-Tac-Toe">
                    <img src="images/Tic_tac_toe.png" alt="Tic_tac_toe" height="90%" width="60%" />
                    <h4>Tic Tac Toe</h4>
                </button></a>
        </div>
        <div>
            <button id="Connect4"><a href="Games_php/Connect4.php">
                    <img src="images/Connect4.png" alt="Connect4" height="90%" width="60%" />
                    <h4>Connect 4</h4>
            </button></a>
        </div>
        <div><a href="Games_php/Rock-Paper-Scissors.php">
                <button id="Rock-Paper-Scissors">
                    <img src="images/Rock-Paper-Scissors.png" alt="Rock-Paper-Scissors" height="90%" width="60%" />
                    <h4>Rock Paper Scissors</h4>
                </button></a>
        </div>
        <div><a href="Games_php/2048.php">
                <button id="game2048">
                    <img src="images/2048.png" alt="2048" height="90%" width="60%" />
                    <h4>2048</h4>

                </button> </a>
        </div>
    </div>
    <?php include 'partials/_footer.php'?>



    </script>



</body>

</html>