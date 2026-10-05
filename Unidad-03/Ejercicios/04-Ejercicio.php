<?php
/*
  Ejercicio 4: Crea una página PHP que permita elegir una serie de artículos de una 
  tienda online mediante checkbox. Cada checkbox permite seleccionar un artículo, 
  en el que se indica su precio. Tras pulsar el botón Enviar del formulario, se nos 
  indicará el detalle de la compra, así como el total de lo que hemos comprado.
*/

// Creamos un array asociativo con los artículos y sus precios
$articulos = [
    "Ratón óptico" => 15.50,
    "Teclado mecánico" => 45.00,
    "Monitor 24 pulgadas" => 120.99,
    "Auriculares Gaming" => 35.25,
    "Alfombrilla XL" => 12.00
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Tienda Online</title>
</head>
<body>

    <h2>Tienda Online - Selección de Artículos</h2>

    <!-- Formulario autoprocesado por POST -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Selecciona los productos que deseas comprar:</p>

        <?php foreach ($articulos as $nombre => $precio) { ?>
            <label>
                <input type="checkbox" name="seleccionados[]" value="<?= $nombre ?>">
                <?= $nombre ?> - <?= number_format($precio, 2, ',', '.') ?> €
            </label>
            <br><br>
        <?php } ?>

        <input type="submit" value="Enviar / Calcular Total">
    </form>

    <hr>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

        <?php if (isset($_POST['seleccionados']) && !empty($_POST['seleccionados'])) { ?>
            
            <?php
            $seleccionados = $_POST['seleccionados'];
            $total = 0;
            ?>

            <h3>Detalle de la compra:</h3>
            <ul>
                <?php foreach ($seleccionados as $item) { ?>
                    <?php if (array_key_exists($item, $articulos)) { ?>
                        <?php
                        $precioItem = $articulos[$item];
                        $total += $precioItem;
                        ?>
                        <li>
                            <strong><?= $item ?></strong>: <?= number_format($precioItem, 2, ',', '.') ?> €
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>

            <h3>Total a pagar: <?= number_format($total, 2, ',', '.') ?> €</h3>

        <?php } else { ?>

            <p style="color: red;">No has seleccionado ningún artículo de la lista.</p>

        <?php } ?>

    <?php } ?>

</body>
</html>