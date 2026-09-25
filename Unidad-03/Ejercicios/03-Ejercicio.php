<?php
/*
  Ejercicio 3: Crear una página PHP que muestre por pantalla todo el código ASCII 
  en una tabla de 16 columnas. Como pista, la función chr recibe un número y 
  muestra el código ASCII equivalente. Así chr(65) muestra el carácter A.
*/

echo "<h2>Tabla del Código ASCII (0-255)</h2>";
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";

// El código ASCII estándar y extendido abarca del 0 al 255
for ($i = 0; $i <= 255; $i++) {

    // Si es el primer elemento de la fila, abrimos <tr>
    if ($i % 16 == 0) {
        echo "<tr>";
    }

    // Mostramos el valor numérico y su carácter equivalente con chr()
    echo "<td>";
    echo "<small style='color: gray;'>$i</small><br>";
    echo "<strong>" . htmlspecialchars(chr($i)) . "</strong>";
    echo "</td>";

    // Si llegamos al final de la fila (16 columnas), cerramos </tr>
    if ($i % 16 == 15) {
        echo "</tr>";
    }
}

echo "</table>";

?>