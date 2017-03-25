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
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Início</title>
	<!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.css">
</head>
<body>
	<nav class="brown darken-4">
    	<div class="nav-wrapper container">
    		<a href="#" class="brand-logo">WeBov</a>
    		<ul id="nav-mobile" class="right hide-on-med-and-down">
    			<li><a href="#">Início</a></li>
				<li><a href="#about">Sistema</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="login/sair.php">Sair</a></li>
			</ul>
		</div>
	</nav>
	<div>
	<br>
		<div class="row container">
    		<div class="col m6 l6"> <img src="img/boi_vetor.png" width="400px"> </div>
    		<div class="col m6 l6"> <img src="img/boi_vetor_invert.png" width="400px"> </div>
		</div>
	<br>
		<div class="row container">
			<h1 text align="center"><b>WeBov</b></h1>
  		
  			<p text align="center">WeBov é um site que tem como objetivo disponibilizar informações sobre leilões do grupo Correia Costa Leilões. Através do WeBov é possível realizar pesquisas por raças e data de leilões já ocorridos, mostrando assim, informações como classificação, idade, peso, valor e valor por quilo dos leilões já ocorridos.
  			</p>
		</div>
	</div>

	<footer class="page-footer brown darken-4">
    	<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">WeBov</h5>
					<p class="grey-text text-lighten-4"></p>
				</div>
				<div class="col l4 offset-l2 s12">
            		<h5 class="white-text">Links</h5>
            		<ul>
            			<li><a class="grey-text text-lighten-3" href="#">Início</a></li>
            			<li><a class="grey-text text-lighten-3" href="#about">Sistema</a></li>
            			<li><a class="grey-text text-lighten-3" href="edita.php">Perfil</a></li>
           				<li><a class="grey-text text-lighten-3" href="login/sair.php">Sair</a></li>
            		</ul>
            	</div>
            </div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2017 Copyright Text
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script
</body>
</html>