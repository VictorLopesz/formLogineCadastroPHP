<?php
include('../config/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<style>
    body {
        background: #183153;
    }

    #mensagem_cadastrar {
        width: 100%;
        padding: 2px;
        background-color: green;
        color: white;
    }

    .form-input {
        background-color: rgba(169, 169, 169, 0.5);
        padding: 40px;
        border-radius: 6px;
    }

    .fa-id-card {
        color: #F5F5F5;
        background-color: #183153;
        border-radius: 100%;
        padding: 10px;
        padding-top: 12px;
        padding-bottom: 12px;
    }
</style>

<?php if (isset($_GET["texto"]) && !empty($_GET["texto"])) { ?>
    <div id="mensagem_cadastrar">
        <?= isset($_GET["texto"]) ? $_GET["texto"] : " " ?>;
    </div>
<?php } ?>

<body class="text-white">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <form action="cadastrar.php" class="form-input" method="POST">
                    <h1 class="text-light text-center mb-4">Cadastro <i class="fa-solid fa-id-card"></i></h1>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-cake-candles"></i></i></span>
                        </div>
                        <input type="date" name="nascimento" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="exemplo@mail.com" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" name="confirmaSenha" class="form-control" placeholder="Confirme sua senha" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <button class="btn btn-info">
                            <a href="../login/index.php" class="text-white">
                                Voltar ao Login
                            </a>
                        </button>
                        <button type="submit" name="cadastrar" class="btn btn-success">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>