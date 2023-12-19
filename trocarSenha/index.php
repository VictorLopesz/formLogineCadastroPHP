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

    span{
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

    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <span class="text-modal text-dark">
                        Enviaremos um código para seu e-mail para confirmarmos sua identidade
                    </span>
                    <br/>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> Digite seu e-mail
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" name="Submit" value="">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-salvar btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>