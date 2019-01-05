<html>
    <head>
        <meta charset="utf-8">
        <title>Alterar aluno</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="corpo">
            <div class="menu">
                <h1>Alteração de alunos</h1>
            </div>
        </div>

        <?php
        include_once './mysql.php';
        include_once './listaAlunos.php';
        include_once './listaProfessores.php';
        include_once './listaCursos.php';
        include_once './listaMatriculas.php';
        include_once './listaDiretores.php';
        include_once './listaMensalidades.php';
        include_once './listaDespesas.php';

        include_once './rodape.php';
        ?>
    </body>
</html>