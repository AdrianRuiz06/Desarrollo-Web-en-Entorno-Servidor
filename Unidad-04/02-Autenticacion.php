<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="02-RecogidaDatos.php" method="post">
            <fieldset>
                <legend>Formulario de login</legend>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario"><br>
                <label for="contrasenia">Contraseña</label>
                <input type="password" id="contrasenia" name="contrasenia"><br>
                <input type="submit" id="enviar" name="enviar" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>