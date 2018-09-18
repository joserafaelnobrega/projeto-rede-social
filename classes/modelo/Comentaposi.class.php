<?php

class Comentarioposi{

    private $id;
    private $texto;
    private $usuarioId;




    public function getId(){
      return  $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTexto(){
        return $this->texto;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }


    public function getUsuarioId(){

        return  $this->usuarioId;
    }

    public function setUsuarioId(Usuario $usuarioId){

     $this->usuarioId = $usuarioId;
    }

}