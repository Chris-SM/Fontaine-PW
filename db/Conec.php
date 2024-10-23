<?php 
$LocalHost = "Localhost";
$Usurio = "root";
$Senha = "root";
$Bd = "teste";

$conection = new mysqli($LocalHost, $Usurio, $Senha, $Bd);

if($conection->connect_error)
{
    echo "<script>alert('Não deu Paizão')</script>";
}
?>