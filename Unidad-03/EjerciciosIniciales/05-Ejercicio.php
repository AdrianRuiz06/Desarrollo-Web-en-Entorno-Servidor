<?php
/*
  5. Creación de tabla: 
  Crea un formulario que pida dos números. Ambos tienen que valer 1 o más, de no ser así 
  se indica el error. El resultado será una tabla (se mostrará en la misma página del 
  formulario) con el tamaño indicado.
*/

// Inicializamos la variable donde guardaremos el mensaje de error (si lo hay)
$error = "";

// Comprobamos si el formulario se ha enviado por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos los números enviados desde el formulario
    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];

    // Comprobamos la condición: ambos deben valer 1 o más
    if ($filas < 1 || $columnas < 1) {
        $error = "Error: Ambos números deben ser mayores o iguales a 1.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Creación de tabla</title>
</head>
<body>

    <h2>Generador de Tablas</h2>

    <!-- Formulario que se envía a la misma página -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="filas">Filas:</label>
        <input type="number" id="filas" name="filas" required><br><br>

        <label for="columnas">Columnas:</label>
        <input type="number" id="columnas" name="columnas" required><br><br>

        <input type="submit" value="Crear Tabla">
    </form>

    <hr>

    <?php
    // 1. Si hay un mensaje de error, lo mostramos en rojo
    if (!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }

    // 2. Si el formulario fue enviado por POST y NO hay error, mostramos la tabla
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        echo "<h3>Tabla de $filas x $columnas:</h3>";
        
        // Empezamos a dibujar la etiqueta <table>
        echo "<table border='1' cellpadding='10'>";
        
        // Bucle externo para crear cada fila (<tr>)
        for ($f = 1; $f <= $filas; $f++) {
            echo "<tr>";
            
            // Bucle interno para crear las celdas de la fila (<td>)
            for ($c = 1; $c <= $columnas; $c++) {
                echo "<td>Fila $f, Col $c</td>";
            }
            
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>

</body>
</html>