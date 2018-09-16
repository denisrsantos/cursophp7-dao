<?php

require_once("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//============================================================

//Carrega todos os usuarios
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//============================================================

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//============================================================
//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::busca("den");

//echo json_encode($search);

//============================================================

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("denis","12345");

echo $usuario;

?>