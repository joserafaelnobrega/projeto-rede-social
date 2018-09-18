<?php
class Rtag{

    private $id;
    private $tagId;
    private $chatId;
    private $usuarioId;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getTagId(){
        return $this->tagId;
    }
    
    public function setTagId(Tag $tagId){
        $this->tagId = $tagId;
    }

    public function getChatId(){
        return $this->chatId;
    }
    
    public function setId(Chat $chatId){
        $this->chatId = $chatId;
    }

    public function getUsuarioId(){
        return $this->usuarioId;
    }
    
    public function setUsuarioId(Usuario $usuarioId){
        $this->usuarioId = $usuarioId;
    }


}