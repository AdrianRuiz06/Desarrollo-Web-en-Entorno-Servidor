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

// 3. Consultar datos de la BD
$query = "SELECT * FROM `usuarios`";
$result = mysqli_query($conn, $query);

// Funcion que nos devulve el numero de tuplas de la consulta
$numTuplas = mysqli_num_rows($result);
echo "Número de tuplas: " . $numTuplas;

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "<br>Usuario: " . $row["usuario"];
}

// 4. Cerrar la conexión
mysqli_close($conn);

?>