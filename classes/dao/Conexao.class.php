<?php

class Conexao{


private const SERVER = "localhost";
private const USER = "root";
private const PASS = "";
private const DB = "bancoredesocial";
private const URL = "mysql:host=" . self::SERVER . ";dbname=" . self::DB;

private static $conexao;

public static function get() {
    try {
        if (!isset(self::$conexao)) {
            self::$conexao = new PDO(self::URL, self::USER, self::PASS);
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conexao;
    } catch(PDOException $error) {
        echo "Conexão falhou: {$error->getMessage()}";
        return null;
    }
}

}