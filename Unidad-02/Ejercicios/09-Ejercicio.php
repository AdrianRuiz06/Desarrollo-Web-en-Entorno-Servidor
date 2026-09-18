<?php

// Escribe un script PHP para convertir una fecha con formato yyyy-mm-dd al formato dd-mm-yyyy.
$fecha = "2024-06-15"; // Fecha en formato yyyy-mm-dd
$fechaConvertida = date("d-m-Y", strtotime($fecha)); // Convertir al formato dd-mm-yyyy
echo "Fecha convertida: " . $fechaConvertida; // Mostrar

?>