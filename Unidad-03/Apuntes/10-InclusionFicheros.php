<?php

/*
 * Inclusión de ficheros
 * include() y require() son funciones que permiten incluir el contenido de un archivo PHP en otro archivo PHP.
 * La diferencia entre ellas es que include() genera una advertencia (warning) si el archivo no se encuentra, mientras que require() genera un error fatal (fatal error) y detiene la ejecución del script.
 * include_once() y require_once() son variantes de include() y require() que aseguran que el archivo solo se incluya una vez, evitando problemas de redefinición de funciones o variables.
 */ 

// El include sirve para incluir un fichero en otro, si el fichero no existe, 
// se mostrará un warning y el script continuará ejecutándose.
# Bien escrito el nombre del fichero
# include '06-Formularios.php';
# Mal escrito el nombre del fichero forzamos el error
# include '06-Formuarios.php';

// En cambio el require sirve para incluir un fichero en otro, si el fichero no existe,
// se mostrará un error fatal y el script se detendrá.
# require '06-Formuarios.php';

// Tenemos la opción de usar include_once o require_once, que funcionan igual que include y require, 
// pero si el fichero ya ha sido incluido, no se volverá a incluir .
// SOLO LO INCLUYE UNA VEZ AUNQUE LO PONGAS MUCHAS VECES


include("09-Formularios.php");
require("09-Formularios.php");

include_once("09-Formularios.php");
require_once("09-Formularios.php");



?>