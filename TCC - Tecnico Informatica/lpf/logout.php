<?php
	session_start();
	unset($_SESSION["codigo"]);
	unset($_SESSION["usuario"]);
	unset($_SESSION["email"]);
	header("location:index.php");
?>
