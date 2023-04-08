<?php

/*	1. Condicionales  */
// Ejemplo de condicional "elseif":

$nota = 85;

if ($nota >= 90) {
    echo "Excelente"."\n";
} elseif ($nota >= 70) {
    echo "Aprobado"."\n";
} else {
    echo "Reprobado"."\n";
}

// La instrucción switch en PHP se utiliza para realizar una evaluación de múltiples caso
// Ejemplo de condicional "switch":

$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Hoy es lunes"."\n";
        break;
    case "martes":
        echo "Hoy es martes"."\n";
        break;
    default:
        echo "Hoy no es un día válido"."\n";
        break;
}

// 2. Manipulación de arreglos (Arrays):

// Ejemplo de acceso a elementos de un arreglo:

$numeros = array(1, 2, 3, 4, 5);

$personas = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Buenos Aires");

echo $numeros[0]; // Imprime 1
echo "\n";
echo $personas["nombre"]; // Imprime Juan
echo "\n";

// Agregar un elemento con clave específica al array
$personas["nombre"] = "Pedrooo";

print_r($personas);

foreach ($personas as $persona) {
    echo $persona . "\n";
}

// Ejemplo de uso de algunas funciones de manipulación de arreglos:

$frutas = array("manzana", "naranja", "plátano");

// Agregar un elemento al final del arreglo
$frutas[] = "uva";

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}

// Agregar un elemento con clave específica al array
// $frutas["citrico"] = "limón";

// Eliminar un elemento del arreglo
unset($frutas[1]);

// Eliminar un elemento del array por valor
$indice = array_search("naranja", $frutas);
if ($indice !== false) {
    // Eliminar un elemento del array por clave
    unset($frutas[$indice]);
}

// Eliminar un elemento del array por clave
unset($frutas["citrico"]);

// Buscar un elemento en el array por valor
if (in_array("manzana", $frutas)) {
    echo "La manzana está en el array."."\n";
} else {
    echo "La manzana no está en el array."."\n";
}

// Buscar un elemento en el array por clave
if (array_key_exists("citrico", $frutas)) {
    echo "El cítrico está en el array."."\n";
} else {
    echo "El cítrico no está en el array."."\n";
}

// Contar la cantidad de elementos en el arreglo
$cantidad = count($frutas);
echo "Cantidad: ". $cantidad. "\n";

// Recorrer y mostrar los elementos del arreglo
foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}


//	3. Inclusión de archivos 

// Hay dos formas principales de incluir archivos en PHP: include y require.

// funciones.php

// Función para calcular el área de un círculo
function calcularAreaCirculo($radio) {
    $area = 3.14 * $radio * $radio;
    return $area;
}

// index.php:

// Incluir el archivo funciones.php usando 'include'
// include 'funciones.php';

// Calcular el área de un círculo con un radio de 5
$radio = 5;
$area = calcularAreaCirculo($radio);
echo "El área del círculo con radio $radio es: $area"."\n";

// Incluir el archivo funciones.php usando 'require'
// require 'funciones.php';

// Calcular el área de un círculo con un radio de 7
$radio = 7;
$area = calcularAreaCirculo($radio);
echo "El área del círculo con radio $radio es: $area"."\n";

/*
La diferencia principal entre 'include' y 'require' en este caso es 
que si el archivo funciones.php no existiera o contuviera errores, 
el script continuaría ejecutándose en el caso de include, pero con 'require' se detendría 
con un error fatal en el caso de require.

*/

// 4. Manejo de errores
// Detectar y solucionar problemas en la ejecución de código:

// Ejemplo de visualización de errores en PHP:

ini_set('display_errors', 1); // Mostrar errores en pantalla 1 activo 0 desactivado
error_reporting(E_ALL); // Mostrar todos los tipos de errores

// Código con errores
$numero1 = 10;
$numero2 = "5";
$suma = $numero1 + $numero2; // Genera un error de tipo de datos

// Ejemplo de uso de registros de errores en PHP:

// Configurar el registro de errores en un archivo
ini_set('log_errors', 1);
ini_set('error_log', '/ruta/del/archivo/error.log');

// Código con errores
$numero1 = 10;
$numero2 = "5";
$suma = $numero1 + $numero2; // Genera un error de tipo de datos

// Los detalles del error se registran en el archivo error.log


/* Prácticas de programación estructurada: */


/* La programación estructurada es una metodología de programación 
que se basa en la organización lógica y secuencial del código, 
utilizando estructuras de control y evitando el uso excesivo de saltos incondicionales.
*/

// Ejemplo de prácticas de programación estructurada en PHP:

// Código correcto usando programación estructurada con función

// Función para calcular el cuadrado de un número
function calcularCuadrado($numero) {
    return $numero * $numero;
}

// Llamada a la función y obtención del resultado
$numero = 5;
$cuadrado = calcularCuadrado($numero);

// Impresión del resultado
echo "-- El cuadrado de $numero es: $cuadrado". "\n";


// Código incorrecto sin seguir programación estructurada con función

// Llamada a la función y obtención del resultado
$numero = 5;
$cuadrado = $numero * $numero;

// Impresión del resultado
echo "-- El cuadrado de $numero es: $cuadrado". "\n";


// Función para calcular el área de un círculo
function calcularAreaCirculo2($radio) {
    $pi = 3.1416;
    $area = $pi * pow($radio, 2);
    return $area;
}

// Obtener el radio del usuario
$radioUsuario = 5;

// Llamar a la función para calcular el área del círculo
$areaCirculo = calcularAreaCirculo2($radioUsuario);

// Mostrar el resultado
echo "El área del círculo con radio " . $radioUsuario . " es: " . $areaCirculo."\n";



