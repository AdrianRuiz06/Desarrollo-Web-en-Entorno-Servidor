<?php
$nombre = "Adrián";
$puntos = 10;

// Imprime directamente en pantalla
//printf("El jugador %s ha anotado %d puntos.", $nombre, $puntos);
printf("El jugador $nombre ha anotado $puntos <br>");
// Salida: El jugador Adrián ha anotado 10 puntos.



// Guarda el texto formateado en una variable (no imprime nada aún)
$mensaje = sprintf("El jugador %s ha anotado %d puntos.", $nombre, $puntos);

// Puedes usar $mensaje cuando quieras
echo ($mensaje); 
// Salida: EL JUGADOR ADRIÁN HA ANOTADO 10 PUNTOS.

?>