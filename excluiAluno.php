<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
include_once './mysql.php';

// Attempt insert query execution
try {
    // Create prepared statement
    $id = $_POST['id_aluno'];

    $sql = "DELETE FROM aluno WHERE id_aluno = $id";

    $stmt = $pdo->prepare($sql);
    
    $stmt->execute();

    
    echo"<script language='javascript' type='text/javascript'>window.location.href='./removeAluno.php';</script>";
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>
