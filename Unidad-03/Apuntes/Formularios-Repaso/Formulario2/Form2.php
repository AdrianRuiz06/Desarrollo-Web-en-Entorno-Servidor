<?php
if(isset ($_GET["nombre"]) && !empty($_GET["nombre"]))
    echo "Me has pasado un nombre";
else
    echo "Me has hacekado";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario 1</title>
</head>
<body>
    <form action = "form2.php" method="get">
        <label for="nombre"> Introduce Tu nombre</label>
        <input type="text" id="nombre" name="nombre" require>
        <input type="submit" name="enviar" value="Enviar el formulario1">

    </form>
</body>
</html>