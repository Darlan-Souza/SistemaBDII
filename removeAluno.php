	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
 	<title>GereCurso</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	
    <body>
		<div class="corpo">
			<div class="menu">
				<h1>Remover alunos</h1>
          <div class="formulario">
     				<form action="cadastra.php" method="POST">

                        <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

                         <div>
                              Codigo: <input type="text" placeholder="Nome" name="nome_aluno" value="<?php echo $row_usuario['nome_aluno']; ?>">
                         </div><br>

                         <input type="submit" value="Remover Aluno">
                    </div>
                </form>
			</div>
		</div>
	</body>
	</html>