<?php 

include_once "../class/classGrupoUsuario.php";
include_once "../dao/GrupoUsuarioDAO.php";


$cod = $_POST['codigo'];
$sigle = $_POST['sigla'];
$descricao = $_POST['descricao'];

$ClassGrupoUsuario = new ClassGrupoUsuario();

$ClassGrupoUsuario->setCod($cod);
$ClassGrupoUsuario->setSigla($sigle);
$ClassGrupoUsuario->setDesc($descricao);

$GrupoUsuario = new ClassGrupoUsuarioDAO();
$GrupoUsuario->insertGrupoUsuario($ClassGrupoUsuario);

?>