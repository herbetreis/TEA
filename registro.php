<?php
// Informações de conexão com o banco de dados
$host = "152.67.45.231";
$user = "tea";
$password = "tea";
$database = "cadastro_teasite";

$conn = new mysqli($host, $user, $password, $database);

// Verifique se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Crie a tabela no banco de dados, caso ela não exista
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso ou já existente!";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
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