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

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])) {

    // El usuario es obligatorio: indica QUÉ fila se elimina
    if (empty($_POST["usuario"])) {
        $mensaje = "Debes indicar el usuario que quieres eliminar";
    } else {
        $usuario = $_POST["usuario"];

        // 3. Eliminamos una Tupla en BD
        $query = "DELETE FROM `usuarios` WHERE `usuario`='$usuario'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            $mensaje = "Error en la consulta: " . mysqli_error($conn);
        } elseif (mysqli_affected_rows($conn) > 0) {
            $mensaje = "Usuario '$usuario' eliminado correctamente";
        } else {
            $mensaje = "No se ha eliminado nada: el usuario no existe";
        }
    }
}

// 4. Cerrar la conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Datos</title>
</head>
<body>
    <h1>Eliminar Datos</h1>

    <?php if ($mensaje != "") echo "<p>$mensaje</p>"; ?>

    <form method="post">
        <label for="usuario">Usuario a eliminar:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <input type="submit" name="enviar" value="Eliminar">
    </form>
</body>
</html>