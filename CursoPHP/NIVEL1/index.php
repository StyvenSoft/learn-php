<?php

/*
Generalidades de PHP
¿Qué es PHP?
PHP es un lenguaje de programación de código abierto utilizado 
principalmente para el desarrollo de aplicaciones web.

Su nombre es un acrónimo recursivo de "PHP: Hypertext Preprocessor".

Historia de PHP
PHP fue creado en 1994 por Rasmus Lerdorf como un conjunto de scripts CGI escritos en C 
para su propio uso personal.

la primera versión de PHP se lanzo en 1995.

Instalación de PHP

Para instalar PHP, se debe descargar el paquete de instalación 
correspondiente para su sistema operativo y seguir las instrucciones de instalación.

Ejecución de un script PHP

Para ejecutar un script PHP, se debe crear un archivo con extensión ".php" 

que contenga el código PHP deseado y guardarlo en el directorio raíz del servidor web.
Luego, se puede acceder al archivo desde un navegador web y el servidor web ejecutará 
el script PHP y devolverá la salida al navegador.

1. Sintaxis y variables de uso

Variables

En PHP, se pueden definir variables utilizando el símbolo "$" seguido de un 
nombre de variable.

Las variables pueden contener diferentes tipos de datos, 
como cadenas de texto, 
números enteros y flotantes, booleanos y arreglos.

Ejemplo: */

$nombre = "Juan";
$edad = 25;
$estatura = 1.75;
$es_estudiante = true;
$frutas = array("manzana", "naranja", "plátano");

echo $nombre."\n";
echo $edad."\n";
echo $estatura."\n";
print_r($frutas);
echo "\n";

foreach($frutas as $fruta) {
    echo $fruta."\n";
}


/*
FORMAS DE IMPRIMIR EN PHP
Función "echo": La función "echo" se utiliza para imprimir texto en pantalla. 
Se puede usar con una o varias cadenas de texto separadas por comas. Por ejemplo:

php
Copy code */
$mensaje = "Hola mundo!";
echo $mensaje."\n";
// Output: Hola mundo!

/*
Función "print": La función "print" es similar a "echo", pero siempre 
devuelve el valor 1. Es menos comúnmente utilizada que "echo". Por ejemplo:

*/
$mensaje = "Hola mundo!";
print $mensaje."\n";
// Output: Hola mundo!
// Concatenación de cadenas: Se pueden unir varias cadenas de texto utilizando el operador 
// de concatenación ".". Por ejemplo:

/*
echo y print son dos funciones que se utilizan para imprimir texto en la pantalla.
 La principal diferencia entre ellas es que echo puede imprimir varios argumentos a la vez, 
 mientras que print sólo puede imprimir un argumento.

*/

// Ejemplo con echo
echo "Hola", " ", "mundo", "!";

// Ejemplo con print
print "Hola, mundoooo!\n";

// Concatenacion

$nombre = "Juan";
$apellido = "Pérez";
echo "Mi nombre es " . $nombre . " " . $apellido."\n";

echo "$nombre $apellido\n";
echo "{$apellido} {$nombre}\n";

// Output: Mi nombre es Juan Pérez

/*
Función "printf": La función "printf" se utiliza para formatear una cadena de 
texto con valores variables. Se utiliza un formato de cadena que especifica dónde 
se colocarán los valores variables y qué tipo de formato tendrán. Por ejemplo:

*/
$precio = 12.345;
printf("El precio es: %.2f", $precio);
echo "\n";
// Output: El precio es: 12.35

/* 
Función "var_dump": La función "var_dump" se utiliza para imprimir información sobre 
una variable, incluyendo su tipo y valor. Es útil para depurar código. Por ejemplo:
*/

$numeros = array(1, 2, 3);
var_dump($numeros);
echo "\n";
// Output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

/*
Estas son solo algunas de las formas de imprimir resultados en PHP. 
Dependiendo del contexto y de lo que quieras lograr, puede haber otras
formas que sean más apropiadas.

*/


// las constantes son valores que no cambian durante la ejecución del script y que se 
// definen mediante la función define().

// define("NOMBRE_CONSTANTE", valor);

define("PI", 3.1416);
echo "El valor de PI es: " . PI . "\n";

/* Tipos de datos
PHP admite varios tipos de datos, incluyendo: 

Integer: números enteros positivos o negativos.
Float: números decimales.
String: cadenas de texto.
Boolean: verdadero o falso.
Array: colección de elementos.
Object: instancia de una clase.
Null: valor nulo o vacío.
Ejemplo:


*/
$numero_entero = 10;
$numero_decimal = 3.14;
$nombre = "Juan";
$es_estudiante = true;
$frutas = array("manzana", "naranja", "plátano");
// $objeto = new MiClase();
$valor_nulo = null;

/*
Operadores
En PHP, se pueden utilizar diferentes tipos de operadores, como aritméticos, 
de comparación y lógicos.

Ejemplo:

php
Copy code

*/
$number1 = 10;
$number2 = 5;
$number3 = 2;

$suma = $number1 + $number2;
$resta = $number1 - $number2;
$multiplicacion = $number1 * $number2;
$division = $number1 / $number2;
$modulo = $number1 % $number3;

$igual = $number1 == $number2;
$diferente = $number1 != $number2;
$mayor_que = $number1 > $number2;
$menor_o_igual_que = $number1 <= $number2;

echo "Suma: ".$suma."\n";
echo "Resta: ".$resta."\n";

/*
Estructuras de programación
Estructuras de control de flujo
Las estructuras de control de flujo son herramientas que permiten controlar el 
flujo de ejecución de un programa.

En PHP, las estructuras de control de flujo incluyen:

Ejemplo:
*/

$edad = 18;

// Condición if
// Condicional "if": permite ejecutar un bloque de código si se cumple una condición.

if ($edad >= 18) {
    echo "Eres mayor de edad\n";
} else {
    echo "Eres menor de edad\n";
}

// El operador ternario en PHP es una forma abreviada de escribir una estructura de 
// control if-else. Este operador permite asignar un valor a una variable en función 
//de una condición.

// $variable = (condición) ? valor si verdadero : valor si falso;

$edad = 25;
$estatus = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo "El estatus de la persona es: " . $estatus . "\n";


// Bucle for
// Bucle "for": permite ejecutar un bloque de código un número fijo de veces.

for ($i = 1; $i <= 5; $i++) {
    echo "For: ".$i."\n";
}

// Bucle while
// Bucle "while": permite ejecutar un bloque de código mientras se cumple una condición.

$i = 1;
while ($i <= 5) {
    echo "While: ".$i."\n";
    $i++;
}

// Bucle do-while
// Bucle "do-while": permite ejecutar un bloque de código al menos una vez y luego mientras se 
// cumple una condición.
$i = 1;
do {
    echo "Do While: ".$i."\n";
    $i++;
} while ($i <= 5);

// Estructura de control de excepciones
// Estructuras de control de excepciones: permiten manejar errores y excepciones en un programa.

try {
    // Código que puede generar una excepción
} catch (Exception $e) {
    // Manejo de la excepción
}

/*
En este ejemplo, se intenta dividir $a por $b, pero como $b es igual a cero, 
se genera una excepción. La excepción se maneja en el bloque catch, donde 
se imprime un mensaje de error con el método getMessage() de la variable $e.

*/

try {
    $a = 10;
    $b = 0;
    if ($b == 0) {
        throw new Exception("División por cero.");
    }
    $c = $a / $b;
    echo "El resultado es: " . $c;
} catch (Exception $e) {
    echo "Se produjo un error: " . $e->getMessage();
}

