<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="utf-8">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>

</head>
<body>

    <nav class="brown darken-4">
        <div class="nav-wrapper container">
            <a href="login.php" class="brand-logo center">WeBov</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="cadastrar.php">Cadastrar-se</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="row container">
        
        <form action="nivellogin.php" method="post" class="col s12">
            <div class="row">
                <div class="row container left"> <h5> Login</h5></div>
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="text" name="usuario" class="validate">
                    <label for="icon_email">Email</label>
                </div>
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_lock" type="password" name="senha" class="validate">
                    <label for="icon_lock">Senha</label>
                    
                    <a href="" class="forgot_link">Esqueceu a senha?</a>
                    <?php if (!empty($_SESSION['login_erro'])) : ?>
                    <tr>
                        <td style="color:red;"><?php echo $_SESSION['login_erro']; ?></td>
                        <?php $_SESSION['login_erro'] = ''; ?>
                    </tr>
                    <?php endif; ?>
                    <br><br>
                    <div class="col s12 center">
                        <button class="btn brown darken-4 waves-effect waves-light" type="submit" value="Entrar">Entrar
                        	<i class="material-icons right">send</i>
                        </button>
                    </div>
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