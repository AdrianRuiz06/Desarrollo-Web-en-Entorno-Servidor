<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Tabla del Código ASCII</title>
    <style>
        td {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <table>
        <?php for ($i = 0; $i <= 255; $i++): ?>

            <!-- Abrimos fila <tr> al inicio de cada bloque de 16 columnas -->
            <?php if ($i % 16 == 0): ?>
                <tr>
            <?php endif; ?>

            <td>
                <small><?= $i ?></small><br>
                <strong><?= htmlspecialchars(chr($i)) ?></strong>
            </td>

            <!-- Cerramos fila </tr> al llegar a la última columna de la fila -->
            <?php if ($i % 16 == 15): ?>
                </tr>
            <?php endif; ?>

        <?php endfor; ?>
    </table>

</body>
</html>