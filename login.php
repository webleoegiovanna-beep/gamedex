<?php
session_start(); // Inicia a sessão para armazenar dados do usuário

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
    $senha = $_POST['senha'];

    // Buscando o usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, agora verificar a senha
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Senha correta, iniciar sessão
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['genero'] = $row['genero']; // Armazena o gênero de preferência

            // Redireciona para a página específica com base no gênero de preferência
            switch ($_SESSION['genero']) {
                case 'acao':
                    header("Location: acao.php");
                    break;
                case 'estrategia':
                    header("Location: estrategia.php");
                    break;
                case 'terror':
                    header("Location: terror.php");
                    break;
                default:
                    header("Location: index.html"); // Se algo deu errado, redireciona para o login
                    break;
            }
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta!";
        }
    } else {
        // Usuário não encontrado
        echo "Email não cadastrado!";
    }

    // Fechando a conexão
    $conn->close();
}
?>
