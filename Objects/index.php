<?php

require_once('class/Person.php');

$personOne = new Person("STEVEEN", "Echeverri", 23);

// $personOne->name = "Steveen";
/* $personOne->setName("STEVEEN");
$personOne->lastname = "Echeverri";
$personOne->age = 23; */

$personTwo = new Person("Lorena", "Rosada", 21);

/* $personTwo->name = "Lorena";
$personTwo->lastname = "Rosada";
$personTwo->age = 21; */

echo "Nombre completo: " . $personOne->getName() .' '. $personOne->lastname . "\n";
echo "Nombre completo: " . $personTwo->name .' '. $personTwo->lastname . "\n";

var_dump($personOne);