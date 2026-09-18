
<?php
// Texto utilizando la sintaxis heredoc (explicada abajo)
$texto = <<<TEXTO
Mañana aprenderé las variables globales de PHP.
Este es un comando incorrecto: del c:\*.*
TEXTO;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo PHP</title>
</head>
<body>

    <!-- Muestra el texto procesado para seguridad en HTML -->
    <p>
        <strong><em><?php echo nl2br(htmlspecialchars($texto)); ?></em></strong>
    </p>

</body>
</html>

