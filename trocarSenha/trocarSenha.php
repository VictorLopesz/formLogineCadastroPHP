<?php
include('../config/conexao.php');

if (isset($_POST['enviar'])) {

    $email = $conn->escape_string($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido.";
    }

    $email = $conn->real_escape_string($_POST['email']);
    $sql_code = "SELECT id, email, senha FROM loginUsuario WHERE email = '$email'";
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if ($total == 0)
        $erro[] = "O e-mail informado não existe no banco de dados!";

    if (count($erro) == 0 && $total > 0) {

        $novasenha = substr(md5(time()), 0, 6);
        $nvcriptografada = md5(md5($novasenha));

        if (mail($email, "Sua nova senha", "Sua nova senha: " . $novasenha)) {

            $sql_code = "UPDATE loginUsuario SET senha = '$nvcriptografada' WHERE email = '$email'";
            $sql_query = $conn->query($sql_code) or die($conn);
        }
    }
}

?>