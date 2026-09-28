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
    <title>Ejercicio 4 - Tienda Online</title>
</head>
<body>

    <h2>Tienda Online - Selección de Artículos</h2>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Selecciona los productos que deseas comprar:</p>

        <?php
        foreach ($articulos as $nombre => $precio) {
            echo "<label>";
            echo "<input type='checkbox' name='seleccionados[]' value='$nombre'> ";
            echo "$nombre - " . number_format($precio, 2, ',', '.') . " €";
            echo "</label><br><br>";
        }
        ?>

        <input type="submit" value="Enviar / Calcular Total">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['seleccionados']) && !empty($_POST['seleccionados'])) {
            
            $seleccionados = $_POST['seleccionados'];
            $total = 0;

            echo "<h3>Detalle de la compra:</h3>";
            echo "<ul>";

            foreach ($seleccionados as $item) {
                if (array_key_exists($item, $articulos)) {
                    $precioItem = $articulos[$item];
                    $total += $precioItem;
                    echo "<li><strong>$item</strong>: " . number_format($precioItem, 2, ',', '.') . " €</li>";
                }
            }

            echo "</ul>";
            echo "<h3>Total a pagar: " . number_format($total, 2, ',', '.') . " €</h3>";

        } else {
            echo "<p style='color: red;'>No has seleccionado ningún artículo de la lista.</p>";
        }
    }
    ?>

</body>
</html>