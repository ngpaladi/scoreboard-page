<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$rtnstr="{\n    team1name: '" . $t1 . "',\n    team2name: '" . $t2 . "',\n    team1score: '" . $t1score . "',\n    team2score: '" . $t2score . "',\n    pos: '" . $pos . "',\n    isFinished: '" . $isfinished . "',\n    winner: '" . $winner . "'}";
echo($rtnstr);
?>