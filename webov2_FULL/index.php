<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    
    <!DOCTYPE html>
<html>
<title>INICIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("/w3images/coffeehouse.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
h1 {font-family:Edwardian Script ITC; font-size:88px}
p {font-family: calibre; font-size:28px}
img {display: block;
    margin: 0 auto;}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">Inicio</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">Sistema</a>
    </div>
    <div class="w3-col s3">
        <a href="edita.php" class="w3-button w3-block w3-black">usuario</a>
    </div>
    <div class="w3-col s3">
        <a href="login/sair.php" class="w3-button w3-block w3-black">sair</a>
  
    </div>
  </div>

  <img src="boi_vetor.png" width="400px">

  <h1 text align="center"><b>WeBov</b></h1>
  
  <p text align="center">WeBov é um site que tem como objetivo disponibilizar informações sobre leilões do grupo Correia Costa Leilões. Através do WeBov é possível realizar pesquisas por raças e data de leilões já ocorridos, mostrando assim, informações como classificação, idade, peso, valor e valor por quilo dos leilões já ocorridos.</p>

</div>

</body>
</html>
