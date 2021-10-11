<?php

// Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos:

# Hace referencia a todas las variables disponibles en el ámbito global
// $GLOBALS
$number1 = 3;

function calculate() {
    $number2 = 5; 
    $total = $GLOBALS['number1'] + $number2;
    echo "Result: " . $total . PHP_EOL;
}

calculate();

# Información del entorno del servidor y de ejecución
// $_SERVER

// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV

// var_dump($GLOBALS);
$test = "Content";
var_dump($_POST);

// echo $argc;
// echo $argv;

