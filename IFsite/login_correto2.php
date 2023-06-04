<?php
	session_start();
	if ( !isset($_SESSION["adm"])){
	header("location:index_erro.php?erro=2");
}
	else{
    print"</br>";
    print"</br>"; //gambiarra no css
	}
?>
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
<div id='area-principal'>
<?php include "includes/menu.php";
include "includes/func_hora.php";
include "conexao.php";
include "includes/menu_login2.php";

  $hora =  bomdia();

  print"$hora,".$_SESSION["adm"]." É um prazer tê-lo novamente";

  ?>
</div>

  <div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
		<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
  </div>
</body>
</html>
