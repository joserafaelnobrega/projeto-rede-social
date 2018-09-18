<?php require_once(__DIR__ . "/./classes/dao/UsuarioDAO.class.php"); ?>
<?php require_once(__DIR__ . "/./classes/modelo/Usuario.class.php"); ?>
<?php require_once(__DIR__ . "/./classes/modelo/Sexo.class.php"); ?>

<?php

$usuario = new Usuario;

$sexo = new Sexo;

$usudao = new UsuarioDAO;

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);
$usuario->setDescricao($_POST['descricao']);
$usuario->setNome($_POST['nome']);


$usudao->registra($usuario);

header('location: /rede-social/chat/index.php');
 