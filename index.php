<?php

include 'animal.php';
include 'cat.php';

$myCat = new Cat();
$myCat->setName("Plume");

echo "Le nom du chat est : " . $myCat->getName();