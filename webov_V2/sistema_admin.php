<!DOCTYPE html>
<?php
session_start();

if ($_SESSION['user_id'] != 1) {
    return header('location: index.php');
}
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<!-- Navebar do Admin-->
	<nav class="brown darken-4">
    	<div class="nav-wrapper container">
    		<a href="#" class="brand-logo">WeBov</a>
    		<ul id="nav-mobile" class="right hide-on-med-and-down">
    			<li><a href="indexadmin.php">Início</a></li>
				<li><a href="sistema_admin.php">Sistema</a></li>
				<li><a href="edita.php">Usuários</a></li>
				<li><a href="login/sair.php">sair</a></li>
			</ul>
		</div>
	</nav>

	<!-- Jquery-->
    <center><a href="cadastrar_leilao.php">Incluir Leilão</a></center> 
    <center><a href="editaleilao.php">Edita Leilão</a></center> 
    <center><a href="pesquisaraca.php">Busca Leilão por Raça</a></center>
    <center><a href="pesquisadata.php">Busca Leilão por Data</a></center>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script
</body>
</html>