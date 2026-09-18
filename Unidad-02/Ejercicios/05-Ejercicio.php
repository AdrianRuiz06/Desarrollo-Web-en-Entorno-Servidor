<?php
// Escribe un script PHP que muestre la IP del cliente, la IP del servidor y el nombre del fichero que se está visualizando (xxxxx.php)

echo "IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "IP del servidor: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Nombre del fichero: " . $_SERVER['PHP_SELF'] . "<br>";
?>