<?php

/*
Escribe un script PHP que, dada la dirección de la propia página en el navegador, muestre de forma separada:
   a. Protocolo
   b. Nombre del host
   c. Path de la página en el servidor
Pista: utiliza una función para obtener datos de la URL
*/

echo "Protocolo: " . $_SERVER["SERVER_PROTOCOL"] . "<br>";
echo "Nombre del host: " .  $_SERVER["SERVER_NAME"] . "<br>";
echo "Path de la página en el servidor: " .basename($_SERVER['PHP_SELF']) . "<br>"; // basename() devuelve el nombre del archivo de la ruta completa
?>