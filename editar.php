<?php
require_once("autentificacao.php");
require_once("conexao.php");

$sql = "select * from conteudo where id = :id";
$stmt = $conexao->prepare($sql);
$stmt->execute(array(":id" => $_GET['id']));
$pagina = $stmt->fetch(PDO::FETCH_OBJ);
?>
<h5>Página: <?php echo $pagina->pagina;?></h5>

<form method="post">
    <label>Conteúdo</label>
    <textarea name="conteudo" rows="5" class="form-control"><?php echo $pagina->conteudo;?></textarea>
    <input type="submit" value="Salvar" class="btn btn-success">
    <a href="admin" class="btn btn-default">Voltar</a>
</form>

<?php

if(isset($_POST['conteudo'])){
    $sql = "update conteudo set conteudo = :conteudo where id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->execute(array(":id" => $_GET['id'], ":conteudo" => $_POST['conteudo']));
    header("Location: admin");
}

?>
