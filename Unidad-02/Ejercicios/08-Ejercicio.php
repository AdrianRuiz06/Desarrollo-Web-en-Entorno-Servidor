<?php

/*
Escribe un script PHP que calcule la diferencia entre dos días.
NOTA: Puedes considerar meses de 30 días para calcular meses y días de diferencia. EJEMPLO: 31 años, 10 meses, 11 días
*/
$fecha1 = strtotime("2020-01-01");
$fecha2 = strtotime("2051-11-11");

$diferencia = $fecha2 - $fecha1;

$anos = floor($diferencia / (365 * 24 * 60 * 60)); // floor redondea hacia abajo
$diferencia -= $anos * (365 * 24 * 60 * 60);

$meses = floor($diferencia / (30 * 24 * 60 * 60));
$diferencia -= $meses * (30 * 24 * 60 * 60);

$dias = floor($diferencia / (24 * 60 * 60));

echo "Diferencia: $anos años, $meses meses, $dias días";
?>