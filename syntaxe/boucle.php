<?php

    // WHILE 10->20
    $result = 10;
    while ($result <= 20) {
        echo $result . " \n";
        $result++;
    }

    // DO WHILE 20->30
    // attention $result démarre à 20 suite à l'incrémentation du while
    do {
        echo $result . " \n";
        $result++;
    } while ($result <= 30);

    // FOR 0->30
    // 3 param (init;condition;increment)
    for ($result = 0; $result <= 30; $result++) {
        echo $result . " \n";
    }

    echo "Bouche Foreach \n";
    // FOREACH
    // Un tableau array() ou []
    // $tabChiffre = [0 => 12, 1 => 30, 2 => 23, 20 => "Benoit"];
    $tabChiffre = [12,30,23,"Benoit"];
    foreach ($tabChiffre as $keyChiffre => $valueChiffre) {
        echo "Position = ". $keyChiffre . " Valeur = " . $valueChiffre . " \n";
    }

    $config = ["color" => "blue", "connection" => "ssh"];

    echo $config["color"]; // blue


?>