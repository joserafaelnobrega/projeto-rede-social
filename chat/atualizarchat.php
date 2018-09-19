<?php require_once(__DIR__ . "/../classes/modelo/Chat.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/ChatDAO.class.php"); ?>

<?php

$chat_atualizado = new ChatDAO;

    
    $id = $_GET['id'];



 $mensagem= $chat_atualizado->exibir(26); //retorna um objeto do tipo Chat com um texto setado $_GET['id']

 $mensagem_atualizada  =$mensagem->getTexto(); // atribui a mensagem a uma variavel;

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat</title>
</head>
<body>
<div   id="atualizado" style=" border:4px  ;
        position: relative;
        left: 8px;
        bottom: 20px;
        width: 95%;
        height: 100% 
        " ><?=$mensagem_atualizada;?> </div>
</body>
</html>
 