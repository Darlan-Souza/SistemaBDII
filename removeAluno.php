<!DOCTYPE html>
<html>
    <head>
    <?php
      include_once './mysql.php';
      //  Realiza a busca na base de dados isso
      $con = new Conexao();
      $link = $con->conexao();
      $id_alu = $_SESSION['id_aluno'];
      $sql = $link->prepare("SELECT id_aluno, nome_aluno FROM aluno ORDER BY nome_aluno;");
      $sql->execute();
    ?>

   
        <meta charset="UTF-8">
        <title>GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Remove alunos
        </div>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                          <label>Remove alunos</label>
                          <select name="aluno" id="id_aluno">
                            <option selected disabled="disabled">Selecione...</option>
                            <?php
                              while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value=' . $linha['id_aluno'] . '>' . $linha['nome_aluno'] . '</option>';
                              }
                            ?>
                          </select>
                    <br>
                      <button type="submit"  name="submit" value="consultar">Consultar Integrante</button>
                      <button type="submit" name="submit" value="remover">Remover Integrante</button>
                </form>
        

 <?php
              
            if(isset($_POST["submit"])){
              $cod = $_POST['aluno'];
              if(empty($cod) || ($cod=="Selecione...")) {
                echo "<script language='javascript' type='text/javascript'>alert('Selecione uma opção!');</script>";
              } else {
                switch ($_POST["submit"]) {
                  case 'consultar':
                      date_default_timezone_set('America/Sao_Paulo');
                      $sql = $link->prepare("SELECT * FROM aluno WHERE id_aluno = $cod LIMIT 1;");
                      $sql->execute();
                      $linha = $sql->fetch(PDO::FETCH_ASSOC);
          ?>
          
          <div class="container">
              <div class="card-header">
                Dados
              </div>
                    <table width="100%">
                      <thead>
                        <tr>
                          <th>Código do Integrante</th>
                          <th>Nome</th>
                          <th>Sobrenome</th>
                          <th>Email</th>
                          <th>Data de nascimento</th>
                          <th>Rua</th>
                          <th>Numero</th>
                          <th>Cidade</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $linha['id_aluno']; ?></td>
                          <td><?php echo $linha['nome_aluno'] . " " . $linha['sobrenome_aluno']; ?></td>
                          <td><?php echo $linha['email_aluno']; ?></td>
                          <td><?php echo $linha['data_nasc']; ?></td>
                          <td><?php echo $linha['rua_aluno']; ?></td>
                          <td><?php echo $linha['numero']; ?></td>
                          <td><?php echo $linha['cidade_aluno']; ?></td>
                          <td><?php echo $linha['estado_aluno']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                <div>Atualizado às '<?php echo date('H:i'); ?>'.</div>
          </div>

          <?php
                    break;
                  case 'remover':
                    $sql = $link->prepare("DELETE FROM aluno WHERE id_aluno = $cod;");
                    // execute the query
                    $sql->execute();
                
                    if($sql->rowCount()){
                      echo "<script language='javascript' type='text/javascript'>alert('Remoção Efetuada!');window.location.href='./removeAluno.php';</script>";
                    } else {
                      echo "<script language='javascript' type='text/javascript'>alert('Error na Remoção!');</script>";
                    }
                    break;
                  default:
                    echo "<script language='javascript' type='text/javascript'>alert('Error!');</script>";
                    break;
                }
              }
            }  
          ?>


        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>