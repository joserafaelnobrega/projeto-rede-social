<?php

require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Usuario.class.php");


class UsuarioDAO{

    public function registra(Usuario $usuario){

            $sql = "INSERT INTO tb_usuario (usu_login, usu_senha, usu_descricao, usu_nome,usu_sex_id,usu_cat_id,usu_pen_id) 
            VALUES ('{$usuario->getLogin()}', '{$usuario->getSenha()}','{$usuario->getDescricao()}', '{$usuario->getNome()}', '3','3','3')";
        try {
            Conexao::get()->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function registrados(){

        $sql = "SELECT usu_id,usu_login, usu_senha from tb_usuario";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $contas = array();
        foreach($result as $row){
            $conta = new Usuario;
            $conta->setId($row['usu_id']);
            $conta->setLogin($row['usu_login']);
            $conta->setSenha($row['usu_senha']);
            array_push($contas, $conta);
        }
        return $contas;


    }

    public function dados_usuario($id){

        
        $sql = "SELECT usu_id,usu_login, usu_senha,usu_sex_id,usu_ciclo,usu_descricao,usu_avaliacao,usu_nome from tb_usuario where usu_id='$id' ";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        
        
            $conta = new Usuario;
            $conta->setId($row['usu_id']);
            $conta->setLogin($row['usu_login']);
            $conta->setSenha($row['usu_senha']);
            $conta->setSexoId($row['usu_sex_id']);
            $conta->setCiclo($row['usu_ciclo']);
            $conta->setDescricao($row['usu_descricao']);
            $conta->setAvaliacao($row['usu_avaliacao']);
            $conta->setNome($row['usu_nome']);

            
        
        return $conta;

    }


}

