<!DOCTYPE html>
<html lang="en">
<?php include 'partials/_server.php'?>

<?php include 'partials/_head.php'?>

<body>
    <?php include 'partials/_navbar.php'?>



    <h1 id="score_h1">Leaderboard...</h1>
    <div id="score-page">

        <div>
            <h2 class="game_heading">Snake</h2>
            <table id="Snake">
                <tr>
                    <th id="s_no">S No.</th>
                    <th>Player's Name</th>
                    <th>Date</th>
                    <th>Score</th>
                </tr>

                <?php
$snakeSql = "SELECT * FROM `snake` ORDER BY `score` DESC LIMIT 5;";
$snakeResult = mysqli_query($con, $snakeSql);
$num_rows = mysqli_num_rows($snakeResult);

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $num_rows) {
        $row = mysqli_fetch_assoc($snakeResult);
        $Name = $row['name'];
        $Score = $row['score'];
        $Time = $row['time'];
        
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>$Name</td>
        <td class='gdate'>$Time (IST)</td>
        <td class='pscore'>$Score</td>
        </tr>";
    } else {
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>---</td>
        <td class='gdate'>---</td>
        <td class='pscore'>--</td>
        </tr>";
    }
}
?>

            </table>
        </div>
        <div>
            <h2 class="game_heading">Doodle</h2>
            <table id="doodle">
                <tr>
                    <th id="s_no">S No.</th>
                    <th>Player's Name</th>
                    <th>Date</th>
                    <th>Score</th>
                </tr>
                <?php
$snakeSql = "SELECT * FROM `doodle` ORDER BY `score` DESC LIMIT 5;";
$snakeResult = mysqli_query($con, $snakeSql);
$num_rows = mysqli_num_rows($snakeResult);

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $num_rows) {
        $row = mysqli_fetch_assoc($snakeResult);
        $Name = $row['name'];
        $Score = $row['score'];
        $Time = $row['time'];
        
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>$Name</td>
        <td class='gdate'>$Time (IST)</td>
        <td class='pscore'>$Score</td>
        </tr>";
    } else {
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>---</td>
        <td class='gdate'>---</td>
        <td class='pscore'>--</td>
        </tr>";
    }
}
?>
            </table>
        </div>

        <div>
            <h2 class="game_heading">Colour Memory</h2>
            <table id="ColourMemory">
                <tr>
                    <th id="s_no">S No.</th>
                    <th>Player's Name</th>
                    <th>Date</th>
                    <th>Score</th>
                </tr>
                <?php
$snakeSql = "SELECT * FROM `colour-memory` ORDER BY `score` DESC LIMIT 5;";
$snakeResult = mysqli_query($con, $snakeSql);
$num_rows = mysqli_num_rows($snakeResult);

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $num_rows) {
        $row = mysqli_fetch_assoc($snakeResult);
        $Name = $row['name'];
        $Score = $row['score'];
        $Time = $row['time'];
        
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>$Name</td>
        <td class='gdate'>$Time (IST)</td>
        <td class='pscore'>$Score</td>
        </tr>";
    } else {
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>---</td>
        <td class='gdate'>---</td>
        <td class='pscore'>--</td>
        </tr>";
    }
}
?>
            </table>
        </div>

        <div>
            <h2 class="game_heading">2048</h2>
            <table id="2048">
                <tr>
                    <th id="s_no">S No.</th>
                    <th>Player's Name</th>
                    <th>Date</th>
                    <th>Score</th>
                </tr>
                <?php
$snakeSql = "SELECT * FROM `game_2048` ORDER BY `score` DESC LIMIT 5;";
$snakeResult = mysqli_query($con, $snakeSql);
$num_rows = mysqli_num_rows($snakeResult);

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $num_rows) {
        $row = mysqli_fetch_assoc($snakeResult);
        $Name = $row['name'];
        $Score = $row['score'];
        $Time = $row['time'];
        
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>$Name</td>
        <td class='gdate'>$Time (IST)</td>
        <td class='pscore'>$Score</td>
        </tr>";
    } else {
        echo "<tr>
        <td class='S-no'>$i</td>
        <td class='pname'>---</td>
        <td class='gdate'>---</td>
        <td class='pscore'>--</td>
        </tr>";
    }
}
?>
            </table>
        </div>





    </div>




    <?php include 'partials/_footer.php'?>

</body>

</html>