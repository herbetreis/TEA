<?php
// Informações de conexão com o banco de dados
$host = "localhost";
$user = "root";
$password = "root";
$database = "cadastro_teasite";

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica se houve erro de conexão
if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
