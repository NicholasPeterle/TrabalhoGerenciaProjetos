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
	if ((empty( $form_tipo ) || empty( $form_idade ) || empty( $form_valor )
                ||empty($form_peso) || empty( $form_valorkg ) || empty( $form_valorkg ) || empty( $form_data))) {
		$erro = 'Existem campos em branco.';
	}
        
        if($erro == FALSE){
	$pdo_insere = $conexao_pdo->prepare('INSERT INTO leilao (data, tipo, idade, sexo, peso, valor, valorkg) VALUES (?, ?, ?, ?, ?, ?, ?)');
	$pdo_insere->execute( array($form_data, $form_tipo, $form_idade, $form_sexo, $form_peso, $form_valor, $form_valorkg));
        header('location: indexadmin.php');
        }
}
?>
<!Doctype html>
<html lang="pt-br">
	<head>
			<meta charset="utf-8">
			<!-- Materialize CSS -->
			<link rel="stylesheet" href="css/materialize.css">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>

	<body>
		<nav class="brown darken-4">
    		<div class="nav-wrapper container">
    		<a href="#" class="brand-logo center">Cadastrar Gado</a>
    		<ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sistema_admin.php">Voltar</a></li>
        	</ul>
			</div>
		</nav>
		<br>
		<div class="row container">
                    <form action="" method="POST" class="col s12">
				<div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input placeholder="" type="date" name="form_data" class="validate">
						<label for="first_date"></label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input name="form_tipo" type="text" class="validate">
						<label for="tipo">tipo</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input type="text" name="form_idade" class="validate">
						<label for="idade">idade</label>
					</div>
				</div>
                                <div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input type="text" name="form_sexo" class="validate">
						<label for="idade">sexo</label>
					
					</div>
				</div>
                                <div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input type="text" name="form_peso" class="validate">
						<label for="peso">peso</label>
					</div>
				</div>
                                <div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input type="text" name="form_valor" class="validate">
						<label for="valor">valor</label>
					</div>
				</div>
                                <div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input type="text" name="form_valorkg" class="validate">
						<label for="valorkg">valorkg</label>
					</div>
				</div>
				<?php if ( ! empty ( $erro ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $erro;?></td>
					</tr>
				<?php endif; ?>
				<div class="row">
					<div class="col s12">
						<button class="btn brown darken-4 waves-effect waves-light" type="submit" value="Entrar">Salvar
							<i class="material-icons right">send</i>
  						</button>
					</div>
				</div>
			</form>
		</div>
		<!-- Jquery-->
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<!-- Materialize JS -->
		<script src="js/materialize.js"></script>
	</body>
</html>