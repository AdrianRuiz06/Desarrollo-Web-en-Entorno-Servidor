<?php
// Importamos la lógica de validación (detiene la ejecución si el archivo no existe)
require_once 'ValidaDatos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>

    <?php 
    // Muestra el mensaje de éxito si la validación fue correcta
    if (!empty($mensajeExito)) {
        echo $mensajeExito;
    }
    ?>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        
        <?php if ($errNombre): ?>
            <p style="color:red">Por favor, introduce un nombre válido.</p>
        <?php endif; ?>

        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <input type="submit" name="enviar" value="Enviar el formulario 1">
    </form>

</body>
</html>