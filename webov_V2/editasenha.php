<?php

$id = $_GET['id'];
$form_usuario = $_GET['email'];
$form_nome = $_GET['nome'];
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
	if ( empty( $form_usuario ) || empty( $form_senha ) || empty( $form_nome ) ) {
		$erro = 'Existem campos em branco.';
	}
	
	// Verifica se o usuário existe
	$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE user = ?');
	$pdo_verifica->execute( array( $form_usuario ) );
	
	// Captura os dados da linha
	$user_id = $pdo_verifica->fetch();
	$user_id = $id;
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
		// Se o usuário existir, atualiza
		if ( ! empty( $id ) ) {
			header('location: nivellogin.php');
                        $pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET user=?, user_password=?, user_name=? WHERE user_id=?');
			$pdo_insere->execute( array( $form_usuario,  crypt( $form_senha ), $form_nome, $user_id ) );
			
		// Se o usuário não existir, cadastra novo
		} else {
                    echo 'entrei';
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (user, user_password, user_name) VALUES (?, ?, ?)');
			$pdo_insere->execute( array( $form_usuario, crypt( $form_senha ), $form_nome ) );
                        header('location: login.php');
                        
                }
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
    		<a href="#" class="brand-logo center">Alterar a Senha</a>
    		<ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><?php 
                        if($_SESSION['user_id'] == 1)
                        echo "<a href='edita.php'>Voltar</a>";
                        else 
                            echo "<a href='perfil.php'>Voltar</a>";
                        ?>    
                    </li>
        	</ul>
			</div>
		</nav>
		<br>
		<div class="row container">
                    <form action="" method="POST" class="col s12">
                                <div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input placeholder="Nome" type="text" name="form_nome" value="<?php echo $form_nome ?>"class="validate">
						<label for="first_name">Nome</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12">
                                            <input name="form_usuario" type="email" value="<?php echo $form_usuario ?>"class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12">
						<input type="password" name="form_senha" class="validate">
						<label for="password">insira a nova senha</label>
					</div>
				</div>
				<?php if ( ! empty ( $erro ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $erro;?></td>
					</tr>
				<?php endif; ?>
				<div class="row">
                                    <script>
                                        function alerta(){
                                            alert("Senha alterada com Sucesso");
                                        }
                                        </script>
					<div class="col s12">
						<button class="btn brown darken-4 waves-effect waves-light" type="submit" value="Entrar" onclick="alerta()">Salvar
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