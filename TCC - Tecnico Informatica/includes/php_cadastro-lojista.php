<?php
	include_once "func_cpf.php";
	include_once "valida_cnpj.php";
	include_once "../conexao.php";
	
	if (isset($_POST["nome"]) ){
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$sexo = $_POST["sexo"];
		$telefone1 = $_POST["telefone1"];
		$telefone2 = $_POST["telefone2"];
		$endereco= $_POST["endereco"];
		$cidade= $_POST["cidade"];
		$cep= $_POST["cep"];
		$email= $_POST["email"];
		$cpf= $_POST["cpf"];
		$cnpj= $_POST["cnpj"];
		$conexao = conecta_mysql();
		if(strlen($nome)<3){
			print "<script language='javascript'> alert('Nome deve ter mais de 3 caracteres.')</script>";
			print "<script language='javascript'> location.href='../index.php'</script>";
		}
		else{
			$sql = "select * FROM lojistas WHERE email = '$email'";
			$resultado_id = mysqli_query($conexao,$sql);
			$dados_usuario = mysqli_fetch_array($resultado_id);
			if (!empty($dados_usuario)){
				print "<script language='javascript'> alert('E-mail já cadastrado, favor utilize outro.')</script>";
				print "<script language='javascript'> location.href='../index.php'</script>";
			}
			else{
				$sql = "insert into lojistas(nome,sobrenome,sexo,telefone1,telefone2,endereco,cidade,cep,email,cpf,cnpj)
				values('$nome','$sobrenome','$sexo','$telefone1','$telefone2','$endereco','$cidade','$cep','$email','$cpf','$cnpj')";
				if (mysqli_query($conexao,$sql)){
					print "<script language='javascript'> alert('Lojista Cadastrado')</script>";
					print "<script language='javascript'> location.href='../index.php'</script>";
				}
				else{
					print "<script language='javascript'> alert('Erro ao Cadastrar Lojista')</script>";
					print "<script language='javascript'> location.href='../index.php'</script>";
				}
			}
		}
			
	}

	?>