<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="corpo">
            <div class="menu">
                <h1>Gestão de Cursos</h1>
                <ul>
                    <li><a href="addCurso.php">Cadastrar Curso</a></li>
                    <li><a href="removeCurso.php">Remover Curso</a></li>
                    <li><a href="alteraCurso.php">Alterar Curso</a></li>
                </ul>
            </div>
        </div>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>