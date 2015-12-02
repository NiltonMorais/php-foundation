<h1>Contato</h1>
<?php
if(isset($_POST['enviou'])){
    echo "Dados enviados com sucesso! Abaixo seguem os dados que você enviou:";
    echo "Nome: ".$_POST['nome'].'<br>';
    echo "Email: ".$_POST['email'].'<br>';
    echo "Assunto: ".$_POST['assunto'].'<br>';
    echo "Mensagem: ".$_POST['mensagem'].'<br>';
}
?>

<style>
    label{
        width: 100%;
    }
</style>
<form method="post">
    <label>Nome:
        <input type="text" name="nome" class="form-control" required="required">
    </label>
    <label>Email:
        <input type="email" name="email" class="form-control" required="required">
    </label>
    <label>Assunto:
        <input type="text" name="assunto" class="form-control" required="required">
    </label>
    <label>Mensagem:
        <textarea name="mensagem" class="form-control" rows="5" required="required"></textarea>
    </label>
    <input type="hidden" name="enviou">

    <input type="submit" value="Enviar" class="btn btn-success">
    <input type="reset" value="Limpar" class="btn btn-default">

</form>