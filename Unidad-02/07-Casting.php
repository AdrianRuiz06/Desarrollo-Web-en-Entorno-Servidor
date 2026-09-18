<?php

// Ejemplo de casting en PHP implícito
$entero = 10; // Tipo de dato entero
$decimal = 3.14; // Tipo de dato decimal (float)
$cadena = "20"; // Tipo de dato cadena (string)

// Realizar casting implícito
$enteroACastDecimal = $entero; // Se convierte automáticamente a decimal
echo "Casting implícito de entero a decimal: $enteroACastDecimal <br>";

$decimalACastEntero = $decimal; // Se convierte automáticamente a entero
echo "Casting implícito de decimal a entero: $decimalACastEntero <br>";

$cadenaACastEntero = $cadena; // Se convierte automáticamente a entero
echo "Casting implícito de cadena a entero: $cadenaACastEntero <br>";



// -------------------------------------------

/**
 * Forzar el tipo de dato de una variable utilizando casting explícito.
 * Se puede utilizar para convertir entre tipos de datos, como entero, decimal, cadena, etc
 * (int) o (integer): Convierte a entero.
 * (float) o (double) o (real): Convierte a decimal.
 * (string): Convierte a cadena.
 */


// Ejemplo de casting en PHP explícito
$entero = 10; // Tipo de dato entero
$decimal = 3.14; // Tipo de dato decimal (float)
$cadena = "20"; // Tipo de dato cadena (string)

// Casting de entero a decimal
$enteroACastDecimal = (float)$entero;
echo "Casting de entero a decimal: $enteroACastDecimal <br>";
// Casting de decimal a entero
$decimalACastEntero = (int)$decimal;
echo "Casting de decimal a entero: $decimalACastEntero <br>";
// Casting de cadena a entero
$cadenaACastEntero = (int)$cadena;
echo "Casting de cadena a entero: $cadenaACastEntero <br>"; 
// Casting de entero a cadena
$enteroACastCadena = (string)$entero;
echo "Casting de entero a cadena: $enteroACastCadena <br>"; 
// Casting de decimal a cadena
$decimalACastCadena = (string)$decimal;
echo "Casting de decimal a cadena: $decimalACastCadena <br>"; 
// Casting de cadena a decimal
$cadenaACastDecimal = (float)$cadena;
echo "Casting de cadena a decimal: $cadenaACastDecimal <br>"; 



?>