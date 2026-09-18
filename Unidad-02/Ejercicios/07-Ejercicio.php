<?php

// Escribe un programa PHP para convertir una fecha (cadena) a timestamp. EJEMPLO: “2017-10-12” ⇒ 1507759200
$fecha = "2017-10-12";
$timestamp = strtotime($fecha);
echo $timestamp;
?>