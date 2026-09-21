<?php

/*
 * Vamos a estudiar los arrays en PHP. 
 * Un array es una estructura de datos que nos 
 * permite almacenar múltiples valores en una sola variable. 
 * Los arrays pueden ser indexados (con índices numéricos) 
 * o asociativos (con claves personalizadas).
 */

// Declaración de un array indexado
$frutas = array("Manzana", "Banana", "Cereza");
$frutas2 = ["Naranja", "Pera", "Uva"]; // Sintaxis corta
$frutas3[] = "Mango"; // Agregar un elemento al final del array
$frutas3[] = "Piña";
$frutas4 = array();
$frutas4[] = "Fresa";
$frutas4[] = "Kiwi";

// Acceso a elementos del array
$frutas2[1] = "Melón"; // Modificar un elemento del array
$frutas[8] = "Sandía"; // Agregar un elemento en una posición específica

// Recorrer un array con un bucle for y mostrar resultado
// La función count() devuelve el número de elementos en un array,
// equivalente a la función .length en Java
for($i=0; $i < count($frutas); $i++) {
    echo "Fruta en posición $i: " . $frutas[$i] . "<br>";
}

echo "<br>";
// Recorrer un array con un bucle foreach y mostrar resultado
foreach($frutas as $fruta) {
    echo "Fruta: $fruta<br>";
}



?>