<?php
	require_once("config/conexao_bd.php");
?>

<?php

if(isset($_GET["pg"])){
	$pagina = $_GET["pg"];
}
else{
	$pagina = "inicio";
}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto OAT</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-320.css" media="screen and (max-width:320px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-600.css" media="screen and (max-width:600px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-1024.css" media="screen and (max-width:1024px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-grid-1200.css" media="screen and (max-width:1200px)">
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Cadastro UninCor</h1>
			
		</div>

		<div id="menu">
			<ul>
				<li><a href="?pg=inicio">Home</a></li>
				<li><a href="?pg=cadastro">Formulário</a></li>
				<li><a href="?pg=listagem">List</a></li>
				<li><a href="?pg=sobre">Sobre</a></li>
			</ul>
		</div>		

		
			<div id="content">
			<?php

			include("paginas/".$pagina.".php");

			?>
			</div>	

		<div id="footer">
			<p>Todos os direitos reservados</p>
		</div>
		
	</div>

</body>
</html>