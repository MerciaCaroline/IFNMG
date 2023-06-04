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
	<?php include "includes/menu.php";
	include "conexao.php";
	session_start();
	?>

	<div id="area-principal">
	<h2> Login dos alunos </h2>
		<form action="login.php" method="POST">
			<p>
				<select name="tipo">
					<option value="adm">Admnistrador</option>
					<option value="aluno">Aluno</option>
				</select>
			</p>
			<p>
				<label for="login" > Login: </label>
				<input type="text" name="login" id="login"/> <br>
			</p>
			<p>
				<label for="senha" > Senha: </label>
				<input type="password" name="senha" id="senha"/> <br>
			</p>
			<input type="submit" value="Retornar"/>
			<input type="reset" value="LIMPAR"/>
		</form>

	</div>
	<?php

	//código PHP aqui!
	if (isset($_POST["senha"])){
		$tipo = $_POST["tipo"]; //recebe o tipo de login
		$login = $_POST["login"];
		$senha = md5($_POST["senha"]);
		$conexao = conecta_mysql();

if($tipo == "aluno"){
		$sql = "SELECT * FROM alunos where cpf= '$login' and senha = '$senha'";
				print $tipo;
		$resultado_id = mysqli_query($conexao,$sql);/*pra enviar os comandos*/
		print $tipo;

		if($resultado_id){ /*se a consulta foi feita*/
			$dados_usuario = mysqli_fetch_array($resultado_id); /*transforma a resposta em vetor*/

			if(isset($dados_usuario["matricula"])){ /*se retornou algum usuario*/
	     $_SESSION["nome"] = $dados_usuario["nome"] ;
				header("location:login_correto.php");
			}
			else {
				print "Erro na execução da consulta, favor entrar em contato com o admin do site";
			}} //fecha o if do resultado
		else{print"Login incorreto";}
	}
	else if($tipo=="adm"){
		$sql = "SELECT * FROM administrador where nome_adm= '$login'	and senha_adm = '$senha'";
		$resultado_id = mysqli_query($conexao,$sql);/*pra enviar os comandos*/

		if($resultado_id){ /*se a consulta foi feita*/
			$dados_usuario = mysqli_fetch_array($resultado_id); /*transforma a resposta em vetor*/
			if(isset($dados_usuario["cod_adm"])){ /*se retornou algum usuario*/
				$_SESSION["adm"]=	$dados_usuario["nome_adm"];
				header("location:login_correto2.php");
			}
			else {
				print "Erro na execução da consulta, favor entrar em contato com o admin do site";
			}} //fecha o if do resultado
		else{print"Login incorreto";}
	}
}//fecha o isset

	?>
</div>

<div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
	<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
</div>
</body>
</html>
