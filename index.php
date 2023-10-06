<!DOCTYPE html>
<html lang="en">

<?php include 'partials/_head.php'?>
<link rel='stylesheet' href='partials/_style.css' />

<body>
    <?php include 'partials/_navbar.php'?>

    <div id="scrooling_content">
        <h1>Bored!!!</h1>
        <h3>Playing Simple & Small Games can help Sometime...😉</h3>
    </div>


    <div class="games-container">
        <div><a href="Games_php/Doodle.php">
                <button id="doodle_game"><img src="images/Doodle.jpg" alt="Doodle_Game" />
                    <h4>Doodle Jump</h4>
                    <button></a>
        </div>
        <div><a href="Games_php/Colour_memory.php">
                <button id="colourMemory"><img src="images/colour_game.jpg" alt="Colour_Game" />
                    <h4>Colour Memory</h4>
                </button></a>
        </div>
    </div>


    <div id="more-games">
        <a href="games.php"><b>
                <h5>More Games <i class="fas fa-arrow-right"></i></h5>
            </b>
        </a>
    </div>
    <?php include 'partials/_progress.php'?>



    <?php include 'partials/_footer.php'?>



</body>

</html>