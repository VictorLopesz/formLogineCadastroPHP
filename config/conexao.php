<?php 

$hostname = 'localhost';
$user = 'root';
$password = '';
$db = 'loginUsuario';

//Está é a ordem correta pra fazer a conexão, e sempre será passada como um objeto
$conn = new mysqli($hostname, $user, $password, $db); 

if ($conn -> connect_errno){
    echo "Falha ao conectar: (" .$conn->connect_errno.")" . $conn -> connect_error;
}