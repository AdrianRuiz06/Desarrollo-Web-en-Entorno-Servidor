<?php
/*
  1. Imagen aleatoria: 
  Crea una página PHP que muestre de forma aleatoria dos imágenes. 
  Es decir, se muestra una u otra de forma aleatoria e impredecible.
*/

?>


<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset = "UTF-8">
            <title>Unidad 03 - Ejercicio 1</title>
        </head>    
        <body>
            <h1>Unidad 03 - Ejercicio 1</h1>
            <h2>Imagen aleatoria</h2>
            <?php
                $imagen = rand(1,2);
                if ($imagen == 1) {
                    echo '<img src="https://picsum.photos/id/237/200/300" alt="Imagen 1">';
                } else {
                    echo '<img src="https://picsum.photos/id/238/200/300" alt="Imagen 2">';
                }
            ?>
        </body>
    </html>

    