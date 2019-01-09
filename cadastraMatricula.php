<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

include_once './topo.php';

// Attempt insert query execution
try {
    // Create prepared statement
    $sql = "INSERT INTO matricula(id_aluno, id_curso) VALUES (:id_aluno, :id_curso); UPDATE curso SET qtd_alunos=qtd_alunos+1 where id_curso=:id_curso";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':id_aluno', $_REQUEST['id_aluno']);
    $stmt->bindParam(':id_curso', $_REQUEST['id_curso']);
    // Execute the prepared statement
    $stmt->execute();
    echo"<script language='javascript' type='text/javascript'>window.location.href='./addMatricula.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
include_once './rodape.php';
?>


