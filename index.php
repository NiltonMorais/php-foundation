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
        if(isset($_GET["page"])){
            $pagina = $_GET["page"];
            if(!file_exists($pagina)){
                $pagina = "error404.php";
            }
        }
        else{
            $pagina = "home.php";
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