<?php
/*
Ejercicio 2. Lee el nombre, los apellidos, el salario (número con decimales) y la edad de una persona (un número) en un formulario. Recoge los datos y con ellos calcula un nuevo salario para esa person a en base a esta situación: 
    • Si el salario es mayor de 2 000 euros, no cambiará 
    • Si el salario está entre 1000 y 2000: 
        ◦ Si además la edad es mayor de 45 años, se sube un 3% 
        ◦ Si la edad es menor de 45 o igual, se sube un 10% 
    • Si el salario es menor de 1000:
        ◦ Los menores de 30 años cobrarán, a partir de ahora , exactamente 1100 euros 
        ◦ De 30 a 45 años, sube un 3% 
        ◦ A los mayores de 45 años, sube un I5%
*/
require_once("Funciones.php");
require_once("ValidarDatos.php");


        
 
      ?>

<!DOCTYPE html >
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 2</title>
   </head>
   <body>
      <?php if(isset($datosOK) && $datosOK==true){ ?>
      <p><?= $nombre; ?>, <?= $apellidos; ?>, tu salario será de <?= $salario; ?> €</p>
      <?php exit; }  ?>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
         <label for="nombre">Nombre </label>
         <input type="text" name="nombre"><br>
         <label for="apellidos">Apellidos</label>
         <input type="text" name="apellidos"><br>
         <label for="edad">Edad </label>
         <input type="number" name="edad"><br>
         <label for="salario">Salario </label>
         <input type="number" name="salario"><br>
         <input type="submit" name="enviar">
      </form>
   </body>
</html>