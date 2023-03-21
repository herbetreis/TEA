<?php
// Informações de conexão com o banco de dados
$host = "152.67.45.231";
$user = "tea";
$password = "tea";
$database = "cadastro_teasite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recupere os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Crie a consulta SQL para inserir os dados na tabela do banco de dados
$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

// Executar a consulta SQL e verificar se ela foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Registro realizado com sucesso!";
} else {
    echo "Erro ao registrar: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>