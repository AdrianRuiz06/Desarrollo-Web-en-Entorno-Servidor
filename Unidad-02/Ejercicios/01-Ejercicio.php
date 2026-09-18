
<?php
// Escribe un programa PHP para intercambiar dos variables. 
// Se debe mostrar su valor antes y después del intercambio.

// Declaramos las variables iniciales
$a = 1;
$b = 3;

// Mostramos los valores antes del intercambio
echo "Antes del intercambio:<br>";
echo "Variable 1: " . $a . "<br>";
echo "Variable 2: " . $b . "<br><br>";

// Intercambiamos los valores usando una variable auxiliar
$c = $a;
$a = $b;
$b = $c;

// Mostramos los valores después del intercambio
echo "Después del intercambio:<br>";
echo "Variable 1: " . $a . "<br>";
echo "Variable 2: " . $b . "<br>";
?>
