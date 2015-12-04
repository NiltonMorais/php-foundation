<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>PHP Foundation</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php

    $rota = $_SERVER['REQUEST_URI'];
    $rota = explode("/", $rota);

        if($rota[1] == ""){
            $pagina = "home.php";
        }
        else{

            if(file_exists($rota[1].".php")){
                $pagina = $rota[1].".php";
            }
            else{
                if($rota = explode("?", $rota[1])){
                    $pagina = $rota[0].".php";
                }else {
                    $pagina = "error404.php";
                }
            }
        }

        require_once("menu.php");
        require_once($pagina);
        require_once("rodape.php");


    ?>
</div>
</body>

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
</html>