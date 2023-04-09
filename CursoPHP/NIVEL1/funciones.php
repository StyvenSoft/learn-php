<?php

// 1. Funciones definidas por el usuario

/* 
Las funciones definidas por el usuario en PHP se utilizan para agrupar un 
conjunto de instrucciones en una sola función que puede ser llamada varias 
veces con diferentes valores de entrada.
*/

// Cálculo del factorial de un número:

function calcularFactorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * calcularFactorial($numero - 1);
    }
}

$numero = 5;
$factorial = calcularFactorial($numero);
echo "El factorial de $numero es: $factorial"."\n";

// Conversión de temperatura de Celsius a Fahrenheit y viceversa:

function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

function fahrenheitToCelsius($fahrenheit) {
    $celsius = ($fahrenheit - 32) * 5/9;
    return $celsius;
}

$celsius = 25;
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius grados Celsius son $fahrenheit grados Fahrenheit."."\n";

$fahrenheit = 77;
$celsius = fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit grados Fahrenheit son $celsius grados Celsius."."\n";

// Cálculo del área de un triángulo:

function calcularAreaTriangulo($base, $altura) {
    $area = ($base * $altura) / 2;
    return $area;
}

$base = 10;
$altura = 5;
$area = calcularAreaTriangulo($base, $altura);
echo "El área del triángulo con base $base y altura $altura es: $area"."\n";

// Cálculo de la hipotenusa de un triángulo rectángulo usando el teorema de Pitágoras:

function calcularHipotenusa($cateto1, $cateto2) {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
    return $hipotenusa;
}

$cateto1 = 3;
$cateto2 = 4;
$hipotenusa = calcularHipotenusa($cateto1, $cateto2);
echo "La hipotenusa de n triángulo rectángulo con cateto 1: $cateto1 y cateto 2: $cateto2 es: $hipotenusa"."\n";

// Cálculo del área de un círculo con una función que usa una constante 
// predefinida para el valor de Pi:


define("PI", 3.14159); // Definir constante para el valor de Pi

function calcularAreaCirculo($radio) {
    global $pi; // Acceder a la constante PI desde el ámbito global
    $area = PI * pow($radio, 2);
    return $area;
}

$radio = 7;
$area = calcularAreaCirculo($radio);
echo "El área del círculo con radio: $radio es: $area"."\n";

