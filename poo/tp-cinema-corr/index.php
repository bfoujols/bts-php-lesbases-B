<?php

include ("Production.php");
include ("Film.php");
include ("Realisateur.php");
include ("Acteur.php");
include ("Investisseur.php");

echo "TP Cinema \n";

$real1 = new Realisateur("Jimenez", "Cédric");
$real2 = new Realisateur("Gozian", "Yann");
$real3 = new Realisateur("Reeves", "Matt");

$GilleLellouche = new Acteur("Lellouche", "Gilles");
$FrancoisCivil = new Acteur("Civil", "François");
$LeklouKarim = new Acteur("Leklou", "Karim", true);
$NineyPierre = new Acteur("Niney", "Pierre", true);
$DeLaageLou = new Acteur("De-Laage", "Lou");
$DussolierAndre = new Acteur("Dussolier", "Andre", true);
$PattinsonRobert = new Acteur("Pattinson", "Robert", true);
$KravitzZoe = new Acteur("Kravitz", "Zoe");
$DanoPaul = new Acteur("Dano", "Paul");

$canalPlus = new Investisseur("Canal+", 200);
$tf1 = new Investisseur("TF1", 15);
$arte = new Investisseur("Arte", 6);

$film[1] = new Film(1, "Bac Nord", 563921, $real1);
$film[1]->setNbEntree(789345);
$film[1]->ajouterActeurs($GilleLellouche);
$film[1]->ajouterActeurs($FrancoisCivil);
$film[1]->ajouterActeurs($LeklouKarim);
$film[1]->ajouterInvestisseur($canalPlus);
$film[1]->ajouterInvestisseur($arte);

$film[2] = new Film(2, "Boite noire", 432789, $real2);
$film[2]->ajouterActeurs($NineyPierre);
$film[2]->ajouterActeurs($DeLaageLou);
$film[2]->ajouterActeurs($DussolierAndre);
$film[2]->ajouterInvestisseur($arte);
$film[2]->ajouterInvestisseur($tf1);

$film[3] = new Film(3, "The batman", 879214, $real3);
$film[3]->ajouterActeurs($PattinsonRobert);
$film[3]->ajouterActeurs($KravitzZoe);
$film[3]->ajouterActeurs($DanoPaul);
$film[3]->ajouterInvestisseur($canalPlus);

$film[4] = new film(4, "test", 4554);

foreach ($film as $leFilm) {
    echo "Info sur le film ==> " . $leFilm->getIdFilm()
        . " - " . $leFilm->getNomFilm()
        . " - " . $leFilm->getNbEntrees();
    if ($leFilm->getSonRealisateur() !== null) {
        echo " - " . $leFilm->getSonRealisateur()->getNomRealisateur()
            . " - " . $leFilm->getSonRealisateur()->getPrenomRealisateur();
    }
    echo "\n";
    echo "Liste des acteurs :\n";
    $leFilm->showListeActeurs();
//    foreach ($leFilm->getLesActeurs() as $unActeur) {
//        echo $unActeur->getNomActeur() . " - " . $unActeur->getPrenomActeur() . " - " . $unActeur->getEstCesar() . "\n";
//    }
    echo "Liste des investisseurs :\n";
    foreach ($leFilm->getInvestisseur() as $leInvestisseur) {
        echo $leInvestisseur->getNom() . "\n";
    }
}

