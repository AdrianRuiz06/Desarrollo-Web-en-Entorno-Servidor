<?php

/*
 * Funciones en PHP
 * Una función es un bloque de código que realiza 
 * una tarea específica y puede ser reutilizado en 
 * diferentes partes de un programa.
 * Las funciones pueden recibir parámetros y devolver valores.
 */

// Definición de una función sin parámetros
function miFun1() {
    echo "¡Hola! Bienvenido a PHP.<br>";
}

// Llamada a la función
miFun1();

// Definición de una función con retorno de valor
function miFun2() {
    return "¡Hola! Esta es una función con retorno de valor.<br>";
}

// Llamada a la función y almacenamiento del valor devuelto
$mensaje = miFun2();
echo $mensaje;

// Definición de una función con parámetros
function miFun3($nombre, $edad, $estudiante = true) { // Parámetro con valor por defecto
    echo "¡Hola, $nombre!, tienes $edad  y eres $estudiante<br>";
}

// Llamada a la función con un argumento
echo "-> ";
miFun3("Pedro",18); // Se pasan tres argumentos, pero la función solo utiliza el primero

// Definición de una función con múltiples parámetros
function miFun4($nombre) {
    return "¡Hola, $nombre! Esta es una función con múltiples parámetros.<br>";
}

// Llamada a la función con un argumento y almacenamiento del valor devuelto
$mensaje2 = miFun4("María");
echo $mensaje2;
?>