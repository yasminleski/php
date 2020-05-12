<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = &_POST["senha"];

include("classUsuario.php");

$usuario = new Usuario();

$usuario->addusuario($nome, $email, $login, $senha);

print_r($usuario);
?>
