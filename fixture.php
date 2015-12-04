<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
require_once("conexao.php");


$paginas = array(
    0 => array(
        "pagina" => "home",
        "conteudo" => "Este é conteudo da página home.",
    ),
    1 => array(
        "pagina" => "empresa",
        "conteudo" => "Este é conteudo da página empresa. Se você pesquisar caveira vai achar esta página",
    ),
    2 => array(
        "pagina" => "produtos",
        "conteudo" => "Este é conteudo da página produtos você pode pesquisar a palavra macaco.",
    ),
    3 => array(
        "pagina" => "servicos",
        "conteudo" => "Este é conteudo da página servicos teste.",
    ),
);

$sql = "CREATE DATABASE IF NOT EXISTS examplepdo;
use examplepdo;
CREATE TABLE IF NOT EXISTS `conteudo` (
 `conteudo`.`id` SMALLINT NOT NULL AUTO_INCREMENT,
 `conteudo`.`pagina` LONGTEXT NOT NULL,
 `conteudo`.`conteudo` LONGTEXT NOT NULL,
 PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `usuarios` (
 `usuarios`.`id` SMALLINT NOT NULL AUTO_INCREMENT,
 `usuarios`.`usuario` LONGTEXT NOT NULL,
 `usuarios`.`senha` LONGTEXT NOT NULL,
 PRIMARY KEY (`id`)
);
delete from conteudo;
delete from usuarios;
";

$stmt = $conexao->prepare($sql);
$stmt->execute();

$sql = 'INSERT INTO conteudo (pagina, conteudo) VALUES (:pagina, :conteudo)';
$stmt = $conexao->prepare($sql);

foreach($paginas as $pagina){
    $stmt->execute(array( ':pagina' => $pagina['pagina'], ':conteudo' => $pagina['conteudo'] ));
}

$sql = "INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)";
$stmt = $conexao->prepare($sql);
$stmt->execute(array(":usuario" => "admin", ":senha" => password_hash("admin", PASSWORD_DEFAULT)));

?>

<h2>Banco de dados 'examplepdo' e tabelaS 'conteudo' e 'usuarios' criadas com sucesso!</h2>
<h4>Dados inseridos com sucesso! (usuario: admin, senha: admin)</h4>
</body>
</html>