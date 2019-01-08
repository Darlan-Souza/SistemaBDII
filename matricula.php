<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereMatricula</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="principal">
            <ul>
                <li><a href="addMatricula.php">Cadastrar Matricula</a></li>
                <li><a href="removeMatricula.php">Remover Matricula</a></li>
                <li><a href="alteraMatricula.php">Alterar Matricula</a></li>
            </ul>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>
