<?php

class Penalidade{

    private $id;
    private $tempo;
    private $nivel;
    private $contador;
    private $resete;


    public function getId(){
        return $this->id;

    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTempo(){
        return $this->tempo;
    }

    public function setTempo($tempo){

        $this->tempo = $tempo;
    }

    public function getNivel(){
        return $this->nivel
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function getContador(){
        return $this->contador;
    }

    public function setContador($contador){
        $this->contador = $contador;
    }

    public function getResete(){
        return $this->resete;
    }

    public function setResete($resete){
        $this->resete  = $resete;
    }



}