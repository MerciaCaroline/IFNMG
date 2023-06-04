<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index_erro.php?erro=2");
}
$codigo = $_SESSION['codigo'];
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
			<?php
			if(isset($_GET['codigo'])){
				$id_usuario= $_SESSION['codigo'];
				$id_usuario_seguir = $_GET['codigo'];
				include "conexao.php";
				$conexao = conecta_mysql();
				$sql = "INSERT INTO usuarios_seguidores(id_usuario, seguindo_id_usuario) values('$id_usuario','$id_usuario_seguir')";
				$resultado = mysqli_query($conexao,$sql);
				if($resultado){
					print "Você esta seguindo o usuario";				}
			}
			else {
				print "Problema ao tentar seguir o usuario, tente novamente";
			}
			?>
		</div>

	</div> <!-- Div Área principal -->
</body>
</html>
