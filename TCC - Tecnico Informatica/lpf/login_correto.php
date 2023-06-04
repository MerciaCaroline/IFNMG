<?php
session_start();
include_once "conexao.php";
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
$id_usuario = $_SESSION["codigo"];
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

		<div id="div-pessoal" class="borda-arredondada">
			<center><span class="ima"><?php print "<img src=".$_SESSION["imagem"]." class='redondo' width='75px' rigth='40px'>";?></span><br/></center>
			<center><span class="negrito-maior"><?php print $_SESSION["usuario"] ?></span></center>
			<center><span class="italico"><?php print $_SESSION["email"] ?></span> <br/><br/></center>
			<hr/>
			<center>
				<table>
					<tr>
						<td width="100px" > POSTAGENS <br/><?php
						include_once "conexao.php";
						$nome_usuario = $_SESSION['usuario'];
						$conexao = conecta_mysql();
						$sql = "SELECT * FROM postagem WHERE id_usuario = $id_usuario order by data_inclusao desc";
						$resultado = mysqli_query($conexao,$sql);
						if($resultado){
							$mensagens = array();
							while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
								$mensagens[] = $linha;
							}
							print count($mensagens);
						}
						 ?></td>
						<td width="100px">SEGUIDORES <br/>
							<?php
							$sql = "SELECT * FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario";
							$resultado = mysqli_query($conexao,$sql);
							if($resultado){
								$mensagens = array();
								while($linha = mysqli_fetch_array($resultado)){
									$mensagens[] = $linha;
								}
								print count($mensagens);
							}
							 ?>
						</td>
					</tr>
				</table>
			</center>
		</div>
		<div id="div-postagem" class="borda-arredondada">
			<form method="post" action="">
				<p>
					<textarea id="mensagem" name="mensagem" maxlength="120" cols="52" rows="11"
					placeholder="<?php print "Qual a grande novidade da liga?"?>"></textarea>
				</p>
				<input type="submit" value="Postar"/>
				<input type="reset" value="Cancelar"/>
			</form>
			<?php
			$id_usuario = $_SESSION["codigo"];
			if(isset($_POST["mensagem"])){
				$mensagem = $_POST["mensagem"];
				if(strlen($mensagem)>1){
					$conexao = conecta_mysql();
					$sql = "insert into postagem(texto_postagem,id_usuario)
					values('$mensagem','$id_usuario')";
					$resultado = mysqli_query($conexao,$sql);
					if($resultado){
						print "<script language = 'javascript'> alert('Postagem realizada com Sucesso!') </script> ";
					}
					else{
						print "<script language = 'javascript'> alert('Postagem não realizada!') </script> ";
					}
				}
				else{
					print "<script language = 'javascript'> alert('Campo da mensagem em branco!') </script> ";
				}
			}

			?>
		</div>
		<div id="div-procurar-pessoa" class="borda-arredondada">
			<br/>
			<a href="procurar_pessoas.php"><br/><br/></p><center><img src="imagem/worker.png"></center><center>Procure os heróis</center></a>
			<br/><br/>
		</div>
		<div id="postagem" class="clear">
		<?php print"Hoje é ".date("d/M/Y").", horário atual: ".date("H:i");?>
		</div>
		<?php
			include_once "conexao.php";
			$nome_usuario = $_SESSION['usuario'];
			$conexao = conecta_mysql();
			$sql = "SELECT u.usuario,u.imagem,p.texto_postagem, date_format(data_inclusao, '%d %b %Y, %T') as data_formatada
			FROM postagem AS p JOIN usuarios as u ON (u.codigo=p.id_usuario)
			WHERE id_usuario = $id_usuario
			OR id_usuario IN (SELECT seguindo_id_usuario FROM usuarios_seguidores WHERE id_usuario = $id_usuario)
			order by data_inclusao desc";
			$resultado = mysqli_query($conexao,$sql);
			if($resultado){
				$mensagens = array();
				while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
					$mensagens[] = $linha;
				}
				foreach ($mensagens as $mensagem) {
					print "<div id = 'postagem' class = 'clear tamanho-450'>";
					print "<span class='italico'>".$mensagem["data_formatada"]."</span>";
					print "<div id ='imgs'> <img src=".$mensagem['imagem']." class='redondo' height='70px' rigth='20px'> </div>";
					print "<br/><span class = 'negrito-maior'>".$mensagem["usuario"]."</span>";
					//print "codigo da postagem:".$mensagem["id_postagem"];
					//print "<br/> codigo do usuario:".$mensagem["id_usuario"];
					print "<br/>".$mensagem["texto_postagem"];

					//
					print "</div>";
				}
			}
			?>
		</div>
	</div> <!-- Div Área principal -->
</body>
</html>
