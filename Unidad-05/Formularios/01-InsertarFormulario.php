<?php
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

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["enviar"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
        {
            $contrasenia = $_POST["contrasenia"];
        }
        if(isset($_POST["rol"]) && !empty($_POST["rol"]))
        {
            $rol = $_POST["rol"];
        }

        // 3. Inisertamos una Tupla en BD
        $query = "INSERT INTO `usuarios`(`usuario`, `contrasenia`, `rol`) VALUES ('$usuario','$contrasenia','$rol')";
        $result = mysqli_query($conn, $query);
        echo "<br>Filas afectadas: " . mysqli_affected_rows($conn);
        // 4. Cerrar la conexión
        mysqli_close($conn);
    }// enviar
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Datos</title>
</head>
<body>
    <h1>Insertar Datos</h1>
    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" required>
        <br>
        <label for="rol">Rol:</label>
        <input type="text" name="rol" id="rol" required>
        <br>
        <input type="submit" name="enviar" value="Insertar">
    </form>
</body>