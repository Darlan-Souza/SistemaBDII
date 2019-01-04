<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

// Attempt insert query execution
try {
    // Create prepared statement
    $sql = "INSERT INTO curso(id_professor ,nome_curso,qtd_alunos) VALUES (:id_professor,:nome_curso,:qtd_alunos)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters to statement
    $stmt->bindParam(':id_professor', $_REQUEST['id_professor']);
    $stmt->bindParam(':nome_curso', $_REQUEST['nome_curso']);
    $stmt->bindParam(':qtd_alunos', $_REQUEST['qtd_alunos']);
    // Execute the prepared statement
    $stmt->execute();
    echo"<script language='javascript' type='text/javascript'>window.location.href='./addCurso.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>