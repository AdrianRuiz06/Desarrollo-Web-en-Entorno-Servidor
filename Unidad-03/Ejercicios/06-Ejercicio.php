<?php
/*
  Ejercicio 6: Crea una función llamada dibujarArray que reciba un array y escriba 
  el array usando una tabla HTML de dos columnas, en la primera aparecerán los 
  índices (esta primera estará sombreada de gris) y en la segunda los valores.
*/

// Definición de la función solicitar
function dibujarArray($miArray) {
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse;'>";
    echo "<tr>";
    echo "<th style='background-color: #999; color: white;'>Índice</th>";
    echo "<th>Valor</th>";
    echo "</tr>";

    // Recorremos el array imprimiendo cada clave (índice) y su valor
    foreach ($miArray as $indice => $valor) {
        echo "<tr>";
        // Columna de índices sombreada en gris
        echo "<td style='background-color: #e0e0e0; font-weight: bold;'>$indice</td>";
        // Columna de valores
        echo "<td>$valor</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// --- EJEMPLO DE PRUEBA ---
// Probamos la función con un array de ejemplo (asociativo o indexado)
$datosAlumno = [
    "Nombre" => "Carlos",
    "Apellidos" => "Gómez Pérez",
    "Módulo" => "DWES",
    "Curso" => "2º DAW"
];

echo "<h3>Resultado de dibujarArray():</h3>";
dibujarArray($datosAlumno);

?>