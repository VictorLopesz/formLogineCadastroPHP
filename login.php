<?php
include('config/conexao.php');


if (isset($_POST['email']) || isset($_POST['password'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
        
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->connect_errno);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: painel.php');

        } else
            echo "E-mail ou senha incorretos!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
</head>

<style>
    body {
        background: #183153;
    }

    .form-input {
        background-color: rgba(169, 169, 169, 0.5);
        padding: 40px;
        border-radius: 6px;
    }

    .fa-solid {
        color: #0069D9;
    }

    .fa-brands {
        color: #F5F5F5;
        background-color: #183153;
        padding: 10px;
        border-radius: 100%;
    }

    .btn {
        width: 120px;
    }

    .forgot-password {
        text-decoration: underline;
    }
</style>

<body class="text-white">
    <form action="" method="POST" class="d-flex align-items-center justify-content-center w-100 vh-100 bg-[#fff]">
        <div class="form-input">
            <div>
                <h1 class="text-light d-flex align-items-center justify-content-between">Login <i
                        class="fa-brands fa-napster"></i></h1>
            </div>
            <br>
            <div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="exemplo@email.com"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>

                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="digite sua senha"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="" class="forgot-password text-light">Esqueceu a senha? Clique aqui</a>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                </div>
                <br>
                <br>

                <div class="d-flex justify-content-center align-items-center p-4">
                    Ainda não possui uma conta?
                    <button type="button" class="btn btn-light m-2">
                        cadastre-se
                    </button>
                </div>
            </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>