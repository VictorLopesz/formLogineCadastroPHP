<?php
include('../config/conexao.php');

$mensagemErroEmail = 'preencha seu email';
$mensagemErroSenha = 'preencha sua senha';

if (isset($_POST['email']) || isset($_POST['password'])) {
    if (strlen($_POST['email']) == 0) {
        echo $mensagemErroEmail;
    } else if (strlen($_POST['password']) == 0) {
        echo $mensagemErroSenha;
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $sql_code = "SELECT id,
                            nome,
                            senha
                     FROM loginUsuario 
                     WHERE email = '$email'";

        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->connect_errno);

        if ($sql_query->num_rows) {
            $usuario = $sql_query->fetch_assoc();
            if (password_verify($password, $usuario['senha'])) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                return(header('Location: ../painel.php'));
            } else {
                echo "E-mail ou senha incorretos!1";
            }
        } else {
            echo "E-mail ou senha incorretos!";
        }
    }
}

?>
