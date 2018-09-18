<?php
class Chat{

private $id;
private $nome;
private $descricao;
private $texto;



public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}



public function getNome(){
    return $this->nome;
}       

public function setNome($nome){
    $this->nome =$nome;

}


public function getDescricao(){
    return $this->descricao;
}

public function setFunction($descricao){
    $this->descricao = $descricao;
}

public function getTexto(){
    return $this->texto;
}

public function setTexto($texto){
    $this->texto = $texto;
}


}