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

	<?php include "includes/menu.php" ?>

	<div id="area-principal">
		<div id="postagem">
			<form method="post" action="">
				<p>
					<label>Nome do usuario</label>
					<input type="text" name="usuario" id="usuario"/>
				</p>
				<p>
					<label>E-mail</label>
					<input type="email" name="email" id="email"/>
				</p>
				<p>
					<label>Senha</label>
					<input type="password" name="senha" id="senha"/>
				</p>
				<p>
					<label>Repetir a Senha</label>
					<input type="password" name="senha2" id="senha2"/>
				</p>
				<input type="submit" value="enviar"/>
				<input type="reset" value="limpar"/>
			</form>
		</div>
			<?php
			include "conexao.php";
			if ( isset($_POST["usuario"]) ){
				$usuario = $_POST["usuario"];
				$email = $_POST["email"];
				$senha = $_POST["senha"];
				$senha2 = $_POST["senha2"];

				if( strlen($usuario)<2 ){
					print "<script language='javascript'> alert('Nome do usuário precisa ter pelo menos 2 caraceres') </script>";
				}
				else if (strlen($email) == 0){
					print "<script language='javascript'> alert('O e-mail não pode estar em branco!') </script>";
				}
				else if (strlen($senha) < 1){
					print "<script language='javascript'> alert('A Senha não pode estar em branco!') </script>";
				}
				else if($senha != $senha2){
					print "<script language='javascript'> alert('As senhas não coincidem!') </script>";
				}
				else{
					$senha = md5($senha);
					$conexao = conecta_mysql();
					$sql = "SELECT * FROM usuarios WHERE email = '$email'";
					$resultado = mysqli_query($conexao,$sql);
					$resposta = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
					if(isset($resposta["email"])){
						print	"E-mail já Cadastrado";
					}
					else{
						$sql = "insert into usuarios(usuario,email,senha)
						values('$usuario','$email','$senha')";

						if( mysqli_query($conexao,$sql) ){
							header("location:login.php?email=$email&senha=$senha");

						}
						else{
							print"Erro ao Registrar o Usuário!";
						}
					}
				}
			} //fechando o isset
			?>
	</div>
</body>
</html>
