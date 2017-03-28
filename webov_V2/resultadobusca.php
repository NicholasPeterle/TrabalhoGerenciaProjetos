<?php
$reais = "R$";
 $kg = "kg";
// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');
$pesquisa=$_POST['pesquisar'];
if(!empty($_POST["cxnome"]) && empty($_POST["cxdata"])) 
    $nome=$_POST["cxnome"];
else  
    $data=$_POST["cxdata"];
 ?>
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
    			<li><a href="indexadmin.php">Início</a></li>
				<li><a href="sistema_admin.php">Sistema</a></li>
				<li><a href="edita.php">Usuários</a></li>
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
  <table border="1" cellpadding="5">
		<tr>
			<th>ID</th>
			<th>data</th>
			<th>Raça</th>
			<th>idade</th>
			<th>sexo</th>
                        <th>peso</th>
                        <th>valor</th>
                        <th>valor/kg</th>
</tr>
<?php
if(isset($pesquisa)&&!empty($nome)){
	
        $stmt = $conexao_pdo->prepare("select * from leilao where tipo like :letra order by valor");
	$stmt->bindValue(':letra', '%'.$nome.'%', PDO::PARAM_STR);
	$stmt->execute();
	$resultados = $stmt->rowCount();
 

		
                if($resultados>=1){
		while( $fetch = $stmt->fetch() ) {
			echo '<tr>';
			echo '<td>' . $fetch['id'] . '</td>';
			echo '<td>' . $fetch['data'] . '</td>';
			echo '<td>' . $fetch['tipo'] . '</td>';
			echo '<td>' . $fetch['idade'] . '</td>';
                        echo '<td>' . $fetch['sexo'] . '</td>';
                        echo '<td>' . $fetch['peso'] . $kg .'</td>';
                        echo '<td>' . $reais .$fetch['valor'] . '</td>';
                        echo '<td>' . $reais .$fetch['valorkg'] . '</td>';
			//echo '<td> <a style="color:red;" href="?del=' . $fetch['id'] . '">Apagar</a> </td>';
			//echo '<td> <a style="color:red;" href="editasenha.php?nome='.$fetch['user_name'] .'&email='.$fetch['user'].'&id='.$fetch['user_id'].'">Editar</a> </td>';
                        echo '</tr>';
		}
  echo "Resultado(s) encontrado(s): ".$resultados."<br /><br />";
  //while($reg = $stmt->fetch(PDO::FETCH_OBJ))
  //{     
        
       // echo $reg->id." - ";
       // echo $reg->data."<br />";
       // echo $reg->tipo."<br />";
      //  echo $reg->idade."<br />";
      //  echo $reg->sexo."<br />";
     //   echo $reg->valor."<br />";
     //   echo $reg->valorkg."<br />";
        
   //}
	}
//	else
  // {
//	echo "Não existe usuario cadastrado";
   //}
	}
 else  {
        
        $stmt = $conexao_pdo->prepare("select * from leilao where data like :letra order by valor");
	$stmt->bindValue(':letra', '%'.$data.'%', PDO::PARAM_STR);
	$stmt->execute();
	$resultados = $stmt->rowCount();



                if($resultados>=1){
		while( $fetch = $stmt->fetch() ) {
			echo '<tr>';
			echo '<td>' . $fetch['id'] . '</td>';
			echo '<td>' . $fetch['data'] . '</td>';
			echo '<td>' . $fetch['tipo'] . '</td>';
			echo '<td>' . $fetch['idade'] . '</td>';
                        echo '<td>' . $fetch['sexo'] . '</td>';
                        echo '<td>' . $fetch['peso'] . $kg .'</td>';
                        echo '<td>' . $reais .$fetch['valor'] . '</td>';
                        echo '<td>' . $reais .$fetch['valorkg'] . '</td>';
			//echo '<td> <a style="color:red;" href="?del=' . $fetch['id'] . '">Apagar</a> </td>';
			//echo '<td> <a style="color:red;" href="editasenha.php?nome='.$fetch['user_name'] .'&email='.$fetch['user'].'&id='.$fetch['user_id'].'">Editar</a> </td>';
                        echo '</tr>';
		}
  echo "Resultado(s) encontrado(s): ".$resultados."<br /><br />";
  //while($reg = $stmt->fetch(PDO::FETCH_OBJ))
  //{     
        
       // echo $reg->id." - ";
       // echo $reg->data."<br />";
       // echo $reg->tipo."<br />";
      //  echo $reg->idade."<br />";
      //  echo $reg->sexo."<br />";
     //   echo $reg->valor."<br />";
     //   echo $reg->valorkg."<br />";
        
   //}
	}
 }
//else{	
  //  echo "Preencha o campo de pesquisa";	}
 ?>

