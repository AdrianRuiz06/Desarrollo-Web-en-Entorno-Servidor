<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Resultado de la Validación</title>
</head>
<body>

    <h2>Resultado de la Validación</h2>

    <?php
    // 1. Comprobamos que el formulario ha sido enviado por POST y que el botón 'enviar' existe
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {

        // Recogemos y limpiamos entradas asegurando que no queden vacíos los campos con trim()
        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
        $apellidos = isset($_POST['apellidos']) ? trim($_POST['apellidos']) : '';
        $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
        $documento = isset($_POST['documento']) ? strtoupper(trim($_POST['documento'])) : '';
        $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';

        $errores = array();

        // -------------------------------------------------------------
        // VALIDACIÓN 1: Nombre y Apellidos (Solo letras, espacios y guiones)
        // -------------------------------------------------------------
        if (empty($nombre) || !preg_match("/^[a-zA-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/u", $nombre)) {
            $errores[] = "El Nombre es obligatorio y solo puede contener letras, espacios y guiones.";
        }

        if (empty($apellidos) || !preg_match("/^[a-zA-zA-ZáéíóúÁÉÍÓÚñÑ\s-]+$/u", $apellidos)) {
            $errores[] = "Los Apellidos son obligatorios y solo pueden contener letras, espacios y guiones.";
        }

        // -------------------------------------------------------------
        // VALIDACIÓN 2: Nombre de Usuario
        // (Comienza por letra, seguido de letras/números, mínimo 6 caracteres)
        // -------------------------------------------------------------
        if (empty($usuario) || !preg_match("/^[a-zA-Z][a-zA-Z0-9]{5,}$/", $usuario)) {
            $errores[] = "El Nombre de usuario debe comenzar por una letra, incluir solo letras/números y tener al menos 6 caracteres.";
        }

        // -------------------------------------------------------------
        // VALIDACIÓN 3 y 4: DNI o NIE con cálculo de letra (Módulo 23)
        // -------------------------------------------------------------
        $letrasDNI = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

        // Evaluamos si es un formato DNI (8 números y 1 letra)
        if (preg_match("/^[0-9]{8}[A-Z]$/", $documento)) {
            
            $numero = substr($documento, 0, 8);
            $letraEnviada = substr($documento, 8, 1);
            $resto = $numero % 23;

            if ($letrasDNI[$resto] !== $letraEnviada) {
                $errores[] = "La letra del DNI no es correcta. Para el número $numero debería ser la letra " . $letrasDNI[$resto] . ".";
            }

        // Evaluamos si es un formato NIE (X, Y o Z + 7 números + 1 letra)
        } elseif (preg_match("/^[XYZ][0-9]{7}[A-Z]$/", $documento)) {
            
            $letraInicial = substr($documento, 0, 1);
            $numeroBase = substr($documento, 1, 7);
            $letraEnviada = substr($documento, 8, 1);

            // Sustitución de X por 0, Y por 1 y Z por 2
            $sustituto = "0";
            if ($letraInicial == 'Y') {
                $sustituto = "1";
            } elseif ($letraInicial == 'Z') {
                $sustituto = "2";
            }

            $numeroCalculo = $sustituto . $numeroBase;
            $resto = $numeroCalculo % 23;

            if ($letrasDNI[$resto] !== $letraEnviada) {
                $errores[] = "La letra final del NIE no es correcta. Debería ser la letra " . $letrasDNI[$resto] . ".";
            }

        } else {
            $errores[] = "El DNI o NIE introducido no tiene un formato correcto (Ejemplo DNI: 12345678Z | NIE: X1234567L).";
        }

        // -------------------------------------------------------------
        // MOSTRAR RESULTADOS
        // -------------------------------------------------------------
        if (count($errores) > 0) {
            echo "<h3 style='color: red;'>Errores encontrados:</h3>";
            echo "<ul style='color: red;'>";
            foreach ($errores as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p style='color: green;'><strong>¡Todos los datos han sido validados correctamente!</strong></p>";
            echo "<ul>";
            echo "<li><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</li>";
            echo "<li><strong>Apellidos:</strong> " . htmlspecialchars($apellidos) . "</li>";
            echo "<li><strong>Usuario:</strong> " . htmlspecialchars($usuario) . "</li>";
            echo "<li><strong>DNI/NIE:</strong> " . htmlspecialchars($documento) . "</li>";
            echo "<li><strong>Teléfono:</strong> " . htmlspecialchars($telefono) . "</li>";
            echo "</ul>";
        }

    } else {
        echo "<p style='color: red;'>Acceso no permitido. Debes enviar el formulario previo.</p>";
    }
    ?>

    <br>
    <a href="formulario.php">Volver al formulario</a>

</body>
</html>