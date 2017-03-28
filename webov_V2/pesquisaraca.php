<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pesquisa</title>
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
                        <?php
                         if($_SESSION['user_id'] == 1){
                                echo '<li><a href="indexadmin.php">Início</a></li>';
				echo '<li><a href="sistema_admin.php">Sistema</a></li>';
				echo '<li><a href="edita.php">Usuários</a></li>';
                         }
                         else{
                                echo '<li><a href="index.php">Início</a></li>';
				echo '<li><a href="pesquisaraca.php">Sistema</a></li>';
				echo '<li><a href="perfil.php">Perfil</a></li>';
                         }
			 ?> 
                                <li><a href="login/sair.php">Sair</a></li>
			</ul>
		</div>
	</nav>
<center><h4 >Pesquisa</h3></center>
<p>

  <form name="form1" method="post" action="resultadobusca.php" class="col s12">
  <div class="row">
  <div class="input-field col s12 m12 l2">    
      <fieldset>
          <legend>Pesquisa por Raça</legend>
          <p><input name="cxnome" type="text" id="cxnome" value="" size="30"></p>
           <input type="submit" name="pesquisar" value="Pesquisar">
           <input type="reset" name="Submit2" value="Limpar">
  </div>
  </div>
</form>
<form name="form1" method="post" action="resultadobusca.php" class="col s12">
  <div class="row">
  <div class="input-field col s12 m12 l2">    
      <fieldset>
          <legend>Pesquisa por Data</legend>
          <p><input name="cxdata" type="date" id="cxdata" value="" size="30"></p>
           <input type="submit" name="pesquisar" value="Pesquisar">
           <input type="reset" name="Submit2" value="Limpar">
  </div>
  </div>
</form>

	<!-- Jquery-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script>
</body>
</html>