<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
$id_usuario = $_SESSION['codigo'];
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
		<div id="postagem" class="clear">
			Digite o Código da postagem que deseja <b>excluir</b> <br/>
			<form action="" method="get">
				<input type="text" name="codigo" size="4"/>
				<input type="submit" value="Excluir"/>
			</form>
		</div>
		<?php
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
			foreach ($mensagens as $mensagem) {
				print "<div id = 'postagem' class = 'clear tamanho-450'>";
				print "<span class = 'negrito-maior'>".$nome_usuario."</span> <br/>";
				print "codigo da postagem:".$mensagem["id_postagem"];
				print "<br/> codigo do usuario:".$mensagem["id_usuario"];
				print "<br/> texto da postagem:".$mensagem["texto_postagem"];
				print "<br/> data da postagem:".$mensagem["data_inclusao"];
				print "</div>";
			}
		}
		if(isset($_GET['codigo'])){
			$id = $_GET['codigo'];
			$sql = "DELETE FROM postagem WHERE id_postagem = $id";
			$resultado = mysqli_query($conexao,$sql);
			if($resultado){
				print "<script language='javascript'> alert('Postagem excluida, por favor atualizar a pagina!') </script>";
			}
			else {
				print "<script language='javascript'> alert('Codigo da postagem não encontrado') </script>";
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
