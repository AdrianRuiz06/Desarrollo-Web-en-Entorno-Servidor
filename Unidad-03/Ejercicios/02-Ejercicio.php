<?php
/*
  2. Cálculo de salario: 
  Lee el nombre, los apellidos, el salario (número con decimales) y la edad de una persona 
  (un número) en un formulario. Recoge los datos y con ellos calcula un nuevo salario para 
  esa persona en base a esta situación:
    - Si el salario es mayor de 2000 euros, no cambiará.
    - Si el salario está entre 1000 y 2000:
        * Si además la edad es mayor de 45 años, se sube un 3%.
        * Si la edad es menor de 45 o igual, se sube un 10%.
    - Si el salario es menor de 1000:
        * Los menores de 30 años cobrarán, a partir de ahora, exactamente 1100 euros.
        * De 30 a 45 años, sube un 3%.
        * A los mayores de 45 años, sube un 15%.

    */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Cálculo de salario</title>
</head>
<body>

    <h2>Formulario de Salario</h2>

    <!-- Formulario básico que se envía a la misma página -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label>Nombre:</label>

        <input type="text" name="nombre" required><br><br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label>Salario (€):</label>
        <input type="number" step="0.01" name="salario" required><br><br>

        <label>Edad:</label>
        <input type="number" name="edad" required><br><br>

        <input type="submit" name="enviar" value="Calcular Salario">
    </form>

    <hr>

    <?php
    // Comprobamos si el formulario se ha enviado por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recogida de datos mediante la superglobal $_POST
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $salario = floatval($_POST['salario']);
        $edad = intval($_POST['edad']);

        $nuevoSalario = $salario;

        // --- LÓGICA DE NEGOCIO (Condicionales del enunciado) ---

        if ($salario > 2000) {
            // Caso 1: Salario mayor de 2000€ -> No cambia
            $nuevoSalario = $salario;

        } elseif ($salario >= 1000 && $salario <= 2000) {
            // Caso 2: Salario entre 1000€ y 2000€
            if ($edad > 45) {
                $nuevoSalario = $salario * 1.03; // Subida del 3%
            } else {
                $nuevoSalario = $salario * 1.10; // Subida del 10% (edad <= 45)
            }

        } else {
            // Caso 3: Salario menor de 1000€
            if ($edad < 30) {
                $nuevoSalario = 1100; // Pasa a ser exactamente 1100€
            } elseif ($edad >= 30 && $edad <= 45) {
                $nuevoSalario = $salario * 1.03; // Subida del 3%
            } else {
                $nuevoSalario = $salario * 1.15; // Subida del 15% (edad > 45)
            }
        }

        // --- SALIDA DE DATOS ---
        echo "<h3>Resultado del cálculo</h3>";
        echo "Empleado: " . $nombre . " " . $apellidos . "<br>";
        echo "Edad: " . $edad . " años<br>";
        echo "Salario antiguo: " . number_format($salario, 2) . " €<br>";
        echo "<strong>Nuevo salario: " . number_format($nuevoSalario, 2) . " €</strong>";
    }
    ?>

</body>
</html>