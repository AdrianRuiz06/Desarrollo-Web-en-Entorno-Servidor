<?php
/*
  Ejercicio 9: Crea un formulario en el que se pida un texto y después de enviar 
  su contenido se nos indique si es un palíndromo. 
  Ejemplos de palíndromos: 
  - dabale arroz a la zorra el abad
  - se verlas al reves
*/

// Inicializamos la variable donde guardaremos el mensaje de resultado
$resultado = "";

// Comprobamos si el formulario se ha enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos la cadena enviada por el formulario
    $textoOriginal = isset($_POST['texto']) ? $_POST['texto'] : '';

    if (!empty(trim($textoOriginal))) {

        // 1. Pasamos el texto a minúsculas
        $textoMinusculas = mb_strtolower($textoOriginal, 'UTF-8');

        // 2. Eliminamos los espacios en blanco del texto
        $textoLimpio = str_replace(' ', '', $textoMinusculas);

        // 3. Invertimos la cadena de texto limpia
        // Para asegurar la inversión correcta con caracteres UTF-8 (tildes, ñ) invertimos la cadena
        $textoInvertido = "";
        $longitud = mb_strlen($textoLimpio, 'UTF-8');
        for ($i = $longitud - 1; $i >= 0; $i--) {
            $textoInvertido .= mb_substr($textoLimpio, $i, 1, 'UTF-8');
        }

        // 4. Comprobamos si la frase limpia es igual a la invertida
        if ($textoLimpio === $textoInvertido) {
            $resultado = "<p style='color: green;'><strong>\"$textoOriginal\"</strong> SÍ es un palíndromo.</p>";
        } else {
            $resultado = "<p style='color: red;'><strong>\"$textoOriginal\"</strong> NO es un palíndromo.</p>";
        }

    } else {
        $resultado = "<p style='color: red;'>Por favor, introduce un texto válido.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 - Comprobador de Palíndromos</title>
</head>
<body>

    <h2>Comprobador de Palíndromos</h2>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="texto">Introduce una frase o palabra:</label><br><br>
        <input type="text" id="texto" name="texto" size="50" value="<?php echo isset($_POST['texto']) ? htmlspecialchars($_POST['texto']) : ''; ?>" required>
        <br><br>

        <input type="submit" value="Comprobar Palíndromo">
    </form>

    <hr>

    <!-- Muestra de resultados -->
    <?php
    if (!empty($resultado)) {
        echo $resultado;
    }
    ?>

</body>
</html>