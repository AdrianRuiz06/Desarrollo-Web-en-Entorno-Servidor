<?php
// ValidaDatos.php

// Inicializamos las variables de control
$errNombre = false;
$mensajeExito = "";

// Comprobamos si el formulario se ha enviado por el método GET
if (isset($_GET["enviar"])) {
    // Verificamos si existe el nombre y que no esté vacío tras quitar espacios
    if (isset($_GET["nombre"]) && !empty(trim($_GET["nombre"]))) {
        // Saneamos la entrada contra vulnerabilidades XSS
        $nombre = htmlspecialchars($_GET["nombre"]);
        $mensajeExito = "<p style='color:green;'>¡Hola, " . $nombre . "! Has enviado el formulario correctamente.</p>";
    } else {
        // Activamos la bandera de error si el nombre está vacío
        $errNombre = true;
    }
}