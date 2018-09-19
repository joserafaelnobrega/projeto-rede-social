<?php require_once(__DIR__ . "/../classes/modelo/Chat.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/ChatDAO.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/modelo/Usuario.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/UsuarioDAO.class.php"); ?>

<?php

session_start();

$nome = $_SESSION['nome'];

$chat = new Chat;

$dao = new ChatDAO();

$idchat =$_SESSION['idchat'];

    $texto = $dao->exibir($_SESSION['idchat']);//pega a mensagem e retorna um objeto
    $mensagem = $texto->getTexto();//recebe a mensagem pq $texto é um objeto

    if (isset($_GET['x']) ) {
            if($_GET['x'] != ''){    
            $chat->setTexto($mensagem .= "<br/>".$nome." diz::".$_GET['x']);//formatar a mensagem 

                   
            $chat->setId($idchat);
                   
   

            $dao->update($chat);

            }
   }



 