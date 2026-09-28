<?php
/*
Ejercicio 3. Crea un formulario que lea un número , después un mensaje nos indicará si era realmente o no un número y, si es un número , si tenía decimales. 
*/
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	if(isset($_GET["enviar"]))
	{
		if(isset($_GET["number"]) && !empty($_GET["number"])) // Existe y tiene contenido
		{
			$numero = $_GET["number"];
			// Comprobamos si es un número
			if(is_numeric($numero)) 
			{
				$esNumero = true;
				// Hacemos la resta entre el número recibido
				// y el número sin decimales
				$resto = $numero - (int)$numero;
				if($resto==0) $esEntero = true;
				else $esEntero = false;
			}
			else $esNumero = false;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 3</title>
   </head>
   <body>
      <form action="<?= $_SERVER["PHP_SELF"];?>" method="get">
         <label for="number" id="lblNumber">Escriba un número </label>
         <input type="text" id="number" name="number" required>
         <input type="submit" id="enviar" name="enviar" value="Enviar">
      </form>
	  <?php
		if(isset($esNumero) && $esNumero) 
		{
	  ?>
	  <p style="color:green;">El dato introducido es un número</p>
	  <?php 	
	       if(isset($esEntero) && $esEntero)
		   {
		?>
			<p style="color:blue;">El dato introducido es entero</p>
        <?php  		
		   }
		   else
		   {
		?>
		    <p style="color:blue;">El dato introducido es decimal</p> 
        <?php		
		   }   
		} 
		else if(isset($esNumero))
		{	
	  ?>		
	  <p style="color:red;">El dato introducido NO es un número</p>	
	  <?php		
		}	
	  ?>
   </body>
</html>