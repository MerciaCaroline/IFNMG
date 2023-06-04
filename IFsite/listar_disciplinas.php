<?php
	session_start();
	if(isset($_SESSION["nome"])){
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
include "conexao.php";
include "includes/menu_login2.php";

$conexao = conecta_mysql();
		$sql = "SELECT * FROM disciplinas";
		$resultado = mysqli_query($conexao,$sql);

		if($resultado){
			$disciplinas = array();

			while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
				$disciplinas[]=$linha;}

			foreach($disciplinas as $disciplina){
				print "<div id='postagem' class = 'clear tamanho-450'>";
				print "Codigo da disciplina: ". $disciplina["cod_disc"];
				print "<br>Nome da disciplina: ". $disciplina["nome_disc"];
				print "<br>Carga horária: ". $disciplina["carga_hor"];
				print"</div>";}
		}
  ?>
</div>

  <div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
		<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
  </div>
</body>
</html>
