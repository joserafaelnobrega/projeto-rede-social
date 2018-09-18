<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Chat.class.php");

class ChatDAO{

    public function exibir($id){
        $sql = "SELECT cha_texto FROM tb_chat WHERE cha_id =$id   ";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        $chat = new Chat();
        $chat->setTexto($row['cha_texto']);
        return $chat;

    }


    public function pegar_id_chat_novo(){
        $sql = "SELECT cha_id FROM tb_chat ";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
    return  $result = $statement->fetch();
    
    }


    public function chatid(){ //retorna todos os chats existentes
        $sql = "SELECT cha_id FROM tb_chat ";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $chats = array();
        foreach($result as $row){
            $chat = new Usuario;
            $chat->setId($row['cha_id']);
            array_push($chats, $chat);
        }
        return $chats;

    }


    
    
    public function criar_chat(Chat $chat) {
        $sql = "INSERT INTO tb_chat
            (cha_nome,cha_descricao) 
            VALUES 
            ( '{$chat->getNome()}','{$chat->getDescricao()}')";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function dado_chat($id){


        $sql = "SELECT cha_nome,cha_descricao from tb_chat where cha_id='$id' ";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();

        $chat  = new chat;
        $chat->setNome($row['cha_nome']);
        $chat->setDescricao($row['cha_descricao']);
        return $chat;

    }


        
    public function update(Chat $chat) {
        
        $sql = "UPDATE tb_chat SET 
            cha_texto='{$chat->getTexto()}' 
            WHERE cha_id= '{$chat->getId()}' ";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    
    public function remove($id) {
        $sql = "DELETE FROM tb_chat WHERE chat_id=$id";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

}