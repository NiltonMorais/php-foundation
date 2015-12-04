<?php
require_once("autentificacao.php");
require_once("conexao.php");

$sql = "select * from conteudo";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$paginas = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<table class="table table-bordered table-hover">
    <tr>
        <td>Id</td>
        <td>Página</td>
        <td>Conteúdo</td>
    </tr>
    <?php
        foreach($paginas as $pagina){
            echo "<tr>";
            echo "<td><a href='editar?id=".$pagina->id."'>".$pagina->id."</a></td>";
            echo "<td>".$pagina->pagina."</td>";
            echo "<td>".$pagina->conteudo."</td>";
            echo "</td>";
        }
    ?>
</table>
