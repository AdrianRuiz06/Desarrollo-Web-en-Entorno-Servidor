<?php
/*
  Ejercicio 8: Crea una página web con un formulario que se encarga de encriptar 
  o desencriptar un texto (<input type="radio">) dependiendo de lo que elijamos. 
  La encriptación se basa en sumar el número elegido (que debe de estar entre 1 y 99) 
  a cada carácter del texto. El desencriptado se hace igual, pero restando. Hay que 
  validar que el texto elegido tenga más de 10 caracteres (de otro modo se informa 
  del error) y que la clave sea un número entre 1 y 99. 
  Nota: Es muy interesante usar las funciones ord y chr.
*/

// Variables para manejar mensajes de error y el resultado final
$errores = [];
$resultado = "";

// Comprobamos si se ha enviado el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos las entradas del formulario
    $texto = isset($_POST['texto']) ? $_POST['texto'] : '';
    $clave = isset($_POST['clave']) ? (int)$_POST['clave'] : 0;
    $accion = isset($_POST['accion']) ? $_POST['accion'] : 'encriptar';

    // 1. Validar que el texto tenga más de 10 caracteres
    if (strlen($texto) <= 10) {
        $errores[] = "El texto debe tener más de 10 caracteres.";
    }

    // 2. Validar que la clave sea un número entre 1 y 99
    if ($clave < 1 || $clave > 99) {
        $errores[] = "La clave debe ser un número entero entre 1 y 99.";
    }

    // Si no hay errores, procedemos a encriptar o desencriptar
    if (empty($errores)) {

        // Recorremos el texto carácter a carácter
        for ($i = 0; $i < strlen($texto); $i++) {
            
            // Obtenemos el código ASCII del carácter actual con ord()
            $codigoAscii = ord($texto[$i]);

            // Sumamos o restamos según la opción elegida con los radio buttons
            if ($accion == "encriptar") {
                $nuevoCodigo = $codigoAscii + $clave;
            } else {
                $nuevoCodigo = $codigoAscii - $clave;
            }

            // Convertimos el nuevo código ASCII de vuelta a carácter con chr()
            $resultado .= chr($nuevoCodigo);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Encriptador / Desencriptador</title>
</head>
<body>

    <h2>Encriptador / Desencriptador ASCII</h2>

    <!-- Formulario autoprocesado -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <label for="texto">Texto a procesar (más de 10 caracteres):</label><br>
        <textarea id="texto" name="texto" rows="4" cols="50" required><?php echo isset($_POST['texto']) ? htmlspecialchars($_POST['texto']) : ''; ?></textarea>
        <br><br>

        <label for="clave">Clave o desplazamiento (1 - 99):</label><br>
        <input type="number" id="clave" name="clave" min="1" max="99" value="<?php echo isset($_POST['clave']) ? htmlspecialchars($_POST['clave']) : ''; ?>" required>
        <br><br>

        <label>Operación:</label><br>
        <input type="radio" id="enc" name="accion" value="encriptar" <?php echo (!isset($_POST['accion']) || $_POST['accion'] == 'encriptar') ? 'checked' : ''; ?>>
        <label for="enc">Encriptar (sumar)</label><br>

        <input type="radio" id="des" name="accion" value="desencriptar" <?php echo (isset($_POST['accion']) && $_POST['accion'] == 'desencriptar') ? 'checked' : ''; ?>>
        <label for="des">Desencriptar (restar)</label>
        <br><br>

        <input type="submit" value="Procesar Texto">
    </form>

    <hr>

    <!-- Muestra de errores -->
    <?php if (!empty($errores)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errores as $err): ?>
                    <li><?php echo $err; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Muestra de resultado -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errores)): ?>
        <h3>Resultado final:</h3>
        <p style="font-family: monospace; font-size: 18px; background-color: #f0f0f0; padding: 10px;">
            <?php echo htmlspecialchars($resultado); ?>
        </p>
    <?php endif; ?>

</body>
</html>