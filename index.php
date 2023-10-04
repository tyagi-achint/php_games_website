<!DOCTYPE html>
<html lang="en">

<?php include 'partials/_head.php'?>

<body>
    <?php include 'partials/_navbar.php'?>

    <div id="scrooling_content">
        <h1>Bored!!!</h1>
        <h3>Playing Simple & Small Games can help Sometime...😉</h3>
    </div>


    <div class="games-container">
        <div>
            <button id="doodle_game"><img src="images/Doodle.jpg" alt="Doodle_Game" />
                <h4>Doodle</h4>
                <button>
        </div>
        <div>
            <button id="colourMemory"><img src="images/colour_game.jpg" alt="Colour_Game" />
                <h4>Colour Memory</h4>
            </button>
        </div>
    </div>


    <div id="more-games">
        <a href="games.php"><b>
                <h5>More Games <i class="fas fa-arrow-right"></i></h5>
            </b>
        </a>
    </div>

    <div class="progress">
        <div class="topcontainer" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
            <p><span class="fa fa-signal"></span></p>
            <h1><span>Progress</span><br />is coming soon</h1>
            <p>It's almost ready ... honest</p>
        </div>
    </div>

    <?php include 'partials/_footer.php'?>
    <?php include 'Games_php/Doodle.php'?>
    <?php include 'Games_php/Colour_memory.php'?>

    <script src="partials/_displayHome.js"> </script>
</body>

</html>