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

// 2. Funciones predefinidas

// array_reduce(): Esta función se utiliza para reducir los valores de 
// un arreglo a un solo valor mediante una función definida por el usuario.

$numeros = [1, 2, 3, 4, 5];

$sumaArray = array_reduce($numeros, function($acumulado, $numero){
    return $acumulado + $numero;
}, 0);

echo "El total de la suma es: " . $sumaArray."\n";

// array_walk_recursive(): Esta función se utiliza para iterar de forma recursiva 
// sobre un arreglo y aplicar una función definida a cada uno de sus elementos.

$productos = [
    'producto1' => [
        'nombre' => 'Zapatos',
        'precio' => 60000
    ],
    'producto2' => [
        'nombre' => 'Pantalón',
        'precio' => 50000
    ],
    'producto3' => [
        'nombre' => 'Camisa',
        'precio' => 40000
    ],
];

function mostrarProductos($valor, $clave) {
    echo "$clave: $valor\n";
}

array_walk_recursive($productos, 'mostrarProductos');

// Generar contraseñas

//  random_bytes() para generar una cadena de bytes aleatorios y luego 
// utilizar la función base64_encode() para convertirla en una cadena de texto legible

function generar_passwords($longitud) {
    $byte = random_bytes($longitud);
    // substr() es una función predefinida en PHP que se utiliza 
    // para obtener una parte de una cadena de caracteres.
    return substr(base64_encode($byte), 0, $longitud);
}

$password = generar_passwords(8);

echo "Contraseña generada: ". $password . "\n";


//  array_map() permite aplicar una función a cada elemento de un array y 
// devolver un nuevo array con los resultados

// Funcion para elevar una cadena de numeros al cuadrado

function cuadrado($numero) {
    return pow($numero, 2);
}

$arrayNum = [2, 4, 6, 8];

$resultado = array_map('cuadrado', $arrayNum);

print_r($resultado);
echo "\n";

//  array_filter() permite filtrar los elementos de un array según 
// una función de devolución de llamada

function pares($numero) {
    return $numero % 2 == 0;
}

$array_numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$result = array_filter($array_numeros, 'pares');

print_r($result);

// Todas las categorias de funciones predefinidas

// $ start www.php.net

// https://www.php.net/manual/es/funcref.php


