<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title> Liga HEROIS </title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="imagem/marvel-icons2.png" type="image/x-icon">
</head>
<body>
	<?php include "includes/menu.php" ?>
	<div id="area-principal">
		<div id="postagem">
			<?php
				$erro = $_GET["erro"];
				//se o erro for igual a 1 indica que o login não foi feito.
				if($erro==1){
					print"E-mail e/ou senha incorreto(s)!";
				}
				if($erro==2){
					//print"Para cadastrar uma mensagem é necessário fazer login.";
					echo "<script language='javascript'>alert('Para acessar esta página é preciso fazer Login primeiramente')</script>";
					echo "<a href='index.php'>Fazer Login</a>";
				}
			?>
		</div>
	</div>
</body>
</html>
