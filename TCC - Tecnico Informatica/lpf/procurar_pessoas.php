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
	<?php include "includes/menu-login.php";
	include "conexao.php" ?>
	<div id="div-area-principal">
		<div id="postagem" class="clear">
			<fieldset>
			<form method="post" action="">
				<p>
					<label></label>
					<input type="procurar" name="procurar" id="procurar" placeholder="Quem você esta procurando?"/>
				</p>
				 <input type="submit" value="Procurar"/>

			</form>
		</div>
		<?php
		if(isset($_POST["procurar"])){
			$procurar = $_POST["procurar"];
			$codigo = $_SESSION["codigo"];
			$conexao = conecta_mysql();

			$sql = "SELECT codigo, usuario FROM usuarios where usuario like '%$procurar%' AND codigo <> $codigo";
			$resultado = mysqli_query($conexao,$sql);
			if($resultado){
				$usuarios = array();
				while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
					$usuarios[] = $linha;
				}
				foreach ($usuarios as $usuario) {
					print "<div id='postagem' class='clear'>";
					print "<span class='negrito-maior' Nome do Usuário:>".$usuario['usuario']."</span>";

					$codigo_usuario_seguindo = $usuario['codigo'];
					$sql = "SELECT * FROM usuarios_seguidores WHERE id_usuario = '$codigo' and seguindo_id_usuario = $codigo_usuario_seguindo";
					$resultado2 = mysqli_query($conexao,$sql);
					$usuario_pesquisado = mysqli_fetch_array($resultado2);

					if(isset($usuario_pesquisado['id_usuario_seguidor'])){
					print "<a href='procurar_pessoas_deixar_seguir.php?codigo=";
					print($usuario['codigo'])."'> Deixar de Seguir </a>";
				}
				else {
					print "<a href='procurar_pessoas_seguir.php?codigo=";
					print($usuario['codigo'])."'> Seguir </a></span>";
				}
					print "</div>";
				}
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
