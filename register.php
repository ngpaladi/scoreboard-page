<?php
    $string = file_get_contents("./gameData.json");
    $data = json_decode($string, true);

    if($data["isFinished"]=="-1"){
        
        $data["gameName"] = $_POST["gameName"];
        $data["team1name"] = $_POST["team1name"];
        $data["team2name"] = $_POST["team2name"];
        
        $data["pos"] = strval(rand(1,2));
        
        echo('Success! Please begin the game.');
    } else {
        echo('Error! Game in progress or recently concluded. Please say "Victor, reset" to start a new one.');
    }

?>