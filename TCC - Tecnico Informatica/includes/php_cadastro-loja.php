	<?php
			include_once "func_cpf.php";
			include_once "valida_cnpj.php";
			include_once "../conexao.php";
			
			if (isset($_POST["nome_loja"]) ){
				$nome_loja = $_POST["nome_loja"];
				$telefone1 = $_POST["telefone1"];
				$telefone2 = $_POST["telefone2"];
				$endereco= $_POST["endereco"];
				$cidade= $_POST["cidade"];
				$cep= $_POST["cep"];
				$cnpj= $_POST["cnpj"];
				$email= $_POST["email"];
				$categoria= $_POST["categoria"];
				$conexao = conecta_mysql();
				if(strlen($nome_loja)<3){
                    print "<script language='javascript'> alert('Nome deve ter mais de 3 caracteres.')</script>";
                    print "<script language='javascript'> location.href='../index.php'</script>";

				}
				else{
					$sql = "select * FROM lojistas WHERE cnpj = '$cnpj'";
                    $resultado_id = mysqli_query($conexao,$sql);
					$dados_usuario = mysqli_fetch_array($resultado_id);
					if (!empty($dados_usuario)){
						$sql = "insert into loja(nome_loja,telefone1,telefone2,endereco,cidade,cep,cnpj,email,categoria)
						values('$nome_loja','$telefone1','$telefone2','$endereco','$cidade','$cep','$cnpj','$email','$categoria')";
						if (mysqli_query($conexao,$sql)){
                            print "<script language='javascript'> alert('Loja Cadastrada')</script>";
                            print "<script language='javascript'> location.href='../index.php'</script>";
							}
						else{
                            print "<script language='javascript'> alert('Erro ao Cadastrar Loja')</script>";
                            print "<script language='javascript'> location.href='../index.php'</script>";
							}
					}
					else{
                        print "<script language='javascript'> alert('CNPJ não cadastrado.')</script>";
                        print "<script language='javascript'> location.href='../index.php'</script>";
					
					 }
					}
					
			}
			?>
	</div>