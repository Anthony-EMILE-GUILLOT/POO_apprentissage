<?php

include 'animal.php';
include 'cat.php';

$myCat = new Cat("Plume" , 3, "Gris");
$myCat->setName("Plume");
$myCat->setAge(3);
$myCat->setColor("Gris");

echo "Le nom du chat est : " . $myCat->getName();
echo "\n";
echo "L'âge du chat est : " . $myCat->getAge();
echo "\n";
echo "La couleur du chat est : " . $myCat->getColor();