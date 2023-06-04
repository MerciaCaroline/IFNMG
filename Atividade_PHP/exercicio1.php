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

	<div id="area-principal">
		<h2> Condições de pagamento </h2>
		<span class="data-postagem">10 de Maio de 2017 </span>
		<form action="funcao.php" method="POST">
	         <p>
			     <label for="preco" > Digite o preço da mercadoria: </label>
			     <input type="text" name="preco" id="preco"/> <br>
		     </p>
		     <p>
			     <label for="codigo" > Digite o codigo: </label>
			     <input type="number" name="codigo" id="codigo"/> <br>
		     </p>
	         <input type="submit" value="Retornar"/>	
			 <input type="reset" value="LIMPAR"/>	
	    </form>

	</div>

  <div id="rodape"><p id="texto-rodape"> Desenvolvivo por Mércia Caroline | Professor orientador:
		<a href="http://www.romulo.info">Rômulo Silveira Ramos</a></p>
  </div>
</body>
</html>
