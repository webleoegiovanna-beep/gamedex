<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // seu usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "cadUsuario"; // nome do banco de dados

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando dados do formulário
    $email = $_POST['email'];
    $username = $_POST['username'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Validando se as senhas coincidem
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem!";
        exit();
    }

    // Criptografando a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo no banco de dados
    $sql = "INSERT INTO usuarios (email, username, genero, senha) 
            VALUES ('$email', '$username', '$genero', '$senha_hash')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fechando a conexão
    $conn->close();
}
?>
