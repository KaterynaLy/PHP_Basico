/*
Imprime por pantalla " Hello, World! " utilizando una variable. Después:

Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
Imprime por pantalla el tamaño (longitud) de la variable.
Imprime por pantalla el string en orden inverso de caracteres.
Crea una nueva variable con el contenido “ Este es el curso de PHP ”
e imprime por pantalla la concatenación de ambos*/
<?php
$message = "Hello, World!";
echo $message . PHP_EOL;

$toupperCase = strtoupper($message);
echo $toupperCase . PHP_EOL;

$sizeMessage = strlen($message);
echo $sizeMessage . PHP_EOL;

echo strrev($message) . PHP_EOL;

$variablePHP = "Este es el curso de PHP";
echo $message . " " . $variablePHP . PHP_EOL;
?>