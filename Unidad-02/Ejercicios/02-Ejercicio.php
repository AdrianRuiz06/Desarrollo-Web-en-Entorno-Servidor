<?php

// Escribe un script PHP en el que vayas cambiando el valor de una variable $temp para que vaya cambiando de tipo. Después de cada cambio muestra su valor y su tipo de datos en cada momento.
$temp = 5;
echo "Valor: $temp, Tipo: " . gettype($temp) . "<br>";

$temp = "Hola";
echo "Valor: $temp, Tipo: " . gettype($temp) . "<br>";

$temp = 3.14;
echo "Valor: $temp, Tipo: " . gettype($temp) . "<br>";

$temp = true;
echo "Valor: $temp, Tipo: " . gettype($temp) . "<br>";

?>