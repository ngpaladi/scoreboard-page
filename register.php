<?php
    $string = file_get_contents("./gameData.json");
    $data = json_decode($string, true);

    if($data["isFinished"]=="-1"){
        
        $data["gameName"] = $_GET["gameName"];
        $data["team1name"] = GET["team1name"];
        $data["team2name"] = $_GET["team2name"];
        
        $data["pos"] = strval(rand(1,2));
        $data["isFinished"]="0";
        
        file_put_contents("gameData.json", json_encode($data, JSON_PRETTY_PRINT));
    } else {
        
    }

?>