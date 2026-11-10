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

    // El usuario es obligatorio: indica QUÉ fila se actualiza
    if (empty($_POST["usuario"])) {
        $mensaje = "Debes indicar el usuario que quieres modificar";
    } else {
        $usuario = $_POST["usuario"];

        // Guardamos solo los campos que se han rellenado
        $cambios = [];

        if (!empty($_POST["contrasenia"])) {
            $contrasenia = $_POST["contrasenia"];
            $cambios[] = "`contrasenia`='$contrasenia'";
        }
        if (!empty($_POST["rol"])) {
            $rol = $_POST["rol"];
            $cambios[] = "`rol`='$rol'";
        }

        if (count($cambios) == 0) {
            $mensaje = "No has indicado nada que cambiar";
        } else {
            // 3. Actualizamos una Tupla en BD
            // implode une los cambios con comas: `contrasenia`='x', `rol`='y'
            $query = "UPDATE `usuarios` SET " . implode(", ", $cambios) . " WHERE `usuario`='$usuario'";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                $mensaje = "Error en la consulta: " . mysqli_error($conn);
            } elseif (mysqli_affected_rows($conn) > 0) {
                $mensaje = "Usuario '$usuario' actualizado correctamente";
            } else {
                $mensaje = "No se ha actualizado nada: el usuario no existe o los datos son iguales";
            }
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
    <title>Actualizar Datos</title>
</head>
<body>
    <h1>Actualizar Datos</h1>

    <?php if ($mensaje != "") echo "<p>$mensaje</p>"; ?>

    <form method="post">
        <label for="usuario">Usuario a modificar:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasenia">Nueva contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia">
        <br>
        <label for="rol">Nuevo rol:</label>
        <input type="text" name="rol" id="rol">
        <br>
        <input type="submit" name="enviar" value="Actualizar">
    </form>
</body>
</html>