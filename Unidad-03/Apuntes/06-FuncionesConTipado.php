<?php

/* Declaramos el tipado de datos con la directiva strict_types */

declare( strict_types = 1 );

// Declaramos una función con tipado de datos
function saludo(string $nombre):string {
    return "Hola $nombre";
}

(string) $msg = saludo("Juan");
echo $msg;

?>