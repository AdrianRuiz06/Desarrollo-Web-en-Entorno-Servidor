<?php
/*
  Ejercicio 10: Crea una función que reciba una cadena y compruebe que se trata 
  de una dirección de email válida. La función devolverá verdadero si es una 
  dirección de email válida; devolverá falso de no ser así. Consideraremos un email 
  válido si tenemos a la izquierda de la arroba, letras, guiones, números o un punto 
  (pero el punto solo puede ir entre medias de los anteriores). Tras la arroba solo 
  permitiremos correos de los dominios educa.madrid.org. 
  Ejemplo: alumno.1234@educa.madrid.org
*/

/**
 * Función que valida si un email cumple las reglas específicas
 * @param string $email
 * @return bool Devuelve true si es válido, false en caso contrario
 */
function validarEmail($email) {
    /*
      Explicación de la Expresión Regular:
      ^                       : Inicio de la cadena
      [a-zA-Z0-9-]+           : Uno o más caracteres (letras, números o guiones)
      (\.[a-zA-Z0-9-]+)*      : Opcional: un punto seguido de más letras/números/guiones (evita puntos seguidos o al final)
      @educa\.madrid\.org$    : Debe terminar exactamente con el dominio @educa.madrid.org
    */
    $patron = '/^[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*@educa\.madrid\.org$/i';

    // preg_match devuelve 1 si coincide con el patrón, 0 si no
    if (preg_match($patron, $email)) {
        return true;
    } else {
        return false;
    }
}

// Variables para el formulario
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (validarEmail($correo)) {
        $resultado = "<p style='color: green;'><strong>" . htmlspecialchars($correo) . "</strong> es una dirección de correo VÁLIDA.</p>";
    } else {
        $resultado = "<p style='color: red;'><strong>" . htmlspecialchars($correo) . "</strong> NO es una dirección de correo válida.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 - Validador de Email</title>
</head>
<body>

    <h2>Validación de Correo Electrónico</h2>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="email">Dirección de correo (@educa.madrid.org):</label><br><br>
        <input type="text" id="email" name="email" size="40" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
        <br><br>

        <input type="submit" value="Validar Email">
    </form>

    <hr>

    <?php
    if (!empty($resultado)) {
        echo $resultado;
    }
    ?>

    <h3>Ejemplos de prueba:</h3>
    <ul>
        <li><code>alumno.1234@educa.madrid.org</code> -> <strong>VÁLIDO</strong></li>
        <li><code>juan-perez@educa.madrid.org</code> -> <strong>VÁLIDO</strong></li>
        <li><code>.alumno@educa.madrid.org</code> -> <strong>INVÁLIDO</strong> (empieza por punto)</li>
        <li><code>alumno..1234@educa.madrid.org</code> -> <strong>INVÁLIDO</strong> (puntos seguidos)</li>
        <li><code>alumno@gmail.com</code> -> <strong>INVÁLIDO</strong> (dominio incorrecto)</li>
    </ul>

</body>
</html>