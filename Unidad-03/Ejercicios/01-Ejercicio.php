<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Tabla del 1 al 1000</title>
    <style>

        td {
            border: 1px solid #333;
        }

    </style>
</head>
<body>
    <table>
        <?php for ($i = 1; $i <= 1000; $i++): ?>
            
            <!-- Abrimos fila en los múltiplos de 5 + 1 (1, 6, 11...) -->
            <?php if ($i % 5 == 1): ?>
                <tr>
            <?php endif; ?>

            <td><?= $i ?></td>

            <!-- Cerramos fila cada 5 elementos -->
            <?php if ($i % 5 == 0): ?>
                </tr>
            <?php endif; ?>

        <?php endfor; ?>
    </table>

</body>
</html>