<?php
require_once("config.php");

try{
    $conexao = new \PDO(
        "mysql:host={$conn['host']};dbname={$conn['database']}", "{$conn['username']}", "{$conn['password']}",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
);
}
catch(\PDOException $e){
    die("Erro código: ".$e->getCode().": ".$e->getMessage()."<br>Você deve criar um banco de dados com o nome 'examplepdo'. Se você já criou o banco de dados, Clique <a href='fixture.php'>aqui</a> para criar as tabelas e os dados!");
}