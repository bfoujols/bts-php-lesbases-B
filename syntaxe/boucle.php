<?php

    // WHILE 10->20
    $result = 10;
    while ($result <= 20) {
        //echo $result . " \n";
        $result++;
    }

    // DO WHILE 20->30
    // attention $result démarre à 20 suite à l'incrémentation du while
    do {
        //echo $result . " \n";
        $result++;
    } while ($result <= 30);

    // FOR 0->30
    // 3 param (init;condition;increment)
    for ($result = 0; $result <= 30; $result++) {
        //echo $result . " \n";
    }

    //echo "Boucle Foreach \n";
    // FOREACH
    // Un tableau array() ou []
    // $tabChiffre = [0 => 12, 1 => 30, 2 => 23, 20 => "Benoit"];
    $tabChiffre = [12,30,23,"Benoit"];
    foreach ($tabChiffre as $keyChiffre => $valueChiffre) {
        //echo "Position = ". $keyChiffre . " Valeur = " . $valueChiffre . " \n";
    }

    $config = ["color" => "blue", "connection" => "ssh"];

    //echo $config["color"]; // blue

    $resultRequete = [
        "id" => 4554,
        "nom" => "benoit",
        "prenom" => "foujols",
        "identité" => [
            "CV" => "A459829098765433-AER",
            "CI" => "45BD678909667654346776",
            "PC" => "0003459987657EG898456"
        ],
        "age" => 46,
        "nationalité" => "fr"
    ];

    //var_dump($resultRequete);
    //echo $resultRequete["identité"]["CI"]; // 45BD678909667654346776


    $resultRequete = [
        4554 => [
            "nom" => "benoit",
            "prenom" => "foujols",
            "identité" => [
                "CV" => "A459829098765433-AER",
                "CI" => "45BD678909667654346776",
                "PC" => "0003459987657EG898456"
            ],
            "age" => 46,
            "nationalité" => "fr"],
        4534 => [
            "nom" => "Joe",
            "prenom" => "Beni",
            "identité" => [
                "CV" => "A4598dzedzed65433-AER",
                "CI" => "5453FERZ24434",
                "PC" => "343R4R34R"
            ],
            "age" => 30,
            "nationalité" => "fr"],
    ];

    //echo $resultRequete[4534]["prenom"]; // Joe

    $typeCarte = [
        "PC" => "Permis de conduire",
        "CI" => "Carte d'identité",
        "CV" => "Carte de vitale"
    ];
    // afficher le nom et les cartes
    //var_dump($resultRequete);
    foreach ($resultRequete as $resultValue) {
        //var_dump($resultValue);
        echo "Mon nom '". $resultValue["nom"] . "' et mes cartes :\n";
        foreach ($resultValue["identité"] as $identiteKey => $identiteValue) {
            echo "la carte de type " . $typeCarte[$identiteKey] . " est " . $identiteValue."\n";
        }
        echo "\n";
    }

?>