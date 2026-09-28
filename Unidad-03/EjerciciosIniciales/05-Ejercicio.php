<?php
/*
Ejercicio 6. Crea un formulario que pida dos números. Ambos tienen que valer 1 o más, de no ser así se indica el error. El resultado será una tabla (se mostrará en la misma página del formulario) con el tamaño indicado 
*/
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//comprobamos si la página recibe los parámetros para dibujar la tabla
    if(isset($_GET["enviar"])){
		if(isset($_GET["columnas"]) && !empty($_GET["columnas"]) &&
           isset($_GET["filas"]) && !empty($_GET["filas"])){
			   $filas=$_GET["filas"];
			   $columnas=$_GET["columnas"];
			   if(is_numeric($filas) && is_numeric($columnas) &&
                  $filas>1 && $columnas >1 ) 
			   {
				   $error = false;
               } else {
				   $error = true;
               }// fi numeric
         }//fi filas y columnas
    }//fi enviar		 
}//fi request_method
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 5</title> 
   </head>
   <body>
      <?php
	    if(isset($error) && $error)
		{
	  ?>
	  <p style="color:red;">Los datos no son correctos, no puedo hacer la tabla</p>
      <?php	  
		}	
	  ?>
      <form action="<?= $_SERVER["PHP_SELF"];?>" method="get">
         <label for="columnas" id="lblColumnas">Escriba el número de columnas </label>
         <input type="number" id="columnas" name="columnas" ><br/>
         <label for="filas" id="lblFilas">Escriba el número de filas </label>
         <input type="number" id="filas" name="filas" ><br/>
         <input type="submit" id="enviar" name="enviar">
      </form>
	  <?php
	     if(isset($error) && ($error==false))
		 {
			 //los datos son correctos,  dibujamos la tabla
			 echo '<table>';
			 for ($i=1;$i<=$filas;$i++): //pinta las filas
				 echo '<tr>';
				 for ($j=1;$j<=$columnas;$j++){ //pinta las columnas
					 //en cada celda escribimos un espacio en blanco 
					 // para asegurar que se muestre la tabla
					 echo '<td style="border: 1px solid black;">&nbsp;</td>';
				 }//for columnas
                 echo '</tr>';
			  endfor;//for filas
              echo '</table>';
		 }	 	 
	  ?>
   </body>
</html>