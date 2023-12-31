<?php
include("../config/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
        position: relative;
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
        width: 40%;
    }



    #mensagemSenhaErrada {
        color: white;
        width: 100%;
        padding: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 0, 0, 0.3);
    }

    #mensagem_cadastrar {
        width: 100%;
        padding: 2px;
        background-color: green;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form .fa-solid .fa-eye {
        justify-content: center;
        display: flex;
        align-items: center;
    }


    .input-senha {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 300px;
    }

    .input-senha input{
        position: relative;
        width: 120%;
    }
    
    .input-senha i{
        position: absolute;
        margin-right: -260px;
        color: #c0c0c0;
        cursor: pointer;
    }
    </style>

<body class="text-white">


    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <form action="login.php" method="POST" class="form-input">
                    <h1 class="text-light text-center mb-4">Login <i class="fa-brands fa-napster"></i></h1>

                    <?php if (isset($_GET["texto"]) && !empty($_GET["texto"])) { ?>
                        <div id="mensagemSenhaErrada">
                            <?= isset($_GET['texto']) ? $_GET['texto'] : "" ?>
                        </div>
                    <?php } ?>



                    <?php if (isset($_GET["sucess"]) && !empty($_GET["sucess"])) { ?>
                        <div id="mensagem_cadastrar">
                            <?= isset($_GET['sucess']) ? $_GET['sucess'] : "" ?>
                        </div>
                    <?php } ?>

                    <br />
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        </div>

                        <input type="email" name="email" class="form-control" placeholder="exemplo@email.com" aria-label="Email" aria-describedby="basic-addon1">
                    </div>



                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        </div>
                        <div class="input-senha">
                            <input type="password" name="password" id="password" class="form-control" placeholder="digite sua senha" aria-label="Password" aria-describedby="basic-addon1">
                            <i onclick="mostrarSenha()" id="eyeIcon" class="fa-solid fa-eye"></i>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </div>
                </form>


                <br />


                <div class="d-flex align-items-center justify-content-center mt-3">
                    <div class="p-2">Ainda não possui uma conta?</div>
                    <button type="button" class="btn btn-light">
                        <a href="../cadastro/index.php">Cadastre-se</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        function mostrarSenha() {
            var tipo = document.getElementById("password");
            var eyeIcon = document.getElementById("eyeIcon");

            if (tipo.type === "password") {
                tipo.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                tipo.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>