<?php
/**
* Primer ejemplo de conexión a una base de datos MySQL/Mariadb
* Este ejemplo corresponde a programación funcional mediante 
* funciones mysqli
*/

// Database credentials
$host = "localhost";
$username = "teleasistencia";
$password = "1234";
$dbname = "teleasistencia";

// 1. Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// 2. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 3. Actualizamos una Tupla en BD
$query = "UPDATE `usuarios` SET `contrasenia`='4321' WHERE `usuario`='userPHP'";
$result = mysqli_query($conn, $query);
var_dump($result)"<br>";

// 4. Cerrar la conexión
mysqli_close($conn);

?>