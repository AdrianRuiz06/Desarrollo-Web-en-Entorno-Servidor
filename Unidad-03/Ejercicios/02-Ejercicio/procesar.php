<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Resultado</title>
</head>
<body>

    <h2>Resultado de la suma</h2>

    <?php
    // Comprobamos si los datos han sido enviados por el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {

        $numero = (int)$_POST['numero'];
        $suma = 0;

        // Bucle para sumar los pares anteriores al número introducido (estrictamente menores)
        for ($i = 2; $i < $numero; $i += 2) {
            $suma += $i;
        }

        echo "<p>La suma de todos los números pares anteriores a <strong>$numero</strong> es: <strong>$suma</strong></p>";

        // Enlace para volver al formulario pasando el número por la URL (GET)
        echo "<p><a href='formulario.php?numero=$numero'>Volver al formulario</a></p>";

    } else {
        // Si entran directamente sin pasar por el formulario
        echo "<p style='color: red;'>No se ha recibido ningún número.</p>";
        echo "<p><a href='formulario.php'>Ir al formulario</a></p>";
    }
    ?>

</body>
</html>