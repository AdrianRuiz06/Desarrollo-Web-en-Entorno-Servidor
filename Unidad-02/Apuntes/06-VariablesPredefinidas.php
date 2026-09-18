<?php 

// Variables predefinidas en PHP

// $_SERVER: Contiene información sobre el servidor y la ejecución del script
echo "<h3>Información del servidor:</h3>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Dirección IP del servidor: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Puerto del servidor: " . $_SERVER['SERVER_PORT'] . "<br>";    

var_dump($_SERVER);

?>