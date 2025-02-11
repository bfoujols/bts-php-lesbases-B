<?php
include ("film.php");
include ("Realisateur.php");
include ("Auteur.php");

// Etape 2
$film = new film(1, "Bac Nord", 563921);
// Etape 3
$film->setNbEntrees(789345);
// Etape 4
$f2 = new film(2, "Boite Noire", 432789);
$f3 = new film(3, "The batman", 879214);

$filmCollect = [
  $film,
  $f2,
  $f3
];

foreach ($filmCollect as $filmItem) {
    echo "Info sur le film " . $filmItem->getIdFilm() . " - " . $filmItem->getNomfilm() . " - " . $filmItem->getNbEntrees() . "\n";
}

// Etape 6
$real1 = new Realisateur("Jimenez","Cédric");
$real2 = new Realisateur("Gozian","Yann");
$real3 = new Realisateur("Reeves","Matt");

$film->setRealisateur($real1);
$f2->setRealisateur($real2);
$f3->setRealisateur($real3);

foreach ($filmCollect as $filmItem) {
    echo "Info sur le film " . $filmItem->getIdFilm() . " - " . $filmItem->getNomfilm() . " - " . $filmItem->getNbEntrees() . " - " . $filmItem->getRealisateur()->getNomRealisateur() . " - " . $filmItem->getRealisateur()->getPrenomRealisateur() . "\n";
}

// Etape 7
$film->setListAuteurs(new Auteur("Lellouche", "Gilles", false));
$film->setListAuteurs(new Auteur("Civil", "François", false));
$film->setListAuteurs(new Auteur("Leklou", "Karim", true));

foreach ($filmCollect as $filmItem) {
    echo "Info sur le film " . $filmItem->getIdFilm() . " - " . $filmItem->getNomfilm() . " - " . $filmItem->getNbEntrees() . " - " . $filmItem->getRealisateur()->getNomRealisateur() . " - " . $filmItem->getRealisateur()->getPrenomRealisateur() . "\n";
    foreach ($filmItem->getListAuteurs() as $auteurItem) {
        echo "- " . $auteurItem->getNomAuteur() . " - " . $auteurItem->getPrenomAuteur() . " - " . $auteurItem->isOscar() . " \n";
    }
}