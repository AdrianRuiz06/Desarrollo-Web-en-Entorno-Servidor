<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Validación de Datos</title>
</head>
<body>

    <h2>Resultado de la Validación</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $usuario = trim($_POST['usuario']);
        $documento = strtoupper(trim($_POST['documento']));
        $telefono = trim($_POST['telefono']);

        $errores = [];

        // 1. Validación de Nombre y Apellidos (Solo letras, espacios y guiones)
        // /^[a-zA-záéíóúÁÉÍÓÚñÑ\s-]+$/u
        if (!preg_match("/^[a-zA-záéíóúÁÉÍÓÚñÑ\s-]+$/u", $nombre)) {
            $errores[] = "El Nombre solo puede contener letras, espacios y guiones.";
        }
        if (!preg_match("/^[a-zA-záéíóúÁÉÍÓÚñÑ\s-]+$/u", $apellidos)) {
            $errores[] = "Los Apellidos solo pueden contener letras, espacios y guiones.";
        }

        // 2. Validación de Nombre de usuario (Empieza por letra, seguido de letras/números, mínimo 6 caracteres)
        if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]{5,}$/", $usuario)) {
            $errores[] = "El Nombre de usuario debe comenzar por una letra, contener solo letras y números, y tener al menos 6 caracteres.";
        }

        // 3 y 4. Validación de DNI o NIE
        $letrasDNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

        // Comprobamos formato básico: DNI (8 números + 1 letra) o NIE (X/Y/Z + 7 números + 1 letra)
        if (preg_match("/^[0-9]{8}[A-Z]$/", $documento)) {
            // Es un DNI
            $numero = substr($documento, 0, 8);
            $letraRecibida = substr($documento, 8, 1);
            $resto = $numero % 23;

            if ($letrasDNI[$resto] !== $letraRecibida) {
                $errores[] = "La letra del DNI no es correcta. Debería ser: " . $letrasDNI[$resto];
            }

        } elseif (preg_match("/^[XYZ][0-9]{7}[A-Z]$/", $documento)) {
            // Es un NIE
            $prefijo = substr($documento, 0, 1);
            $numeroBase = substr($documento, 1, 7);
            $letraRecibida = substr($documento, 8, 1);

            // Sustituir la letra inicial por 0, 1 o 2
            if ($prefijo == 'X') $sustituto = '0';
            elseif ($prefijo == 'Y') $sustituto = '1';
            elseif ($prefijo == 'Z') $sustituto = '2';

            $numeroCalculo = $sustituto . $numeroBase;
            $resto = $numeroCalculo % 23;

            if ($letrasDNI[$resto] !== $letraRecibida) {
                $errores[] = "La letra del NIE no es correcta. Debería ser: " . $letrasDNI[$resto];
            }

        } else {
            $errores[] = "El DNI o NIE no tiene un formato válido (Ej. DNI: 12345678Z | NIE: X1234567L).";
        }

        // Muestra de Resultados
        if (count($errores) > 0) {
            echo "<ul style='color: red;'>";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            echo "<p style='color: green;'><strong>¡Todos los datos introducidos son válidos!</strong></p>";
            echo "<ul>";
            echo "<li><strong>Nombre:</strong> $nombre</li>";
            echo "<li><strong>Apellidos:</strong> $apellidos</li>";
            echo "<li><strong>Usuario:</strong> $usuario</li>";
            echo "<li><strong>Documento:</strong> $documento</li>";
            echo "<li><strong>Teléfono:</strong> $telefono</li>";
            echo "</ul>";
        }

    } else {
        echo "<p style='color: red;'>Acceso no permitido.</p>";
    }
    ?>

    <br>
    <a href="formulario.php">Volver al formulario</a>

</body>
</html>