<?php
require 'conexion.php';
require 'usuario.php';
$usuario = $_POST["txtusuario"];
$pswd = $_POST["txtPaswd"];

$resultado = usuario::login($usuario,$pswd);
header('Content-Type: aplication/json');
return $resultado;