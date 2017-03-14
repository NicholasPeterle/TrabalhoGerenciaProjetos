<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis
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
	$user_id = $user_id['user_id'];
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
		// Se o usuário existir, atualiza
		if ( ! empty( $user_id ) ) {
			header('location: login.php');
                        $pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET user=?, user_password=?, user_name=? WHERE user_id=?');
			$pdo_insere->execute( array( $form_usuario,  crypt( $form_senha ), $form_nome, $user_id ) );
			
		// Se o usuário não existir, cadastra novo
		} else {
                        
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (user, user_password, user_name) VALUES (?, ?, ?)');
			$pdo_insere->execute( array( $form_usuario, crypt( $form_senha ), $form_nome ) );
                        header('location: login.php');
                        
                }
	}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


        <link rel="stylesheet" href="login/loginCss/css/style.css">

        <title>Cadastrar</title>
    </head>
    <body>
        <form action="" method="post">
            
            <div class="wrap">
                <div class="avatar">
                    <img src="login/loginCss/Logo Mundo Boi.jpg">
                </div>
               
                <input type="text" name="form_nome" placeholder="Nome" required>
                <div class="bar">
                    <i></i>
                    
                </div>
                
                <input type="text" name="form_usuario" placeholder="Email" required>
                <div class="bar">
                    <i></i>
                    
                </div>
                <input type="password" name="form_senha" placeholder="Senha" required>
                
                <?php if ( ! empty ( $erro ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $erro;?></td>
					</tr>
				<?php endif; ?>
                 <br>                       
                <button type="submit" value="Entrar">Cadastrar</button><br>
                </script>
            </form>
	</body>
</html>
