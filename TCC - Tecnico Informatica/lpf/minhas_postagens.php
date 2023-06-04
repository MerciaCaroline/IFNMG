<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
$id_usuario = $_SESSION['codigo'];
?>
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
	<?php include "includes/menu-login.php" ?>
	<div id="div-area-principal">
		<div id="postagem" class="clear">
			<?php print"Hoje é ".date("d/M/Y").", horário atual: ".date("H:i");?>
		</div>
		<?php
		//código da consulta aqui
		include_once "conexao.php";
		$nome_usuario = $_SESSION['usuario'];
		$conexao = conecta_mysql();
		$sql = "SELECT texto_postagem, date_format(data_inclusao, '%d %b %Y, %T') as data_formatada FROM postagem WHERE id_usuario = $id_usuario order by data_inclusao desc";
		$resultado = mysqli_query($conexao,$sql);
		if($resultado){
			$mensagens = array();
			while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
				$mensagens[] = $linha;
			}
			foreach ($mensagens as $mensagem) {
				print "<div id = 'postagem' class = 'clear tamanho-450'>";
				print "<span class='italico'>".$mensagem["data_formatada"]."</span>";
				print "<br/><span class = 'negrito-maior'>".$nome_usuario."</span>";
				//print "<br/><span class = 'negrito-maior'>".$mensagem["usuario"]."</span>";
				//print "codigo da postagem:".$mensagem["id_postagem"];
				//print "<br/> codigo do usuario:".$mensagem["id_usuario"];
				print "<br/>".$mensagem["texto_postagem"];

				print "</div>";
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
