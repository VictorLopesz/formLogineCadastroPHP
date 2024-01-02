<?php 
include('../config/conexao.php');

if(!isset($_POST['cadastrar']))
    die("sem acesso");

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

if ($senha !== $confirmaSenha){
    echo ('Senhas não coincidem!');
};

// hash para a proteção da senha
$hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// código para inserir dados no mysql
$sqlCadastro = "INSERT INTO loginUsuario (nome, nascimento, email, senha) VALUES (?, ?, ?, ?)";

// aqui prepara a conexão com o MySQL
$stmt = mysqli_prepare($conn, $sqlCadastro);

// aqui vincula os parâmetros
mysqli_stmt_bind_param($stmt, "ssss", $nome, $nascimento, $email, $hash);

// condição para a conclusão do cadastro
if(mysqli_stmt_execute($stmt)){
    header("Location: ../login/index.php?sucess=Cadastrado com sucesso");
} else {
    echo ("Erro ao cadastrar, verifique se todos os campos estão preenchidos");
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>