<h1>Serviços</h1>


<?php require_once("conexao.php");
$page = "servicos";

$sql = "select * from conteudo where pagina = :pagina";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("pagina", $page);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_OBJ);

echo $pagina->conteudo;