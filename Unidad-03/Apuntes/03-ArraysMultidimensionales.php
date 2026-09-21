<?php

/*
 * Ejemplo de array de 2 dimensiones en PHP.
 * Un array de 2 dimensiones es un array que contiene
 * otros arrays como elementos. Se puede pensar en él como una tabla
 * con filas y columnas.    
 * Cada elemento del array principal es un array que representa una fila,
 * y cada elemento de esos arrays internos representa una columna.
 */

$alumnos = array(
    array("nombre" => "Juan", "apellido" => "Pérez", "edad" => 25),
    array("nombre" => "María", "apellido" => "Gómez", "edad" => 30),
    array("nombre" => "Pedro", "apellido" => "López", "edad" => 28)
);

// Acceso a elementos del array de 2 dimensiones
echo "Nombre del primer alumno: " . $alumnos[0]["nombre"] . "<br>";
echo "Apellido del segundo alumno: " . $alumnos[1]["apellido"] . "<br>";
echo "Edad del tercer alumno: " . $alumnos[2]["edad"] . "<br>";
echo "<br>";
// Recorrer un array de 2 dimensiones con foreach y mostrar resultado
foreach($alumnos as $alumno) {
    echo "Nombre: " . $alumno["nombre"] . 
         ", Apellido: " . $alumno["apellido"] . 
         ", Edad: " . $alumno["edad"] . "<br>";
}
?>