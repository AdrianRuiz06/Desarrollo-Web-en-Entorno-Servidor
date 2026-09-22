<?php

function calcularSalario(int $edad, int $salario):float{
   //Si el salario es menor de 1000
                  if($salario<1000){
                     //menores de 30 cobran 1100
                     if($edad<30) $salario=1100;
                     //de 30 a 45 sube 3%
                     else if($edad<=45) $salario*=1.3;
                     //mayores de 45 sube 15%
                     else $salario*=1.15;
                  }
                  //salario entre 1000 y 2000
                  else if($salario<=2000){
                     //si la edad es mayor de 45 sube 3%
                     if($edad>45) $salario*=1.03;
                     //si la edad es menor sube 10%
                     else $salario*=1.1;
                  }  
                  return $salario;
} 

?>