<?php

class TagChat{

private $id;
private $avaliacao;
private $rank;
private $descricao;

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getAvaliacao(){
    return $this->avaliacao;
}

public function setAvaliacao($avaliacao){
    $this->avaliacao = $avaliacao;
}

public function getRank(){
    return $this->rank;
}

public function setRank($rank){
    $this->rank = $rank;
}

public function getDescricao(){
    return $this->descricao;
}

public function setDescricao($descricao){
    $this->descricao = $descricao;
}



}