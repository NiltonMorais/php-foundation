<?php
session_start();
?>
<style>
    label{
        width: 100%;
    }
</style>
<h2>Login</h2>

<form method="post">
    <label>Usuário:
        <input type="text" name="usuario" class="form-control" required="required">
    </label>
    <label>Senha:
        <input type="password" name="senha" class="form-control" required="required">
    </label>
    <input type="hidden" name="token" value="123456">
    <input type="submit" value="Entrar" class="btn btn-success">
</form>

<?php
if(isset($_POST['token']) and ($_POST['token'] == "123456")){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    require_once("conexao.php");
    $sql = "select * from usuarios where usuario = :usuario";
    $stmt = $conexao->prepare($sql);
    $stmt->execute(array(":usuario" => $usuario));
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user and password_verify($senha, $user->senha)){
        $_SESSION['logado'] = 1;
        $_SESSION['usuario'] = $user->usuario;
        header('Location: admin');
    }
    else{
        echo "Dados incorretos!";
    }
}