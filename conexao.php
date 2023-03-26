<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost"; // endereço do servidor de banco de dados
$username = "root"; // nome de usuário do banco de dados
$password = "root"; // senha do usuário do banco de dados
$dbname = "tea"; // nome do banco de dados

// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}
?>