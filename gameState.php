<?php
    class MyDB extends SQLite3
    {
        function __construct()
        {
         $this->open('GameData.db');
        }
    }
    $db = new MyDB();

    $t1 = $db->query('');


    $rtnstr="{\n    gameName: '" . $game . "',\n    team1name: '" . $t1 . "',\n    team2name: '" . $t2 . "',\n    team1score: '" . $t1score . "',\n    team2score: '" . $t2score . "',\n    pos: '" . $pos . "',\n    isFinished: '" . $isfinished . "',\n    winner: '" . $winner . "'}";
    echo($rtnstr);
?>