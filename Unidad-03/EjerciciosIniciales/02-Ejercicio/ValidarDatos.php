<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["enviar"])){
        
        if(isset($_GET["nombre"]) && !empty($_GET["nombre"]) && 
        isset($_GET["apellidos"]) && !empty($_GET["apellidos"]) &&
        isset($_GET["edad"]) && !empty($_GET["edad"]) &&
        isset($_GET["salario"]) && !empty($_GET["salario"])){ 
            $nombre=$_GET["nombre"];
            $apellidos=$_GET["apellidos"];
            $edad=$_GET["edad"];
            $salario=calcularSalario($edad, $_GET["salario"]);
        
            // Creamos una variable que visualiza los resultados
            // en el formulario
            $datosOK = true;
                }
    }
}

?>