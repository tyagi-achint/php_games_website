<?php
include(__DIR__ . '/../partials/_server.php');
$jsonData = file_get_contents("php://input");
$data = json_decode($jsonData);

$SaveScore = $data->playerScore;
$SaveName = $data->playerName;
date_default_timezone_set('Asia/Kolkata');
$currentTime=date('jS F Y h:i A');
if ($SaveName !== null && $SaveScore !== null) {
    $game_sql  ="INSERT INTO `doodle` ( `name`, `score`, `time`) VALUES ('$SaveName', '$SaveScore', '$currentTime');";
    $game_Result = mysqli_query($con,$game_sql);
    
} else {
    echo "Player score and/or player name not provided in the POST data.";
}
 ?>