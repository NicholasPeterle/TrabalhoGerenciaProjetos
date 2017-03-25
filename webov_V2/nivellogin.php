<?php
// Inicia a sessão
session_start();

// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');


if($_SESSION['user_id'] == 1)
    // Redireciona para o login.php
    header('location: indexadmin.php');
else {
    header('location: index.php');
}

