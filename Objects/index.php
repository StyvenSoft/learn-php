<?php

require_once('class/Person.php');
require_once('class/Encapsulation.php');

$personOne = new Person("STEVEEN", "Echeverri", 23);

// $personOne->name = "Steveen";
/* $personOne->setName("STEVEEN");
$personOne->lastname = "Echeverri";
$personOne->age = 23; */

$personTwo = new Person("Lorena", "Rosada", 21);

/* $personTwo->name = "Lorena";
$personTwo->lastname = "Rosada";
$personTwo->age = 21; */

$personThree = new Colombian("Luis", "Diaz", 24);

echo "Nombre completo: " . $personOne->getName() .' '. $personOne->lastname . "\n";
echo "Nombre completo: " . $personTwo->name .' '. $personTwo->lastname . "\n";


var_dump($personOne);
var_dump($personThree);

$object = new Encapsulation;

echo $object->public;

/* echo $object->protected;
echo $object->private; */

$object->printWelcome();

$newObject = new ExtendsEncap;
$newObject->printWelcome();

