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
<title>AdminUsuarios</title>
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
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
        <a href="index.php" class="w3-button w3-block w3-black">Inicio</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">Sistema</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">usuario</a>
    </div>
    <div class="w3-col s3">
        <a href="login/sair.php" class="w3-button w3-block w3-black">sair</a>
        
    </div>
  </div>
</div>


</body>
</html>
<html>
	<head>
		<meta charset="UTF-8">
		
		
	</head>
	<body>
            <br><br>
            <br><br>
  <!--<p>Para editar, apenas digite o nome de usuário que deseja editar.</p>
		<p><a href="login.php">Clique aqui</a> para testar.</p>
        </body>-->
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
			echo '<tr>';
			echo '<td>' . $fetch['user_id'] . '</td>';
			echo '<td>' . $fetch['user_name'] . '</td>';
			echo '<td>' . $fetch['user'] . '</td>';
			echo '<td>' . $fetch['user_password'] . '</td>';
			echo '<td> <a style="color:red;" href="?del=' . $fetch['user_id'] . '">Apagar</a> </td>';
			echo '</tr>';
		}

// Apaga usuários
if ( isset( $_GET['del'] ) ) {
	// Delete de cara (sem confirmação)
	$pdo_insere = $conexao_pdo->prepare('DELETE FROM usuarios WHERE user_id=?');
	$pdo_insere->execute( array( (int)$_GET['del'] ) );
	header('location: edita.php');
}
