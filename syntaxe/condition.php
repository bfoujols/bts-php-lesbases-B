<?php
    $name = "benoit";

    /**
     * - "==" (égalité)
     * - "===" (égalité strict)
     * - "!=" (inégalité)
     * - ">" (plus grand)
     * - ">=" (plus grand ou égal)
     * - "<" (plus petit)
     * - "<=" (plus petit ou égal)
     * - "&&" (ET logique)
     * - "||" (OU logique)
     * - "!" (NON logique)
     */

    if ($name == "benoit") {
        echo "Je m'appelle " . $name . " \n";
    } elseif ($name === 1)
        echo "Le chiffre est " . $name . " \n";
    else {
        echo "pas de prénom \n";
    }

    switch ($name) {
        case 1:
            echo "Le chiffre est " . $name . " \n";
            break;
        case "benoit":
            echo "Je m'appelle " . $name . " \n";
            break;
        default:
            echo "pas de prénom \n";
    }

?>