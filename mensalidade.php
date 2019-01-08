<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereMensalidade</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="principal">
            <ul>
                <li><a href="addMensalidade.php">Cadastrar Mensalidade</a></li>
                <li><a href="removeMensalidade.php">Remover Mensalidade</a></li>
                <li><a href="alteraMensalidade.php">Alterar Mensalidade</a></li>
            </ul>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
