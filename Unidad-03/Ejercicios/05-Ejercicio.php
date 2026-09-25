<?php
/*
  Ejercicio 5: Crea un array que contenga todos los equipos de fútbol de primera 
  división española, al final de la temporada 2015 y los puntos que consiguieron. 
  La lista no hace falta que esté ordenada. A través de ese array, consigue que 
  aparezca un formulario con un cuadro combinado que permita elegir el equipo y, 
  tras hacerlo, se nos indiquen los puntos del equipo y su posición en la clasificación.
*/

// Array asociativo con los equipos y puntos de la temporada 2014/2015 (sin ordenar)
$equipos = [
    "Real Madrid" => 92,
    "Atlético de Madrid" => 78,
    "FC Barcelona" => 94,
    "Valencia CF" => 77,
    "Sevilla FC" => 76,
    "Villarreal CF" => 60,
    "Athletic Club" => 55,
    "Celta de Vigo" => 51,
    "Málaga CF" => 50,
    "RCD Espanyol" => 49,
    "Rayo Vallecano" => 49,
    "Real Sociedad" => 46,
    "Elche CF" => 41,
    "Getafe CF" => 37,
    "Levante UD" => 37,
    "D. La Coruña" => 35,
    "Granada CF" => 35,
    "SD Eibar" => 35,
    "UD Almería" => 32,
    "Córdova CF" => 20
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Clasificación Liga 2015</title>
</head>
<body>

    <h2>Consulta de Puntos y Posición (Liga 2014/2015)</h2>

    <!-- Formulario con cuadro combinado (select) autoprocesado -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="equipo">Selecciona un equipo:</label>
        <select name="equipo" id="equipo" required>
            <option value="">-- Selecciona --</option>
            <?php
            // Generamos las opciones del desplegable recorriendo el array
            foreach ($equipos as $nombreEquipo => $puntos) {
                // Mantenemos seleccionado el equipo que eligió el usuario tras enviar
                $selected = (isset($_POST['equipo']) && $_POST['equipo'] == $nombreEquipo) ? 'selected' : '';
                echo "<option value='$nombreEquipo' $selected>$nombreEquipo</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Consultar">
    </form>

    <hr>

    <?php
    // Si se ha enviado el formulario por POST y se ha elegido un equipo
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['equipo'])) {

        $equipoSeleccionado = $_POST['equipo'];

        if (array_key_exists($equipoSeleccionado, $equipos)) {

            // Puntos del equipo elegido
            $puntosEquipo = $equipos[$equipoSeleccionado];

            // Para saber la posición, creamos una copia ordenada de mayor a menor punto
            $clasificacion = $equipos;
            arsort($clasificacion); // arsort ordena manteniendo las claves (nombres)

            // Buscamos la posición buscando el índice tras ordenar
            $posicion = 1;
            foreach ($clasificacion as $nombre => $pts) {
                if ($nombre == $equipoSeleccionado) {
                    break; // Cuando encontramos nuestro equipo, salimos del bucle
                }
                $posicion++;
            }

            // Mostramos los resultados
            echo "<h3>Resultado para: <em>$equipoSeleccionado</em></h3>";
            echo "<p><strong>Puntos obtenidos:</strong> $puntosEquipo pts</p>";
            echo "<p><strong>Posición en la clasificación:</strong> {$posicion}º puesto</p>";

        }
    }
    ?>

</body>
</html>