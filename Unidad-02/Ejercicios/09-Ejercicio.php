<?php
/*
    Escribe un script PHP para convertir una fecha con formato yyyy-mm-dd al formato dd-mm-yyyy.
*/

$fechaOriginal = "2026-09-18";

$timestamp = strtotime($fechaOriginal);

// Le damos el nuevo formato dd-mm-yyyy usando date()
$nuevaFecha = date("d-m-Y", $timestamp);

echo "<strong>Fecha original:</strong> $fechaOriginal <br>";
echo "<strong>Nueva fecha:</strong> $nuevaFecha";

?>