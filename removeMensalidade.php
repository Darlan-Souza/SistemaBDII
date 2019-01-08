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
        <div class="titulo_opcoes">
            <font color="black">Remove Mensalidades
        </div>
        <form action="excluiMensalidade.php" method="POST">
            
            <p align="center"> Identificação (ID) da Mensalidade: <input type="text" name="id_mensalidade">
            
            <input type="submit" value="Remover Mensalidade"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>


