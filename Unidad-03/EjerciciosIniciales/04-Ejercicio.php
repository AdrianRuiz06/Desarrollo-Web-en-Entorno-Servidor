<?php
/*
  4. Asteriscos: 
  Crea un formulario en el que se pida un número entero positivo. Después, haz que la 
  página escriba tantos asteriscos (en la misma página) como el número que se haya escrito. 
  Si se escribe 5, se mostrarán 5 asteriscos.
*/

// Inicializamos la variable de error
$error = "";

// Comprobamos si el formulario se ha enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos el número del formulario
    $numero = $_POST['numero'];

    // Validación básica: comprobamos que sea un entero positivo (mayor o igual a 1)
    if ($numero < 1) {
        $error = "Por favor, introduce un número entero positivo (1 o mayor).";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Asteriscos</title>
</head>
<body>

    <h2>Imprimir Asteriscos</h2>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="numero">Introduce un número positivo:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <input type="submit" value="Mostrar asteriscos">
    </form>

    <hr>

    <?php
    // 1. Mostrar mensaje de error si el número es menor que 1
    if (!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }

    // 2. Si se ha enviado por POST y NO hay errores, mostramos los asteriscos
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        
        echo "<p>Resultado ($numero asteriscos):</p>";
        
        // Bucle for sencillo para repetir el asterisco tantas veces como indique $numero
        echo "<p style='font-size: 20px; font-weight: bold;'>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "* ";
        }
        echo "</p>";
    }
    ?>

</body>
</html>