
<?php require_once(__DIR__ . "/./classes/dao/UsuarioDAO.class.php"); ?>
<?php require_once(__DIR__ . "/./classes/modelo/Usuario.class.php"); ?>

<?php

session_start();


$usulogar = new Usuario;

$dao = new UsuarioDAO;


$mensagem = 0;

$contas = $dao->registrados();

foreach($contas as $usulogar){

    if($usulogar->getLogin() == $_POST["logar"] &&  $usulogar->getSenha() == $_POST["pwd"]){
    $id = $usulogar->getId();
    $mensagem += 1;

   }
}

if($mensagem == 1){
    $_SESSION['id'] = $id;
    $_SESSION['logado'] = true;
    header('location: /rede-social/chat/');
}else{
    $_SESSION['logado'] = false;
    $_SESSION['mensagem'] = "erro ao logar: login ou senha incorretos";
    header('location: /rede-social/');
}




