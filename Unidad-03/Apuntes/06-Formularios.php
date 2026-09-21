<!DOCTYPE html> 
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Unidad 3 - Formularios</title>
    </head>
    <body>
        <h1>Formulario base</h1>
        <form action="06-RecogerDatos.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>