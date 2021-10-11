<?php

function saludoBienvenida($name, $lastname) {
    echo "\nWelcome {$name} {$lastname}";
}

saludoBienvenida('Steveen', 'Echeverri');

// (): valor de tipado que vamos a regresar

function potencia(int $base, int $exponente):int {
    return $base ** $exponente;
}

echo potencia(3, 4) . PHP_EOL;
echo potencia(3, 2) . PHP_EOL;


// arrow functions 

function (): void {
    echo "new day!\n";
};

$despido = function() {
    echo "Bye!\n";
};

$despido();

/**
 * @param int[] $numbers
 * @param Closure $callback
 */

function closureSuma(array $numbers, Closure $callback) {
    foreach ($numbers as $n) {
        # code...
        echo $callback($n) . PHP_EOL;
    }
}

closureSuma(
    [1, 2, 3, 4, 5],
    function(int $number) {
        return $number * 2;
    }
);

$myEdad = fn() => 25;

echo $myEdad() . PHP_EOL;