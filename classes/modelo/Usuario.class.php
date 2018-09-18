<?php

class Usuario{

    private $id;
    private $categoriaId;
    private $penalidadeId;
    private $sexoId;
    private $login;
    private $senha;
    private $ciclo;
    private $descricao;
    private $avaliacao;
    private $medalhaestrelas;
    private $medalhatema;
    private $nome;

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getCategoriaId(){
        return $this->categoriaId;
    }
    
    public function setCategoriaId(Categoria $categoriaId){
        $this->categoriaId = $categoriaId;
    }

    public function getPenalidadeId(){
        return $this->penalidadeId;
    }
    
    public function setPenalidadeId(Penalidade $penalidadeId){
        $this->penalidadeId = $penalidadeId;
    }

    public function getSexoId(){
        return $this->sexoId;
    }
    
    public function setSexoId( $sexoId){
        $this->sexoId = $sexoId;
    }


    public function getLogin(){
        return $this->login;
    }
    
    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getCiclo(){
        return $this->ciclo;
    }
    
    public function setCiclo($ciclo){
        $this->ciclo = $ciclo;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getAvalicao(){
        return $this->avaliacao;
    }
    
    public function setAvaliacao($avaliacao){
        $this->avaliacao = $avaliacao;
    }

    public function getMedalhaestrela(){
        return $this->medalhaestrela;
    }
    
    public function Medalhaestrela($medalhaestrelas){
        $this->medalhaestrela = $medalhaestrelas;
    }

    public function getMedalhatema(){
        return $this->medalhatema;
    }
    
    public function setMedalhatema($medalhatema){
        $this->medalhatema = $medalhatema;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }








}