<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Rtema.class.php");

class RtemaDAO{

public function montarchat(Rtema $chat){


  
    
    $sql = "INSERT INTO tb_def_tema (dte_tem_id,dte_usu_id,dte_cha_id) VALUES  ('{$chat->getTemaId()}','{$chat->getUsuarioId()}','{$chat->getChatId()}') ";
try {
    Conexao::get()->exec($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

}


    public function chatdisponivel($numero_chat){

        $sql = "SELECT dte_cha_id FROM tb_def_tema";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $chats = array();
        foreach($result as $row){
            $chat = new Rtema;
            $chat->setChatId($row['dte_cha_id']);
            array_push($chats, $chat);
        }
            $contador = 0;
        
        foreach($chats as $tentativa){
            
             if($tentativa->getChatId()  == $numero_chat){
        
                $contador++;
        
            }
        }    
        if($contador<5){
            return true;
        }else{
            return false;
        }
    }


    public function limparchat($id){

        $sql = "UPDATE tb_def_tema SET dte_usu_id = '7',dte_cha_id = '17',dte_tem_id ='1'where dte_cha_id = $id";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }


}