<?php require_once(__DIR__ . "/../classes/modelo/Chat.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/ChatDAO.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/modelo/Rtema.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/RtemaDAO.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/modelo/Usuario.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/UsuarioDAO.class.php"); ?>


<?php



$nome_do_chat = $_GET['nome'];
$descricao_chat_novo = $_GET['des'];

session_start();

$idchat;

$id_usuario = $_SESSION['id'];

$chatdao = new ChatDAO;
$comando_dao = new RtemaDAO;
$comando = new Rtema;


$id_dos_chats_ativos = $chatdao->chatid(); //pega id de todos os chats q existem 
//falta verificar qual o retorno de chatdao->chaid( ) quando nao existe nada cadastrado
$chats_criados = array();  //array para por os chats




foreach($id_dos_chats_ativos as $id_dos_chats_ativos){

            if($id_dos_chats_ativos !=null){

                array_push(  $chats_criados , $id_dos_chats_ativos->getId()     );   //coloca todos os objetos em um array
                
            }

}
$numero_de_chats_criados = count($chats_criados); //numero de chats criados
$flag = true;


if($numero_de_chats_criados == 0){
  $chat_novo = new Chat;
  $chat_novo->setNome($nome_do_chat);
  $chat_novo->setDescricao($descricao_chat_novo);
  $chatdao->criar_chat($chat_novo); //se nao existirem chats cria um


  

  $comando->setTemaId(1);
  $comando->setChatId( $chatdao->pegar_id_chat_novo($nome_do_chat) );
  $idchat = $chatdao->pegar_id_chat_novo($nome_do_chat);
  $comando->setUsuarioId($id_usuario);
  $comando_dao->montarchat($comando); //gerencia colocando o usuario em um chat

}else{

    for($i = $numero_de_chats_criados-1; $i>-1; $i--){ //verifica se existe mais de 6 pessoas no chat

        if(  $comando_dao->chatdisponivel($chats_criados[$i])     ){ //se nao existir mais de 6 pessoa retorna true gerencia um usuario em um chat
            

            $comando->setTemaId(1);
            $comando->setChatId($chats_criados[$i]);
            $idchat = $chats_criados[$i];
            $comando->setUsuarioId($id_usuario);
            $comando_dao->montarchat($comando);
            $flag = false;
            break;
        }



    }

    if($flag){ //se a flag retornar falso é pq o usuario ja tem um chat se retornar true cria um chat e coloca ele no chat
    $chat_novo = new Chat;
    $chat_novo->setNome($nome_do_chat);
    $chat_novo->setDescricao($descricao_chat_novo);
    $chatdao->criar_chat($chat_novo); //se nao existirem chats cria um



    $comando->setTemaId(1);
    $comando->setChatId( $chatdao->pegar_id_chat_novo()  );
    $idchat = $chatdao->pegar_id_chat_novo() ;
    $comando->setUsuarioId($id_usuario);
    $comando_dao->montarchat($comando); //gerencia colocando o usuario em um chat

    }



}

   $_SESSION['idchat'] = $idchat;     
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <p>dsdsd</p>
  
  <?=$comando_dao->chatdisponivel($chats_criados[$i]);?> 
</body>
</html>


