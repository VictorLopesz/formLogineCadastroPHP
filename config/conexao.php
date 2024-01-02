<?php 

$hostname = 'localhost';
$user = 'root';
$password = '';
$db = 'usuarios';

$conn = new mysqli($hostname, $user, $password, $db); 

if ($conn -> connect_errno){
    echo "Falha ao conectar: (" .$conn->connect_errno.")" . $conn -> connect_error;
}