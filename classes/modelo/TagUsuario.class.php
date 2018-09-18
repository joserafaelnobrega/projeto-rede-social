<?php

class TagUsuario{

    private $id;
    private $favorito;
    private $menosFavorito;
    private $positivo;
    private $negativo;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getFavorito(){
        return $this->favorito;
    }
    
    public function setFavorito($favorito){
        $this->favorito = $favorito;
    }

    public function getMenosFavorito(){
        return $this->menosFavorito;
    }
    
    public function setMenosFavorito($menosFavorito){
        $this->menosFavorito = $menosFavorito;
    }

    public function getPositivo(){
        return $this->positivo;
    }
    
    public function setPositivo($positivo){
        $this->positivo = $positivo;
    }

    public function getNegativo(){
        return $this->negativo;
    }
    
    public function setNegativo($negativo){
        $this->negativo = $negativo;
    }






}