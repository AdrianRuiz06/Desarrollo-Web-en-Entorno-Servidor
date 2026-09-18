<?php
/*
    Escribe un script PHP que muestre la IP del cliente, 
    la IP del servidor y el nombre del fichero que se está visualizando (xxxxx.php)
*/

$client_ip = $_SERVER['REMOTE_ADDR'];
$server_ip = $_SERVER['SERVER_ADDR'];
echo ("<strong>La ip del CLIENTE es: </Strong>$client_ip <br>");
echo ("<strong>La ip del SERVIDOR es: </Strong>$server_ip <br>");


?>