<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Sexo.class.php");

class SexoDAO {


    public function save(Sexo $sexo) {
        if ($sexo->getId() == null) {
            $this->insert($sexo);
        } else {
            $this->update($sexo);
        }
    }
    
    private function insert(Sexo $sexo) {
        $sql = "INSERT INTO tb_sexo 
            (SEX_SIGLA) 
            VALUES 
            ( '{$sexo->getSigla()}')";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
        
    private function update(Sexo $sexo) {
        $sql = "UPDATE tb_sexo SET 
            sex_sigla='{$sexo->getSigla()}' 
            WHERE sex_id={$sexo->getId()}";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }




}