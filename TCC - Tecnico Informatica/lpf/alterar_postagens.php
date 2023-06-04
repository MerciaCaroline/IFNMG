<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
$codigo = $_SESSION["codigo"];
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
		include_once "conexao.php";
		$conexao = conecta_mysql();
		$sql = "SELECT * FROM postagem WHERE id_usuario=$codigo	ORDER BY data_inclusao desc";

		$resultado = mysqli_query($conexao,$sql);
		if ($resultado) {
			$mensagens = array();
			while ($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC) ){
				$mensagens[] = $linha;
			}

			foreach ($mensagens as $mensagem) {
				print "<div id='postagem' class='clear'>";
				print "Código da Postagem: " .$mensagem["id_postagem"];
				print "<br>Código do Usuário:" .$mensagem["id_usuario"];
				print "<br>Texto da Postagem:" .$mensagem["texto_postagem"];
				print "<br>Data da Postagem:" .$mensagem["data_inclusao"];
				print "<br><a href='alterar_postagens_confirmar.php?id_postagem="
				.$mensagem["id_postagem"]."'>Alterar</a>";
				print "</div>";
				}
			}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
