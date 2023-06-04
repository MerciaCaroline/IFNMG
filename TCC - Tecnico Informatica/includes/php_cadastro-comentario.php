	<?php
			include_once "func_cpf.php";
			include_once "valida_cnpj.php";
			include_once "../conexao.php";
			
			if (isset($_POST["nome"]) ){
				$nome = $_POST["nome"];
				$sobrenome = $_POST["sobrenome"];
				$sexo = $_POST["sexo"];
				$email= $_POST["email"];
                $texto= $_POST["texto"];
                $conexao = conecta_mysql();
				if(strlen($nome)<3){
					print "<script language='javascript'> alert('Nome deve ter mais de 3 caracteres.')</script>";
                    print "<script language='javascript'> location.href='../index.php'</script>";
				}
				else{
				$sql = "insert into contato(nome,sobrenome,sexo,email,texto) values('$nome','$sobrenome','$sexo','$email','$texto')";
					if (mysqli_query($conexao,$sql)){
                        print "<script language='javascript'> alert('Mensagem Enviada')</script>";
                        print "<script language='javascript'> location.href='../index.php'</script>";
					}
					else{
                        print "<script language='javascript'> alert('Erro ao Enviar Mensagem')</script>";
                        // print "<script language='javascript'> location.href='../index.php'</script>";
					}
				}
								
			}
		?>