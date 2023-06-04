<?php
	function conecta_mysql(){
		$host = "localhost"; /*máquina*/
		$usuario = "root"; /*usuario do BD*/
		$senha = ""; /*senha do bd*/
		$nome_bd = "php02"; /*bd*/

		$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
		mysqli_set_charset($conexao, "utf8"); /* o connect e a lingua*/

		return $conexao;
	}
?>
