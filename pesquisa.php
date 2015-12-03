<h1>Pesquisar</h1>
<form method="post">
    <label>Pesquisar
    <input type="search" name="pesquisa" class="form-control">
    </label>
    <input type="submit" class="btn btn-success" value="Pesquisar">
</form>
<?php


if(isset($_POST['pesquisa'])) {
    require_once("conexao.php");

    $sql = "select * from conteudo where conteudo like '%{$_POST['pesquisa']}%'";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($resultados as $resultado) {
        echo "Conteúdo encontrado: " . $resultado->conteudo;
        echo "<br>Página: <a href='{$resultado->pagina}'>" . $resultado->pagina . "</a>.<br><br>";
    }
}
