<?php

/*
 * Funciones con paso de valores
 * En PHP, los parámetros se pasan por valor por defecto.
 * Esto significa que cualquier cambio realizado dentro 
 * de la función no afecta al valor original fuera de ella.    
 */

// Paso por valor
function incrementar($numero) {
    $numero++;
    echo "Dentro de la función: $numero <br>";
}

$numero = 5;
echo "Fuera de la función: $numero <br>";
incrementar($numero);
echo "Fuera de la función: $numero <br>";   

// Paso por referencia  
function incrementarReferencia(&$numero) {
    $numero++;
    echo "Dentro de la función (referencia): $numero <br>";
}       

$numeroRef = 5;
echo "Fuera de la función (referencia): $numeroRef <br>";
incrementarReferencia($numeroRef);
echo "Fuera de la función (referencia): $numeroRef <br>";

?>