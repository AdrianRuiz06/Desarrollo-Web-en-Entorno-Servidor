<?php
// 1. Iniciamos la sesión
session_start();

// 2. SEGURIDAD: Si no existe la variable de sesión, significa que no ha hecho login
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

// 3. FIN DE SESIÓN (LOGOUT): Si se pulsa el botón de cerrar sesión
if (isset($_POST["cerrar_sesion"])) {
    // Destruimos todas las variables de sesión
    $_SESSION = array();
    
    // Destruimos la sesión en el servidor
    session_destroy();
    
    // Redirigimos al usuario de vuelta al login
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contenido Web</title>
</head>
<body>
    <h1>¡Bienvenido/a, <?= htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
    <p>Esta es la página protegida a la que solo se puede acceder si has iniciado sesión.</p>

    <!-- Botón para cerrar sesión -->
    <form action="" method="post">
        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
    </form>
</body>
</html>