<?php

include 'animal.php';
include 'cat.php';
include 'dog.php';

$myCat = new Cat("Plume" , 3, "Gris");
$myCat->setName("Plume");
$myCat->setAge(3);
$myCat->setColor("Gris");

echo "Le nom du chat est : " . $myCat->getName();
echo "\n";
echo "L'âge du chat est : " . $myCat->getAge();
echo "\n";
echo "La couleur du chat est : " . $myCat->getColor();
echo "\n\n";

$myDog = new Dog("Chien" , 7, "Noir");
$myDog->setName("Chien");
$myDog->setAge(7);
$myDog->setColor("Noir");

echo "Le nom du chien est : " . $myDog->getName();
echo "\n";
echo "L'âge du chien est : " . $myDog->getAge();
echo "\n";
echo "La couleur du chien est : " . $myDog->getColor();