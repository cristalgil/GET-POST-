<?php
$nombre = $_GET["nombre"];
//$nombre = $_POST["nombre"];
$email = $_GET["email"];
//$email = $_POST["email"];
$telefono = $_GET["telefono"];
//$telefono = $_POST["telefono"];
$sitio = $_GET["sitio"];
//$sitio = $_POST["sitio"];
$asunto = $_GET["asunto"];
//$asunto = $_POST["asunto"];
$mensaje = $_GET["mensaje"];
//$mensaje = $_POST["mensaje"];


echo $nombre." ". $email." ". $telefono."".$sitio." ". $asunto." ". $mensaje;

?>