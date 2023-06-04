
<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

	<?php include "includes/menu.php";
  print"</br>";
  print"</br>"; //gambiarra do css
?>
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
