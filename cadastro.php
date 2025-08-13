<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cadUsuario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem!";
        exit();
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (email, username, genero, senha) 
            VALUES ('$email', '$username', '$genero', '$senha_hash')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
