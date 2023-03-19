<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Obtém as informações de login do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar se o usuário existe no banco de dados
$query = "SELECT *
