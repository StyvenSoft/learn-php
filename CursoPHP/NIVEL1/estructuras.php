<?php

/*	1. Condicionales y operadores lógicos */
// Ejemplo de condicional "elseif":

$nota = 85;

if ($nota >= 90) {
    echo "Excelente"."\n";
} elseif ($nota >= 70) {
    echo "Aprobado"."\n";
} else {
    echo "Reprobado"."\n";
}

// Operador AND (&&):

$edad = 25;
$genero = "masculino";

// Verificar si la edad es mayor a 18 y el género es masculino
if ($edad > 18 && $genero == "masculino") {
    echo "Eres un hombre adulto". "\n";
} else {
    echo "No eres un hombre adulto". "\n";
}

// Operador OR (||):

$tiene_auto = true;
$tiene_moto = false;

// Verificar si tiene un auto o una moto
if ($tiene_auto || $tiene_moto) {
    echo "Tiene vehículo". "\n";
} else {
    echo "No tiene vehículo". "\n";
}

// Operador NOT (!):

$es_estudiante = true;

// Verificar si NO es estudiante
if (!$es_estudiante) {
    echo "No es estudiante". "\n";
} else {
    echo "Es estudiante". "\n";
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

// 3. Manipulación de cadenas de caracteres

// Extracción de subcadenas:

$texto = "Hola, mundo!";

// Extracción de una subcadena usando la función substr()
// para extraer una subcadena del texto

$subcadena = substr($texto, 0, 5);
echo $subcadena. "\n"; // Imprime "Hola,"

// Reemplazo de palabras:

$texto = "La casa es roja.";

// Reemplazo de una palabra usando la función str_replace()
// para reemplazar la palabra "roja" por "azul" 

$texto_modificado = str_replace("roja", "azul", $texto);
echo $texto_modificado. "\n"; // Imprime "La casa es azul."

// Conversión a mayúsculas/minúsculas:

$texto = "Hola, bienvenidos!";

// Conversión a mayúsculas usando la función strtoupper()
$texto_mayusculas = strtoupper($texto);
echo $texto_mayusculas. "\n"; // Imprime "HOLA, BIENDENIDOS!"

// Conversión a minúsculas usando la función strtolower()
$texto_minusculas = strtolower($texto);
echo $texto_minusculas. "\n"; // Imprime "hola, bienvenidos!"

// 4. Trabajo con fechas y tiempos

// Obtener la fecha y hora actual:

// Obtener la fecha y hora actual
$fecha_actual = date("Y-m-d H:i:s");
echo $fecha_actual. "\n"; // Imprime la fecha y hora actual en el formato "Y-m-d H:i:s"

// Convertir una fecha en formato de texto a objeto DateTime
$fecha_texto = "2023-04-01";
$fecha_objeto = DateTime::createFromFormat("Y-m-d", $fecha_texto);
echo $fecha_objeto->format("d/m/Y"). "\n"; // Imprime la fecha en el formato "d/m/Y"


// Sumar o restar días a una fecha
$fecha_actual = new DateTime();
$intervalo = new DateInterval("P3D"); // Sumar 3 días
$fecha_futura = $fecha_actual->add($intervalo);
echo "Fecha futura: ". $fecha_futura->format("Y-m-d"). "\n"; // Imprime la fecha futura en el formato "Y-m-d"


// Calcular la diferencia entre dos fechas
$fecha1 = new DateTime("2023-03-31");
$fecha2 = new DateTime("2023-04-07");
// la función diff() para calcular la diferencia entre las dos fechas y obtener un objeto DateInterval
$diferencia = $fecha1->diff($fecha2);
// Imprime la diferencia en días entre las dos fechas
echo $diferencia->days . " días de diferencia". "\n"; 


//	5. Inclusión de archivos 

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

// Ejercicios de prácticas de programación estructurada

// Juego de adivinar un número

/* Crea un programa en PHP que genere un número aleatorio entre un rango de números, y 
permita al usuario adivinar el número. El programa debe dar pistas al usuario 
si el número adivinado es mayor o menor que el número generado, y contar el 
número de intentos realizados hasta que el usuario adivine correctamente el número. */


// Generar un número aleatorio entre 1 y 20
$numeroGenerado = rand(1, 20);

// Inicializar el contador de intentos en 0
$intentos = 0;

// Bucle para permitir al usuario adivinar el número
do {
    $intentos++;
    $adivinanza = readline("Adivina el número (entre 1 y 20): ");
    if ($adivinanza < $numeroGenerado) {
        echo "El número es mayor. Intento número $intentos.\n";
    } elseif ($adivinanza > $numeroGenerado) {
        echo "El número es menor. Intento número $intentos.\n";
    }
} while ($adivinanza != $numeroGenerado);

// Mostrar mensaje de felicitaciones y el número de intentos
echo "¡Felicidades! Adivinaste el número $numeroGenerado en $intentos intentos.\n";

// Gestor de tareas:

/* Crea un programa en PHP que permita al usuario agregar, editar, eliminar y listar tareas. 
Las tareas pueden ser almacenadas en un archivo o en una base de datos, y el 
programa debe ofrecer una interfaz de línea de comandos o una interfaz web para 
interactuar con las tareas. */

$tareas = array();

function agregarTarea($tarea) {
    global $tareas;
    $tareas[] = $tarea;
}

function editarTarea($indice, $nuevaTarea) {
    global $tareas;
    if (isset($tareas[$indice])) {
        $tareas[$indice] = $nuevaTarea;
    }
}

function eliminarTarea($indice) {
    global $tareas;
    if (isset($tareas[$indice])) {
        unset($tareas[$indice]);
    }
}

function listarTareas() {
    global $tareas;
    echo "Lista de tareas:\n";
    foreach ($tareas as $indice => $tarea) {
        echo "$indice: $tarea\n";
    }
}

// Ejemplo de uso de las funciones
agregarTarea("Comprar leche");
agregarTarea("Pasear al perro");
listarTareas();
editarTarea(0, "Comprar pan");
eliminarTarea(1);
listarTareas();

