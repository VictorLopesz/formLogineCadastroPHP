<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])){
    die('Você não pode acessar esta página sem estar logado. <p><a href="/">Entrar</a></p>');
}

?>