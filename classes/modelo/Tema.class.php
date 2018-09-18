<?php
class Tema{

    private $id;
    private $temaUsuarioId;
    private $temaChatId;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    
    
    public function getTemaUsuario(){
        return $this->temaUsuarioId;
    }       
    
    public function setTemaUsuario(TemaUsuario $temaUsuarioId){
        $this->temaUsuarioId =$temaUsuarioId;
    
    }

    public function getTemaChat(){
        return $this->temaChatId;
    }
    
    public function setTemaChat(TemaChat $temaChatId){
        $this->temaChatId = $temaChatId;
    }

}