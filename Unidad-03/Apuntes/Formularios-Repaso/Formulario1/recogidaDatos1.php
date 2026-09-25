<?php
if(isset ($_GET["nombre"]) && !empty($_GET["nombre"]))
    echo "Me has pasado un nombre";
else
    echo "Me has hacekado";
?>