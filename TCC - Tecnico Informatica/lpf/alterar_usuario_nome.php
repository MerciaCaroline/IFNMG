<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}

$codigo = $_SESSION['codigo'];
$usuario = $_SESSION['usuario'];
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
	<div id="area-principal">
		<div id="postagem">
			<form method="post" action="">
				<fieldset>
					<p>
						<label> Código do usuario </label>
						<input type="text" name="codigo" id="codigo" disabled value="<?php print $_SESSION["codigo"]?>"/>
					</p>
					<p>
						<label> Nome do usuario </label>
						<input type="text" name="usuario" id="usuario" value="<?php print $_SESSION["usuario"]?>"/>
					</p>
					<input type="submit" value="Alterar"/>
					<input type="reset" value="Limpar"/>
				</fieldset>
				</form>
		</div>
			<?php
			include_once "conexao.php";
			if(isset($_POST["usuario"])){
				$codigo = $_SESSION['codigo'];
				$usuario = $_POST['usuario'];

			if(strlen($usuario)<2){
				print "<script language='javascript'> alert('Nome do usuário precisa ter pelo menos 2 caracteres') </script>";
			}
			else{
			$conexao = conecta_mysql();
			$sql = "UPDATE usuarios SET usuario='$usuario' WHERE codigo = '$codigo'";
			if(mysqli_query($conexao,$sql)){
				$_SESSION['usuario'] = $usuario;
				header("location:login_correto.php");
			}
			else{
				print"<script language='javascript'>alert('Erro ao alterar o Usuário')</script>";
			}
		}
	}
			?>
	</div>
</body>
</html>
