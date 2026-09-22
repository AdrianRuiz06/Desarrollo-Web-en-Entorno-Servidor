<?php

/*
 * Funciones anónimas
 * Son funciones que no tienen un nombre específico y se definen en tiempo de ejecución.
 * Se pueden asignar a variables o pasar como argumentos a otras funciones.
 * Se utilizan comúnmente en combinación con funciones de orden superior.
 * Permiten una programación más flexible y expresiva.
 * Son muy útiles en situaciones donde se necesita pasar una función como parámetro 
 * o devolver una función como resultado.
 */

$arrAlumnos = array("Juan","Ramón","Pedro");

// Función anónima que recibe un parámetro y lo imprime
$imprimirAlumno = function($alumno) {
    foreach($alumno as $alumno) {
        echo "$alumno <br>";
    }
};

$imprimirAlumno($arrAlumnos);


?>