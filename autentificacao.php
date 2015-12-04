<?php
session_start();

if(isset($_SESSION['logado']) and $_SESSION['logado'] == 1){
    echo "<p style='float: right'>Olá ".$_SESSION['usuario']." <a href='logout.php'>Sair</a></p><br>";
}
else{
    header('Location: login');
}