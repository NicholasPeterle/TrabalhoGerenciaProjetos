<?php
// Inclui o arquivo de configuração
//TESTE
include('login/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis]
      
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
		
		// Verifica se existe algum campo em branco
		if ( empty ( $valor ) ) {
			// Preenche o erro
			$erro = 'Existem campos em branco.';
		}
	}
	
	// Verifica se as variáveis foram configuradas
	if (empty( $form_tipo ) || empty( $form_idade ) || empty( $form_valor )
                ||empty($form_peso) || empty( $form_valorkg ) || empty( $form_data)) {
		$erro = 'Existem campos em branco.';
	}
	
	// Verifica se o usuário existe
	//$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE user = ?');
	//$pdo_verifica->execute( array( $form_usuario ) );
	
	// Captura os dados da linha
	//$user_id = $pdo_verifica->fetch();
	//$user_id = $user_id['user_id'];
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
                    echo 'entrei';
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO leilao (tipo, idade, valor, valorkg, data, peso) VALUES (?, ?, ?, ?, ?, ?)');
			$pdo_insere->execute( array( $form_tipo, $form_idade, $form_valor, $form_valorkg, $form_data, $form_peso));
                        header('location: indexadmin.php');  
                }
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Leilões</title>
	<!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<!-- Navebar do Admin-->
	<nav class="brown darken-4">
    	<div class="nav-wrapper container">
    		<a href="casdastrar_leiloes.phtml" class="brand-logo">Cadastrar Leilões</a>
    		<ul id="nav-mobile" class="right hide-on-med-and-down">
    			<li><a href="indexadmin.php">Início</a></li>
				<li><a href="sistema_admin.php">Sistema</a></li>
				<li><a href="edita.php">Usuários</a></li>
				<li><a href="login/sair.php">Sair</a></li>
			</ul>
		</div>
	</nav>
	<br>
	<div class="row container">
            <form action="" method="POST" class="col s12">
			<div class="row">
				<label>Data do Leilão</label>
				<div class="input-field col s12 m12 l12">
					<input id="data" name="form_data" type="date" class="datepicker">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="raca" name="form_raca" type="text" class="validate">
					<label for="raca">Raça</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="idade" name="form_idade" type="text" class="validate">
					<label for="idade">Idade</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="peso" name="form_peso" type="text" class="validate">
					<label for="peso">Peso</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="valor" name="form_valor" type="text" class="validate">
					<label for="valor">Valor</label>
				</div>
			</div>
                        <div class="row">
				<div class="input-field col s12 m12 l12">
					<input id="valorkg" name="form_valorkg" type="text" class="validate">
					<label for="valorkg">Valor Kg</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<button class="btn brown darken-4 waves-effect waves-light" type="submit" value="Entrar">Cadastrar
					<i class="material-icons right">send</i>
  					</button>
				</div>
			</div>
		</form>
	</div>
	<!-- Jquery-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script
</body>
</html>