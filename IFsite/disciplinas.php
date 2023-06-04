<!doctype html>
<html>
<head>

		<title>Prova de PHP</title>
		<meta charset="utf-8">
		<meta name="description" content "Banco de Dados e PHP">
		<meta name="keywords" content="HTML, PHP">
		<meta name="author" content="Mercia Caroline N. Martins">
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

</head>
<body>

	<?php include "includes/menu_login2.php";
	include "conexao.php";

	?>

	<div id="area-principal">
		<h2> Cadastrar disciplinas</h2>
		<form action="disciplinas.php" method="POST">
	         <p>
			     <label for="COD_DISC" > Codigo da disciplina </label>
			     <input type="number" name="COD_DISC" id="COD_DISC"/> <br>
		     </p>
		     <p>
			     <label for="nome_disc" > Nome da disciplina: </label>
			     <input type="text" name="nome_disc" id="nome_disc"/> <br>
		     </p>
				 <p>
			     <label for="carga_hor" > Carga horaria: </label>
			     <input type="number" name="carga_hor" id="carga_hor"/> <br>
		     </p>
	         <input type="submit" value="Retornar"/>
			 <input type="reset" value="LIMPAR"/>
	    </form>

	</div>

		<?php
				//código PHP aqui!
				if (isset($_POST["nome_disc"])){?>
				<div id="area-principal">
					<?php
				$nome_disc = $_POST["nome_disc"];
				$carga_hor = $_POST["carga_hor"];
				$cod_disc = $_POST["COD_DISC"];
				$conexao = conecta_mysql();
				$sql = "insert into disciplinas(cod_disc,nome_disc,carga_hor) values('$cod_disc','$nome_disc','$carga_hor')";
				if (mysqli_query($conexao,$sql)){
						print "Usuario cadastrado.";
					}
				else{
					print "Erro ao cadastrar. Entre em contato com o adm do site";
				}
				}
				?>
		</div>

  <div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
		<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
  </div>
</body>
</html>
