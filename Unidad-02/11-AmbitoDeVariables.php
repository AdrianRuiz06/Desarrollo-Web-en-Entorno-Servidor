<?php

// Declaramos variable global
$varG = "Variable Global";

function miFunc1()
{
    $varL = "Variable Local";
    global $varG;
    echo $varL;
    echo "<br>";
    echo $varG;
}

function minFun()
{
    $cont = 1;
    echo "Llamada a la funcion numero $cont";
    $cont++;
}

// LLamamos a la Funcion
minFun();
minFun();


?>