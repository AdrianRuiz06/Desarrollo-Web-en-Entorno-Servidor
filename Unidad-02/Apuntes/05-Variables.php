<?php

// Ejemplos de variables en PHP
$entero = 10; // Tipo de dato entero
$decimal = 3.14; // Tipo de dato decimal (float)        
$cadena = "Hola, mundo"; // Tipo de dato cadena (string)

// Funciones para mostrar el tipo de dato de una variable
echo "Tipo de dato de la variable \$entero: " . gettype($entero) . "<br>";
echo "Tipo de dato de la variable \$decimal: " . gettype($decimal) . "<br>";
echo "Tipo de dato de la variable \$cadena: " . gettype($cadena) . "<br>";      

// Mostrar el valor de las variables
echo "Valor de la variable \$entero: $entero <br>";
echo "Valor de la variable \$decimal: $decimal <br>";
echo "Valor de la variable \$cadena: $cadena <br>";

// var_dump() muestra información detallada sobre una variable, incluyendo su tipo y valor
var_dump($entero);
var_dump($decimal);
var_dump($cadena);

// isset() verifica si una variable está definida y no es null
var_dump(isset($entero));

// unset() destruye una variable, eliminando su valor y tipo
unset($entero);
var_dump(isset($entero)); // Devuelve false, ya que la variable ha sido destru

// empty() verifica si una variable está vacía (es decir, no tiene valor o es null)
var_dump(empty($entero)); // Devuelve true, ya que la variable ha sido destru

?>