<?php
session_start();

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
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['genero'] = $row['genero'];

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
                    header("Location: index.html"); 
                    break;
            }
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Email não cadastrado!";
    }

    $conn->close();
}
?>
