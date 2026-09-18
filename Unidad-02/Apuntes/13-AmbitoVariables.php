<?php

$varG = "Variable global"; // Variable global

function miFuncion() {
    static $varE = 0; // Variable estática
    $varL = "Variable local"; // Variable local
    global $varG; // Acceder a la variable global dentro de la función
    $varE++;    
    echo "Dentro de la función: Global: $varG, Local: $varL, Estática: $varE <br>";
}

miFuncion(); // Llamada a la función
miFuncion(); // Llamada a la función
miFuncion(); // Llamada a la función

?>