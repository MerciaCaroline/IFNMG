<!doctype html>
<html>
<head>

		<title>Prova de PHP</title>
		<meta charset="utf-8">
		<meta name="description" content "Avaliação do professor Romulo Silveira Ramos.">
		<meta name="keywords" content="HTML, PHP">
		<meta name="author" content="Mércia Caroline N. Martins">
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

</head>
<body>
	<div id="menu">
			 |<a href="exercicio1.html"><h7>Exercício 1</h7></a> |
			<a href="exercicio2.html"><h7>Exercício 2</h7></a> |
	</div>

  </div>
	<div id= "area-principal">
		<h2> Deixe aqui sua opinião </h2>

	<form action="funcao2.php" method="POST">
	         <p>
			   <label for="nome"> Nome: </label>
			   <input type="text" name="nome" id="nome"/> <br>
		     </p>
			 <p>
			    <label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha"></br>
			 </p>
			 <p>
			    <label for="senha2">Repetir Senha: </label>
				<input type="password" name="senha2" id="senha2"></br>
			 </p>
			 <p>
			     <label for="cpf" > CPF: </label>
			     <input type="number" name="cpf" id="cpf"/> <br>
		     </p>
			 <p>
			   <label for="end"> Endereço: </label>
			   <input type="text" name="end" id="end"/> <br>
		     </p>
			   <label for ="mensagem"> Opinião: </label>
			   <textarea name="mensagem" wrap="VIRTUAL" id="mensagem"></textarea><br></br>
	         <input type="submit" value="Retornar"/>	
			 <input type="reset" value="LIMPAR"/>	
	    </form>
</div>
 <div id="rodape" class="posicao"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador: <a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
</div>
</body>
</html>
