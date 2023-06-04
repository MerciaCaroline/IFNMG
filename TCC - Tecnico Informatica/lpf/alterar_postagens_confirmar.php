<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
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
		<?php
		$id_postagem = $_GET['id_postagem'];
		include_once "conexao.php";
		$conexao = conecta_mysql();
		$sql = "SELECT * FROM postagem WHERE id_postagem=$id_postagem";
		$resultado = mysqli_query($conexao,$sql);
		if ($resultado) {
			$mensagem = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		}
	 ?>
		<div id="postagem">
			<form method="post" action="">
				<p>
					<textarea  name="mensagem" id="mensagem" maxlength="140" cols="70" rows="2"/>
					<?php
					print $mensagem['texto_postagem'];
					?></textarea>
				</p>

					<input type="submit" value="Alterar"/>
					<input type="reset" value="Cancelar"/>
			</fieldset>
			</form>
		</div>
			<?php
			include_once "conexao.php";
			if (isset($_POST["mensagem"])) {
				$mensagem = $_POST["mensagem"];
				if (strlen($mensagem)>1) {
					$conexao = conecta_mysql();
					$sql = "UPDATE postagem set texto_postagem='$mensagem'
					WHERE id_postagem='$id_postagem'";

				if (mysqli_query($conexao,$sql)) {
					print "<script language='javascript'> alert('Mensagem Alterada!') </script>";
				}
				else {
					print "<script language='javascript'> alert('Erro ao postar a Mensagem!') </script>";
				}

				}
			else {
				print "<script language='javascript'> alert('Você não digitou nada!') </script>";

			}
		}
			?>
	</div> <!-- Div Área principal -->
</body>
</html>
