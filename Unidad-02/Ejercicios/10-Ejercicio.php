<?php
/*
    Escribe un programa PHP que muestre el primer y último día del mes de una fecha determinada 
    EJEMPLO: "2008-02-23" ⇒ Primer día: 2008-02-01 - Último día: 2008-02-29
*/
$fecha = "2008-02-23";

$primerDia = date("Y-m-01", strtotime($fecha));
$ultimoDia = date("Y-m-t", strtotime($fecha));

echo "Primer Dia: " .$primerDia . "<br>";
echo "Ultimo Dia: " .$ultimoDia;
?>