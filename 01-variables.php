<?php

echo "Welcome\n";
echo "Steveen Ehceverri\n";
echo "Mi edad es " . 30;

print_r([1, 2, 3, 4]);

print_r([
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4
]);

$nombre = "Steveen";
$apellidos = "Echeverri Silva";

echo "$nombre $apellidos";
echo "{$apellidos} {$nombre}";

$numberA = 5451;
$numberB = 332;
echo "\n";
echo $numberA + $numberB;
echo "\n";
echo $numberA * $numberB;
echo "\n";
echo $numberA - $numberB;
echo "\n";
echo $numberA / $numberB;
echo "\n";
echo $numberA ** $numberB;
echo "\n";
echo sqrt($numberA);


$valorA = 234;

if (!$valorA) {
    # code...
    echo "Error\n";
} else if ($valorA == 234) {
    # code...
    echo "Correcto\n";
}

// imprime NULL
$undefinedVariable = NULL;

var_dump($undefinedVariable);

$undefinedBoolean = false;

echo ($undefinedBoolean ? "True\n" : "False\n");

$undefinedVariable .= "ABC";

$varEmp = empty($undefinedVariable);
var_dump($varEmp);
echo $undefinedVariable . PHP_EOL;

var_dump(empty($variableEmpty));

$undefinedInt = 0;
$undefinedInt += 15;
var_dump($undefinedInt);

// Uso de arrays en variables

$undefinedArray = [];

$undefinedArray[3] = "Def";
var_dump($undefinedArray);

// Predefined Classes 
$undefinedObject = new  stdClass();

// Uso de Objetos en variables
$undefinedObject->foo = "bar";
var_dump($undefinedObject);


// Variables variables 

$first = "Hello";

$$first = "World";

echo "$first ${$first}\n";
echo $$first;

$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
