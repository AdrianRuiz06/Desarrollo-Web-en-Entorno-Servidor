<?php
/*
    Escribe un script PHP que calcule la diferencia entre dos días.
    NOTA: Puedes considerar meses de 30 días para calcular meses y días de diferencia. 
    EJEMPLO: 31 años, 10 meses, 11 días
*/

$fecha1 = "1994-11-07";
$fecha2 = "2026-09-18";

$time1 = strtotime($fecha1);
$time2 = strtotime($fecha2);

$diferenciaSegundos = abs($time2 - $time1);
// De segundos a dias
$diasTotales = floor($diferenciaSegundos / 86400);

// Calculas los años
$anios = floor($diasTotales / 365);
$diasRestantes = $diasTotales % 365; 

// Meses a dias
$meses = floor($diasRestantes / 30);
$dias = $diasRestantes % 30; 

echo "<strong>Diferencia:</strong> $anios años, $meses meses, $dias días.";

?>