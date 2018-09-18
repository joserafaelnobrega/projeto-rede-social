<?php

class TemaUsuario{

    private $id;
    private $tema;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getTema(){
        return $this->tema;
    }
    
    public function setTema($tema){
        $this->id = $tema;
    }

}