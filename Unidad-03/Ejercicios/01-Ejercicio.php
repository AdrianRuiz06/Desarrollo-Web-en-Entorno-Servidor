<?php
/*
  Ejercicio 1: Crea una página PHP que muestre los números del 1 al 1000 
  pero de forma que aparezcan en 5 columnas y se lean de izquierda a derecha.
*/

echo "<table border='1' cellpadding='8' style='border-collapse: collapse; text-align: center;'>";

// Bucle para iterar del 1 al 1000
for ($i = 1; $i <= 1000; $i++) {
    
    // Si es el primer elemento de la fila (1, 6, 11...), abrimos la etiqueta <tr>
    if ($i % 5 == 1) {
        echo "<tr>";
    }

    // Mostramos la celda con el número actual
    echo "<td>$i</td>";

    // Si es el último elemento de la fila (5, 10, 15... divisible por 5), cerramos la etiqueta </tr>
    if ($i % 5 == 0) {
        echo "</tr>";
    }
}

echo "</table>";

?>