<?php
   //Ejercicio 1. Crea un a página PHP que muestre de forma aleatoria dos imágenes. Es decir,se muestra una u otra de forma aleatoria e impredecible. 
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8" >
      <title>Ejercicio 1</title>
   </head>
   <body>
      <?php
         $numero=mt_rand(0,1); //calculo el número random para cargar la imagen
         if($numero==0){
      ?>
         <img height="500" src="img/imagen1.jpg">
      <?php } else { ?>
         <img height="500" src="img/imagen2.jpg">
      <?php } ?>
   </body>
</html>