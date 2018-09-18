<?php
require_once(__DIR__ . "/./Tema.class.php");
require_once(__DIR__ . "/./Chat.class.php");
require_once(__DIR__ . "/./Usuario.class.php");
class Rtema{

    private $id;
    private $temaId;
    private $chatId;
    private $usuarioId;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getTemaId(){
        return $this->temaId;
    }
    
    public function setTemaId($temaId){
        $this->temaId = $temaId;
    }

    public function getChatId(){
        return $this->chatId;
    }
    
    public function setChatId($chatId){
        $this->chatId = $chatId;
    }

    public function getUsuarioId(){
        return $this->usuarioId;
    }
    
    public function setUsuarioId( $usuarioId){
        $this->usuarioId = $usuarioId;
    }


}