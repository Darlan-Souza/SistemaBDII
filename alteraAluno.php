<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GereCurso</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <?php
         include_once "mysql.php";
    ?>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">GereCurso</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestão de pessoas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Gerenciar...</h6>
            <a class="dropdown-item" href="aluno.php">Alunos</a>
            <a class="dropdown-item" href="professor.php">Professores</a>
            <a class="dropdown-item" href="diretor.php">Diretores</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestão de cursos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Gerenciar...</h6>
            <a class="dropdown-item" href="curso.php">Curso</a>
            <a class="dropdown-item" href="matricula.php">Matriculas</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gestão contas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Gerenciar...</h6>
            <a class="dropdown-item" href="mensalidade.php">Mensalidades</a>
            <a class="dropdown-item" href="despesa.php">Despesas</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="aluno.php">Gestão de alunos</a>
            </li>
            <li class="breadcrumb-item active">Alteração de alunos</li>
          </ol>
          <div class="container">
                        <div class="card card-register mx-auto mt-5">
                            <div class="card-header text-center">Adicionar aluno</div>
                            <div class="card-body">
                               <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group">
                                        <div class="card-header text-center">Dados</div><br>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-label-group">
                                                    <input type="text" id="id_aluno" class="form-control" placeholder="Nome" required="required" autofocus="autofocus" name="id_aluno">
                                                    <label for="id_aluno"> Identificação (ID) do aluno</label>
                                                </div>
                                            </div>

                                        </div>
                                    <br>
                                    <input type="submit" value="Pesquisar Aluno" class="btn btn-primary btn-block" name="procurar">
                                </form>


                                <?php if(isset($_POST['procurar'])){

                                    $id_alun = $_POST['id_aluno'];
                                    
                                   try {
                                    $stmt = $pdo->prepare("SELECT id_aluno, nome_aluno, sobrenome_aluno, email_aluno FROM aluno WHERE id_aluno = '$id_alun'");
                                    $stmt->execute();
                                    $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    if(empty($arrValues)){
                                    ?>    
                                        <p align="center" style="color: red"><?php echo "Nenhum registro encontrado"; ?></p>
                                        
                                    <?php }else{
                        // open the table
                                print "<h2><p align=center> <font color=red> Aluno: </font></p></h2> ";

                                    print "<table align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>\n";
                                    print "<tr>\n";
                        // add the table headers
                                    foreach ($arrValues[0] as $key => $useless) {
                                        print "<th>$key</th>";
                                    }
                                    print "</tr>";
                        // display data
                                    foreach ($arrValues as $row) {
                                        print "<tr>";
                                        foreach ($row as $key => $val) {
                                            print "<td>$val</td>";
                                        }
                                        ?>
                                       
                                        <td><a href="updateAluno.php?id_a=<?php echo "$id_alun" ?>" style="color: green"> Atualizar </a></td>
                                        
                                        <?php 
                                        
                                        print "</tr>\n";
                                    }
                        // close the table
                                    print "</table>\n";
                                }
                                } catch (PDOException $e) {
                                    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
                                }

                                   
                                }?>
                            </div>
                        </div>
                    </div>
        </div>
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © GereCurso 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
