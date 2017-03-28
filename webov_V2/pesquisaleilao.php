<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>pesquisa simples com PDO</title>
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
				<li><a href="login/sair.php">Sair</a></li>
			</ul>
		</div>
	</nav>
<center><h4 >Pesquisa Boi</h3></center>
<p>

  <form name="form1" method="post" action="resultadobusca.php" class="col s12">
  <div class="row">
  
  <div class="input-field col s12 m12 l2">    
  <input name="cxnome" type="text" id="cxnome" value="" size="30">
  </div>
  </div>
  
  <label>
  &nbsp;&nbsp;
  <input type="submit" name="pesquisar" value="Pesquisar">
  </label>
&nbsp;
<label>
<input type="reset" name="Submit2" value="Limpar">
</label>
</form>
	<!-- Jquery-->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.js"></script>
</body>
</html>