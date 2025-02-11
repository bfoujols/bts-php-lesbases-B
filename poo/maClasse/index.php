<?php
// import la classe CAT
include("cat.php");
include("animal.php");

// constante est une variable static
const genreRef = [
    1 => "Female",
    2 => "Male",
    3 => "UniSexe"
];

const colorRef = [
    0 => "No color",
    1 => "White",
    2 => "Black",
    3 => "Grey"
];

$felix = new cat("Félix", 2, 2);
// acces public
$felix->name = "Félixxxx";
// acces privée via setter
//$felix->setGenre(1);
echo $felix->getColor();

$listAnimal = new animal();
$listAnimal->setCat($felix);
$listAnimal->setCat(new cat("Filou", 1, 3));
$pistache = new cat("Pistache", 3, 1);
$listAnimal->setCat($pistache);
// Demande d'Ilan sur le changement de nom au dehors de la liste d'objet Animal
//$pistache->name = "Pistouche";
// Demande de Moussa de changer le nom d'un obj dans le tableau d'objet Animal
//$listAnimal->getCat()[1]->name = "Filoux";

//var_dump($listAnimal->getCat());
echo "Liste de chat \n";
foreach ($listAnimal->getCat() as $matricule => $cat) {
    echo "Le nom du chat numero " . $matricule . " est " . $cat->name . "\n";
}
