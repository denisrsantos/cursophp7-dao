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
// $usuario = new Usuario();
// $usuario->login("denis","12345");

// echo $usuario;

// Criando novo usuario
/*$aluno = new Usuario("aluno","7541");

$aluno->insert();

echo $aluno;
*/

/*alterar um usario
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor","7845451");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->delete();
echo $usuario;

?>