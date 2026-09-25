<?php
// Recogemos el parámetro 'numero' si viene desde la página de resultado (vía GET)
$ultimoNumero = isset($_GET['numero']) ? htmlspecialchars($_GET['numero']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Formulario</title>
</head>
<body>

    <h2>Suma de pares anteriores</h2>

    <!-- Formulario que envía los datos a la página procesar.php -->
    <form action="procesar.php" method="POST">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $ultimoNumero; ?>" required><br><br>

        <input type="submit" value="Calcular Suma">
    </form>

</body>
</html>