<?php
/*
  3. Saber si hay número: 
  Crea un formulario que lea un número, después un mensaje nos indicará si era realmente 
  o no un número y, si es un número, si tenía decimales.
*/

// Inicializamos la variable donde guardaremos el mensaje resultante
$mensaje = "";

// Comprobamos si el formulario ha sido enviado por POST[cite: 1]
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos el valor introducido en el formulario
    $entrada = $_POST['valor'];

    // 1. Comprobamos si el dato introducido es un número
    if (is_numeric($entrada)) {
        
        // Convertimos el dato a tipo numérico (flotante)
        $numero = (float)$entrada;

        // 2. Comprobamos si tiene decimales
        // Si el valor numérico es igual a su parte entera, no tiene decimales
        if ($numero == (int)$numero) {
            $mensaje = "El valor <strong>'$entrada'</strong> SÍ es un número y es <strong>ENTERO</strong> (sin decimales).";
        } else {
            $mensaje = "El valor <strong>'$entrada'</strong> SÍ es un número y tiene <strong>DECIMALES</strong>.";
        }

    } else {
        // Si no es numérico
        $mensaje = "El valor <strong>'$entrada'</strong> NO es un número válido.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Saber si hay número</title>
</head>
<body>

    <h2>Comprobador Numérico</h2>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="valor">Introduce un valor o número:</label>
        <input type="text" id="valor" name="valor" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <hr>

    <?php
    // Si se ha procesado el mensaje, lo mostramos en pantalla
    if (!empty($mensaje)) {
        echo "<p>$mensaje</p>";
    }
    ?>

</body>
</html>