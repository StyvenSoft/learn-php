<?php

$valorB = 4;

switch ($valorB) {
    case 1:
        # code...
        echo "One";
        break;
    case 4:
        # code...
        echo "Two";
    case 3:
        # code...
        echo "Three";
    case 4:
        # code...
        echo "Four";

    default:
        # code...
        echo "None";
        break;
}

for ($i=0; $i < 8; $i++) { 
    # code...
    echo "{$i}\n";
}

for ($fortwo=0; $fortwo < 12; $fortwo += 2) { 
    # code...
    echo "{$fortwo}\n";
}

$factura = 0;
$conteo = 100;
$preincremento = 0;
$regresica = 10;

while ($factura <= 5) {
    # code...
    echo $factura++ . "\n";
}

while ($conteo <= 110) {
    # code...
    print_r($conteo++ . "\n");
}

while ($preincremento <= 6) {
    # code...
    echo ++$preincremento . "\n";
}

while ($regresica > 0) {
    # code...
    echo $regresica-- .  "\n";
}

$primary = 1;
$secondary = 300;
$eighth = 80;

do {
    # code...
    echo ++$primary . "\n";
} while ($primary >= 1 && $primary < 5);

do {
    # code...
    echo --$secondary . "\n";
} while ($secondary >= 300 && $secondary < 310);

do {
    # code...
    echo "-" . $eighth++;
} while ($eighth <= 88);
