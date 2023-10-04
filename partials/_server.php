<?php

$server="localhost";
$username="root";
$password="Joker.321@";
$database ="fun_time_fillers";


$con=mysqli_connect($server,$username,$password,$database);

if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}

?>