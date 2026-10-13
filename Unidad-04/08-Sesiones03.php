<?php

session_start();

// Eliminamos la sesión
session_unset(); // Eliminamos todas las variables de la sesión
session_destroy(); // Elimina todos los datos y la información de la sesión


?>