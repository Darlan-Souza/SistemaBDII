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
        <div class="titulo_opcoes">
            <font color="black">Cadastra Mensalidades
        </div>
                    <form action="cadastraMensalidade.php" method="POST">
                        <div>
                            ID do Curso: <input type="number" placeholder="ID do Curso" name="id_curso">
                        </div><br>

                        <div>
                            Valor da Mensalidade: <input type="text" placeholder="Valor da Mensalidade" name="valor_mensalidade">
                        </div><br>

                        <input type="submit" value="Registrar Mensalidade">
                        </div>
                    </form>
            <?php
            include_once './rodape.php';
            ?>
    </body>
</html>
