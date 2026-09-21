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

//Definicion de funcion con parametros
function miFun3($nombre)
{
    echo "Hola $nombre, Esta funcion es con parametros. <br>";
}
// Llamada a la funcion con parametros
miFun3("Pedro");

// Definicion de funcion con parametros con valor por defecto
function miFun4($nombre = "Invitado")
{
    echo "Hola $nombre, Esta funcion es con parametros y valor por defecto. <br>";
}

// LLamada a la funcion con parametro con valor por defecto
miFun4();

//Definicion de funcion con mas de un parametro
function miFun5($nombre, $edad, $estudiante = true)
{
    echo "Hola $nombre, tienes $edad años y eres $estudiante <br>";
}

// LLamada a la funcion con mas de un parametro
miFun5("Juan", 25, true);
miFun5("Maria", 30);










?>
