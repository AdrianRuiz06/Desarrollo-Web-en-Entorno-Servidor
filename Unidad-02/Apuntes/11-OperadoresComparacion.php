<?php

$a = 5;
$b = 10;

// Comparación de igualdad

if ($a == $b) {
    echo "$a es igual a $b<br>";
} else {
    echo "$a no es igual a $b<br>";
}

// Comparación de identidad
if ($a === $b) {
    echo "$a es identico a $b<br>"; // El operador === compara tanto el valor como el tipo de dato
} else {
    echo "$a no es identico a $b<br>";
}

// El operador <=> devuelve -1 si $a es menor que $b, 0 si son iguales y 1 si $a es mayor que $b
if (($a <=> $b) == -1) {
    echo "$a es menor que $b<br>";
} elseif (($a <=> $b) == 1) {
    echo "$a es mayor que $b<br>";
} elseif (($a <=> $b) == 0) {
    echo "$a es igual a $b<br>";
}

?>