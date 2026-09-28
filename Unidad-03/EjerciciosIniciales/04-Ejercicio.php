<?php
/*
Ejercicio 5. Crea un formulario en el que se pida un número entero positivo. Después, haz que la página escriba tantos asteriscos (en la misma página) como el número que se haya escrito . Si se escribe 5,se mostrarán 5 asteriscos. 
*/
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//comprobamos si la pagina recibe datos
    if(isset($_GET["enviar"])){
		if(isset($_GET["asteriscos"]) && !empty($_GET["asteriscos"]))
			$asteriscos=$_GET["asteriscos"];
            if(is_numeric($asteriscos) && $asteriscos>=1) {
			   //los datos son correctos, escribimos los asteriscos
			   $error = false;
            } else {
               //los datos no son correctos
			   $error = true;
			   
            }
         }//fi enviar
}// fi Request_method
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Ejercicio 4</title>
   </head>
   <body>
      <?php
	     if(isset($error) && $error)
		 {
	  ?>
	        <p style="color:red;">Has introducido datos incorrectos</p>
      <?php	  
		 }
         else if(isset($error))
         {
	        echo "<p>";    
			 for($i=0;$i<$asteriscos;$i++)
			 {
				 echo "*";
			 }
			echo "</p>"; 
		 } 			 
	  ?>
	  <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="get">
         <label for="asteriscos" id="lblAsteriscos">Escriba el número de asteriscos</label>
         <input type="number" id="asteriscos" name="asteriscos" min="1" required>
         <input type="submit" id="enviar" name="enviar" value="Pintar asteriscos">
      </form>
   </body>
</html>