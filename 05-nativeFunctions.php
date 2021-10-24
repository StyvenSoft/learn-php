<?php

echo "Welcome 2>&1";

$info = shell_exec('systeminfo');

echo $info . "\n";
echo "Completed";

$command = "mkdir doc/newFolder && touch Text.txt File.php";

$info = exec($command, $output, $result);

if (!$result) {
    echo "La carpeta se creo correctamente";
} else {
    echo "Error. No se creo la carpeta!";
}

echo $info;