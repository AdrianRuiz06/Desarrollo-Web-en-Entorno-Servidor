<?php 

// Explicación de cómo imprimir en PHP
// Se puede utilizar la función echo para imprimir texto en la salida
echo "Hola, mundo!<br>";
// También se puede utilizar la función print para imprimir texto en la salida
print "Hola, mundo!<br>";
// Se pueden imprimir variables utilizando echo o print
$nombre = "Juan";
echo "Hola, $nombre!<br>";

// Diferencias entre echo y print
// echo puede imprimir múltiples cadenas separadas por comas, mientras que print solo puede imprimir una cadena a la vez
echo "Hola, ", $nombre, "!<br>";
// print devuelve un valor (1) que indica si la impresión fue exitosa, mientras que echo no devuelve ningún valor
$val = print "Hola, $nombre!<br>";
var_dump($val); // Muestra el valor devuelto por print (1)



?>