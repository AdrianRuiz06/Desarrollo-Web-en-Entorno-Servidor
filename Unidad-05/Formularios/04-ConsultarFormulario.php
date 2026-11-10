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

    // 3. Consultamos todos los datos de la tabla
    $query = "SELECT * FROM `usuarios`";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        $mensaje = "Error en la consulta: " . mysqli_error($conn);
    } elseif (mysqli_num_rows($result) == 0) {
        $mensaje = "La tabla está vacía";
    } else {
        // Recorremos los resultados fila a fila
        while ($fila = mysqli_fetch_assoc($result)) {
            $mensaje .= "Usuario: " . $fila["usuario"] . " - Contraseña: " . $fila["contrasenia"] . " - Rol: " . $fila["rol"] . "<br>";
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
    <title>Consultar Datos</title>
</head>
<body>
    <h1>Consultar Datos</h1>

    <form method="post">
        <input type="submit" name="enviar" value="Mostrar">
    </form>

    <?php if ($mensaje != "") echo "<p>$mensaje</p>"; ?>
</body>
</html>