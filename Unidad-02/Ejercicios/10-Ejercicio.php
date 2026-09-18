<?php

// Escribe un programa PHP que muestre el primer y último día del mes de una fecha determinada EJEMPLO: "2008-02-23" ⇒ Primer día: 2008-02-01 - Último día: 2008-02-29
$fecha = "2008-02-23"; // Fecha determinada
$primerDia = date("Y-m-01", strtotime($fecha)); // Primer día del mes
$ultimoDia = date("Y-m-t", strtotime($fecha)); // Último día
echo "Primer día: " . $primerDia . " - Último día: " . $ultimoDia;

?>