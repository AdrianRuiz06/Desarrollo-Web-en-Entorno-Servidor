<?php

/* 
PARA QUE SIRVE EL TIPADO DE DATOS EN PHP?

    El tipado de datos en PHP sirve para garantizar que las variables y los parámetros de las funciones 
    tengan el tipo de dato esperado. Esto ayuda a evitar errores y hace que el código sea más fácil de 
    entender y mantener. Además, permite a los desarrolladores detectar errores en tiempo de compilación en 
    lugar de en tiempo de ejecución, lo que puede mejorar la calidad del código y reducir el tiempo de 
    depuración. */

/* Declaramos el tipado de datos con la directiva strict_types */

declare( strict_types = 1 );

// Declaramos una función con tipado de datos
function saludo(string $nombre):string {
    return "Hola $nombre";
}

(string) $msg = saludo("Juan");
echo $msg;

?>