<h1>Produtos</h1>


<?php require_once("conexao.php");
$page = "produtos";

$sql = "select * from conteudo where pagina = :pagina";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("pagina", $page);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_OBJ);

echo $pagina->conteudo;