<?php
/*
    Escribe un script PHP que, dada la dirección de la propia página en el navegador, muestre de forma separada:
        a. Protocolo
        b. Nombre del host
        c. Path de la página en el servidor
    Pista: utiliza una función para obtener datos de la URL
*/

$url = 'http://127.0.0.1/DWS/Unidad-02//Ejercicios/05-Ejercicio.php';

$datos = parse_url($url);

echo "<strong> Protocolo: </strong>" . $datos['scheme'];
echo "<br>";
echo "<strong> Nombre Host: </strong>" . $datos['host'];
echo "<br>";
echo "<strong> PATH: </strong>" . $datos['path'];
echo "<br>";



?>