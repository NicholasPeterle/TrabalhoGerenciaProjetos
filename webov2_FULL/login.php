<?php
// Inicia a sessão
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


        <link rel="stylesheet" href="login/loginCss/css/style.css">

        <title>Login</title>
    </head>
    <body>
        <form action="index.php" method="post">
            
            <div class="wrap">
                <div class="avatar">
                    <img src="login/loginCss/Logo Mundo Boi.jpg">
                </div>
                <input type="text" name="usuario" placeholder="email" required>
                <div class="bar">
                    <i></i>
                    
                </div>
                
                <input type="password" name="senha" placeholder="senha" required>
                <a href="" class="forgot_link">esqueceu?</a>
                <?php if (!empty($_SESSION['login_erro'])) : ?>
                    <tr>
                        <td style="color:red;"><?php echo $_SESSION['login_erro']; ?></td>
                        <?php $_SESSION['login_erro'] = ''; ?>
                    </tr>
                <?php endif; ?>
                    <br><br>
                    <button type="submit" value="Entrar">Entrar</button><br>
                    <td><a href="cadastrar.php">Cadastrar-se</a></td>
            </div>

                <?php if (!empty($_SESSION['login_erro'])) : ?>
                    <tr>
                        <td style="color: red;"><?php echo $_SESSION['login_erro']; ?></td>
                        <?php $_SESSION['login_erro'] = ''; ?>
                    </tr>
                <?php endif; ?>

                
            </table>
        </form>
    </body>
</html>