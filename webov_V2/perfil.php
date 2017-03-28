<?php


// Inclui o arquivo de configuração
include('login/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

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
    			<li><a href="index.php">Início</a></li>
                        <li><a href="pesquisaraca.php">Sistema</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="login/sair.php">Sair</a></li>
			</ul>
		</div>
	</nav>

	<!-- Jquery-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script
</body>
</html>
<?php
    // Mostra os usuários
    
                $pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE user_id <> 1 ORDER BY user_id DESC');
		$pdo_verifica->execute();
		?>
		
		<table border="1" cellpadding="5">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Usuário</th>
			<th>Senha Criptografada</th>
			<th>Ação</th>
		</tr>
		<?php
		while( $fetch = $pdo_verifica->fetch() ) {
                    if($fetch['user_id'] == $_SESSION['user_id']){
                        echo '<tr>';
			echo '<td>' . $fetch['user_id'] . '</td>';
			echo '<td>' . $fetch['user_name'] . '</td>';
			echo '<td>' . $fetch['user'] . '</td>';
			echo '<td>' . $fetch['user_password'] . '</td>';
                        echo '<td> <a style="color:red;" href="editasenha.php?nome='.$fetch['user_name'] .'&email='.$fetch['user'].'&id='.$fetch['user_id'].'">Editar</a> </td>';
                        echo '</tr>';
                    }
                }
