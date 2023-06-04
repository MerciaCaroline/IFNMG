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
				<p>
					<label>E-mail Atual</label> </td>
					<input type="text" name="email" id="email" />
				</p>

				<p>
					<label>Novo E-mail</label> </td>
					<input type="text" name="email2" id="email2"/>
				</p>

				<p>
					<label>Digite Novamente o E-mail</label> </td>
					<input type="text" name="email3" id="email3"/>
				</p>

					<input type="submit" value="Alterar"/>
					<input type="reset" value="Cancelar"/>

			</form>
		</div>
			<?php
			include "conexao.php";
			if (isset($_POST["email"]) ){
				$email = $_POST["email"];
				$email2 = $_POST["email2"];
				$email3 = $_POST["email3"];

				$conexao = conecta_mysql();
				$sql = "SELECT * FROM usuarios WHERE email = '$email' AND codigo = '$codigo'";
				$resultado_email = mysqli_query($conexao,$sql);
				if ($resultado_email){
					$dados_usuario = mysqli_fetch_array($resultado_email,MYSQLI_ASSOC);
					$cemail = $dados_usuario["email"];

					if ($cemail == $email) {
						if (strlen($cemail) > 2) {
						if ($email2 == $email3){
							$conexao = conecta_mysql();
							$sql = "UPDATE usuarios SET  email='$email2' WHERE codigo='$codigo'";
							$resultado = mysqli_query($conexao,$sql);
							if ($resultado){
									echo "<script language='javascript'> alert('E-mail alterada!') </script>";
								}
						}
						else {
							echo "<script language='javascript'> alert('E-mail diferentes!') </script>";
						}
			}
			else {
				echo "<script language='javascript'> alert('E-mail deve ter no minimo 2 caracter!') </script>";
					}
				}
				else {
					echo "<script language='javascript'> alert('Digite E-mail atual correto!') </script>";
						}
			}
		}//fechando o isset


			?>
	</div>
</body>
</html>
