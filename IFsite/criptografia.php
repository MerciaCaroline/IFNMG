<!doctype html>
<html>
<head>

		<title>Criptografia</title>
		<meta charset="utf-8">
		<meta name="description" content "Banco de Dados e PHP">
		<meta name="keywords" content="HTML, PHP">
		<meta name="author" content="Mercia Caroline N. Martins">
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

</head>
<body>

<?php include "includes/menu.php";
include "conexao.php";

?>

	<div id="area-principal">
		<h2> Criptografia </h2>
		<form action="criptografia.php" method="POST">
		     <p>
			     <label for="nome" > Nome: </label>
			     <input type="text" name="nome" id="nome"/> <br>
		     </p>
				 <p>
			     <label for="senha" > Senha: </label>
			     <input type="password" name="senha" id="senha"/> <br>
		     </p>
	         <input type="submit" value="Retornar"/>
			 <input type="reset" value="LIMPAR"/>
	    </form>

	</div>
	<?php
			#código PHP aqui!
			if (isset($_POST["nome"])){ ?>
				<div id="area-principal">

        <?php
				$nome = $_POST["nome"];
				$senha = $_POST["senha"];
				print"$nome <br> $senha <br>";
				print md5($senha);
				print"<br>";
				print sha1($senha);
				print"<br>";
				$base64= base64_encode($senha);
				print "$base64 <br>";
				print base64_decode($base64);
			}
				print"</div>";
				?>


  <div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
		<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
  </div>
</body>
</html>
