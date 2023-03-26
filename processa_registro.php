<?php
include 'conexao.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Processa os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Insere os dados do usuário na tabela
  $inserir_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  
  if (mysqli_query($conn, $inserir_usuario)) {
    echo "Usuário cadastrado com sucesso!";
  } else {
    echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
}
?>
