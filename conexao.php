<?php
$servername = "localhost"; // endereço do servidor de banco de dados
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do usuário do banco de dados
$dbname = "tea"; // nome do banco de dados

// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}
?>