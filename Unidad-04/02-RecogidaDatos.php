<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["enviar"]))
    {
        if(isset($_POST["usuario"]) && !empty($_POST["usuario"]))
        {
            $usuario = $_POST["usuario"];
        }
        if(isset($_POST["contrasenia"]) && !empty($_POST["contrasenia"]))
        {
            $contrasenia = $_POST["contrasenia"];
        }
    }// enviar
}// request_method

$usuario_db = "pepito";
$pass_db = password_hash("1234", PASSWORD_BCRYPT);

echo "Password_hash: ".$pass_db."<br>";

if($usuario === $usuario_db && password_verify($contrasenia,$pass_db))
    echo "Usuario autenticado";
else
    echo "Usuario desconocido";
?>