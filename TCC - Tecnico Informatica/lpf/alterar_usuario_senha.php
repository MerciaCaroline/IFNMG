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
	<div id="area-principal">
		<div id="postagem">
			<form method="post" action="">
				<fieldset>
					<p>
						<label> Senha atual: </label>
						<input type="password" name="senhat" id="senhat"/>
					</p>
					<p>
						<label> Nova Senha: </label>
						<input type="password" name="senha" id="senha"/>
					</p>
					<p>
						<label> Repetir nova senha: </label>
						<input type="password" name="senharep" id="senharep"/>
					</p>
					<input type="submit" value="Alterar"/>
					<input type="reset" value="Limpar"/>
				</fieldset>
				</form>
		</div>
			<?php
			include "conexao.php";
			if (isset($_POST["senhat"]) ){
				$senhat = md5($_POST["senhat"]);
				$senha = md5($_POST["senha"]);
				$senharep = md5($_POST["senharep"]);

				$conexao = conecta_mysql();
				$sql = "SELECT * FROM usuarios WHERE senha = '$senhat' AND codigo = '$codigo'";
				$resultado_senha = mysqli_query($conexao,$sql);
				if ($resultado_senha){
					$dados_usuario = mysqli_fetch_array($resultado_senha,MYSQLI_ASSOC);
					$csenha = $dados_usuario["senha"];
				if (strlen($senha) > 2) {
					if ($csenha == $senhat) {
						if ($senha == $senharep){
							$conexao = conecta_mysql();
							$sql = "UPDATE usuarios SET  senha='$senha' WHERE codigo='$codigo'";
							$resultado = mysqli_query($conexao,$sql);
							if ($resultado){
									echo "<script language='javascript'> alert('senha alterada!') </script>";
								}
						}
						else {
							echo "<script language='javascript'> alert('senhas diferentes!') </script>";
						}
			}
			else {
				echo "<script language='javascript'> alert('Digite sua senha atual correta!') </script>";
					}
				}
				else {
					echo "<script language='javascript'> alert('Senha deve ter no minimo 2 caracter!') </script>";
						}
			}
			}//fechando o isset

			?>
	</div>
</body>
</html>
