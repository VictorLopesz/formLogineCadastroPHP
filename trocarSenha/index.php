<?php
include('../config/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocar senha</title>
</head>

<style>
    .option-senha {
        color: white;
        text-decoration: underline;
    }

    .btn-salvar {
        width: 80px;
    }

    span {
        justify-content: center;
        width: 100%;
        display: flex;
        align-items: center;
    }
</style>

<body>
    <a href="#" type="button" class="option-senha" data-toggle="modal" data-target="#ExemploModalCentralizado">
        Esqueceu a senha? Clique aqui
    </a>

    <?php
    include('../config/conexao.php');

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['recuperar'])) {
        var_dump($dados);

        $query_usuario = "SELECT id, nome, email from loginusuario where email =:email limit 1";

        $resultado = $conn->prepare($query_usuario);
        $resultado->$msqli_stmt::bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $resultado->execute();

        if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
        } else {
            $_SESSION['msg'] = "<p syle='color: #ff0000'> Erro: Email não encontrado </p>";
        }
    }

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <br />

                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-envelope"></i>
                                </span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" aria-label="Usuário" aria-describedby="basic-addon1">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" value="recuperar" class="btn btn-salvar btn-primary">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>