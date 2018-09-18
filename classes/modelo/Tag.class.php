<?php


class Tag{

    private $id;
    private $tagUsuarioId;
    private $tagChatId;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id);{
        $this->id = $id;
    }
    
    public function getTagUsuario(){
        return $this->tagUsuarioId;
    }       
    
    public function setTagUsuario(TagUsuario $tagUsuarioId){
        $this->tagUsuarioId =$tagUsuarioId;
    
    }

    public function getTagChat(){
        return $this->tagChatId;
    }
    
    public function setTagChat(TagChat $tagChatId){
        $this->tagChatId = $tagChatId;
    }

}


    

}