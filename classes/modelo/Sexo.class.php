<?php

class Sexo{

    private $sigla;
    private $id;


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = strtoupper($sigla);
    }



}