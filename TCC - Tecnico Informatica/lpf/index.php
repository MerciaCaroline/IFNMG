<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content=""/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content=""/>
	<title> LPF </title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="" type="">
</head>
<body>

	<?php include "includes/menu.php" ?>

	<div id="area-principal">
		<div id="postagem">
			<form method="post" action="">
				<table>
					<tr>	<td> <label>E-mail do usuario</label> </td>
						<td> <input type="email" name="email" id="email" autocomplete="off" autofocus/> </td>
					</tr>
					<tr> 	<td> <label>Senha</label> </td>
						<td> <input type="password" name="senha" id="senha"/>	</td>
						<tr>	<th colspan="2">
							<input type="submit" value="Login"/>
							<input type="reset" value="limpar"/>
						</th>
					</tr>
				</table>
			</form>
			<br/> Novo por aqui? <a href="cadastro_usuario.php">Inscreva-se Agora >></a>
			<?php
			session_start();
			include "conexao.php";
			if ( isset($_POST["email"]) ){
				$email = $_POST["email"];
				$senha = md5($_POST["senha"]);

				$conexao = conecta_mysql();
				$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
				$resultado_id = mysqli_query($conexao,$sql);
				if ($resultado_id){
					$dados_usuario = mysqli_fetch_array($resultado_id);
					if ( isset($dados_usuario["usuario"]) ){
						$_SESSION["codigo"] = $dados_usuario["codigo"];
						$_SESSION["usuario"] = $dados_usuario["usuario"];
						$_SESSION["imagem"] = $dados_usuario["imagem"];
						$_SESSION["email"] = $dados_usuario["email"];
						header("location:login_correto.php");
					}
					else{
							echo "<script language='javascript'> alert('E-mail ou senha incorreto!') </script>";
					}
				}
				else {
					print "Erro na execução da consulta, favor entrar em contato com o admin do site";
				}

			}//fechando o isset
			?>
		</div>
	</div>
</body>
</html>
