<!DOCTYPE html!>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="author" content=""/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="tcc, ifnmg, informatica, tecnico, 3 ano"/>
	<title>My Home Janaúba</title>
	<link rel="icon" type="image/png" href="imagens/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body class="bg-secondary">

	<?php include "includes/menu.php" ?>

	<?php include "modal-academia.php";
	include "modal-acai.php" ;
	 include "modal-agropecuaria.php";
	  include "modal-autoescola.php" ;
		 include "modal-bar.php";
		 include "modal-carros.php";
		 include "modal-construcao.php";
		 include "modal-delivery.php";
		 include "modal-drogaria.php";
		 include "modal-escritorio.php";
		 include "modal-festa.php";
		 include "modal-floricultura.php";
		 include "modal-hortifruti.php";
		 include "modal-internet.php";
		 include "modal-lazer.php";
		 include "modal-oficinas.php";
		 include "modal-pizza.php";
		 include "modal-roupas.php";
		 include "modal-salao.php";
		 include "modal-saude.php";
		 include "modal-servico.php";
		 include "modal-som.php";
		 include "modal-transporte.php";
		 include "modal-turismo.php";
		?>

	<div class="container-row bg-dark" id='screen'>
		<div id='header' class="col-md-8 col-12">
			<div id="header-logo">
				<img src="imagens/logo.png" height="100px" id='icone'/>
			</div> <br>
			<div id="header-title">
				<h2 class="bold900"> O QUE VOCÊ PROCURA? </h2> <br>
				<h4> <span id="typed"></span> </h4>
			</div> <br>
			<div id="header-search">
				<div class="input-group mb-3">
				<select class="custom-select" id="inputGroupSelect02">
					<option selected disabled>Escolha uma categoria...</option>
					<option value="1"> Academias e suplementos</option>
					<option value="2"> Açaí, doces e sorvetes</option>
					<option value="3"> Agropecuária</option>
					<option value="4"> Autoescolas</option>
					<option value="5"> Bar, café e restaurantes</option>
					<option value="6"> Carros, motos e seguros</option>
					<option value="7"> Construções e reformas</option>
					<option value="8"> Delivery</option>
					<option value="9"> Drogaria e manipulação</option>
					<option value="10"> Escritórios</option>
					<option value="11"> Festas, Eventos e Buffet</option>
					<option value="12"> Floricultura e Jardinagem</option>
					<option value="13"> Hortifruti e Açougue</option>
					<option value="14"> Internet, Telefone e Tv</option>
					<option value="15"> Lazer e Entreterimento</option>
					<option value="16"> Oficinas e Peças</option>
					<option value="17"> Pizzaria</option>
					<option value="18"> Padaria</option>
					<option value="19"> Materiais de papelaria</option>
					<option value="20"> Petshop e veterinária</option>
					<option value="21"> Lanches e Fastfoods</option>
					<option value="22"> Roupas e Acessórios</option>
					<option value="23"> Salão e Estética</option>
					<option value="24"> Saúde</option>
				</select>
				<div class="input-group-append">
				    <input class="btn btn-danger" type="submit" value="Buscar" />
				  </div>
				</div>
			</div> <br> <br>
			<div id="header-footer">
				<p> ou <b> Conheça todas as nossas categorias </b></p>
				<p> Basta rolar pra baixo!</p> <br>
				<i class="fas fa-angle-down" style="font-size: 3em;"></i>
			</div>
		</div>
		<br>
	</div>


	<div class='container-row' style="padding: 2em;">
		<div class="col-12 col-md-8" style="margin-left: auto; margin-right: auto;">
			<div id="categorias-title">
				<h2 class="bold900 subtitle"> <i class="fas fa-tag"></i> CATEGORIAS </h2>
			</div>
		</div> <br> <br>
		<div class="col-12">
			<div id="categorias-melhores" class="row">
				<h2 class="bold700 col-12 subtitle"> Mais Procuradas </h2>
				<a data-toggle="modal" href="#modal-autoescola"> <div class="card">
					<img src="imagens/04.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Autoescolas </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-bar"> <div class="card">
					<img src="imagens/05.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Bar, café <br> e restaurantes </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-carros"> <div class="card">
					<img src="imagens/06.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Carros, motos <br> e seguros </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-construcao"> <div class="card">
					<img src="imagens/07.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Construções e <br> reformas </h5></div>
				</div></a>
			</div> <br> <br>
			<div id="categorias-todas" class="row">
				<h2 class="bold700 col-12 subtitle"> Todas Categorias </h2>
				<a data-toggle="modal" href="#modal-academia"> <div class="card">
					<img src="imagens/01.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700 dark-text"> Academias e <br> suplementos </h5></div>
				</div> </a>
				<a data-toggle="modal" href="#modal-acai"> <div class="card">
					<img src="imagens/02.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Açaí, doces <br> e sorvetes </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-agropecuaria"> <div class="card">
					<img src="imagens/03.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Agropecuária </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-autoescola"> <div class="card">
					<img src="imagens/04.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Autoescolas </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-bar"> <div class="card">
					<img src="imagens/05.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Bar, café <br> e restaurantes </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-carros"> <div class="card">
					<img src="imagens/06.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Carros, motos <br> e seguros </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-construcao"> <div class="card">
					<img src="imagens/07.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Construções e <br> reformas </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-delivery"> <div class="card">
					<img src="imagens/08.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Delivery </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-drogaria"> <div class="card">
					<img src="imagens/09.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Drogaria e <br>manipulação </h5></div>
				</div>		</a>
				<a data-toggle="modal" href="#modal-escritorio"> <div class="card">
					<img src="imagens/10.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Escritórios </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-festa"> <div class="card">
					<img src="imagens/11.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Festas, Eventos <br>e Buffet </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-floricultura"> <div class="card">
					<img src="imagens/12.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Floricultura e<br> Jardinagem </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-hortifruti"> <div class="card">
					<img src="imagens/13.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Hortifruti e Açougue </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-internet"> <div class="card">
					<img src="imagens/14.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Internet, Telefone <br>e Tv </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-lazer"> <div class="card">
					<img src="imagens/15.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Lazer e <br>Entreterimento </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-oficinas"> <div class="card">
					<img src="imagens/16.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Oficinas e Peças </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-pizza"> <div class="card">
					<img src="imagens/17.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Pizza, Lanches <br> e Fastfoods </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-roupas"> <div class="card">
					<img src="imagens/18.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Roupas e Acessórios </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-salao"> <div class="card">
					<img src="imagens/19.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Salão e Estética </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-saude"> <div class="card">
					<img src="imagens/20.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Saúde </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-servico"> <div class="card">
					<img src="imagens/21.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Serviço em Geral </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-som"> <div class="card">
					<img src="imagens/22.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Som e Acessórios </h5></div>
				</div></a>
				<a data-toggle="modal" href="#modal-transporte"> <div class="card">
					<img src="imagens/23.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Transporte </h5></div>
				</div>	</a>
				<a data-toggle="modal" href="#modal-turismo"> <div class="card">
					<img src="imagens/24.jpg" class="img-fluid" alt="Responsive image">
					<div class="dark"> <h5 class="bold700"> Turismo, Hotel<br> e Motel </h5></div>
				</div>		</a>
			</div>
		</div>
	</div>

	<div class="container-row bg-dark" id='footer'>
			<div class="col-md-7 col-12">
				© 2017-2018 My House Janaúba · Privacidade · Termos
			</div>
			<div class="col-md-2 hidden-sm ml-auto">
					<a href="#"> Voltar para o Topo &nbsp <i class="fas fa-angle-up"></i> </a>
			</div>
	</div>

<?php include "includes/scripts.php" ?>
<script type="text/javascript">
	var typed = new Typed('#typed',{
	    strings: ['Delivery', 'Maquiagem', 'Eletrônicos', 'Saúde', 'Transporte', 'Academia', 'Fast Food'],
	    typeSpeed: 40,
	    backSpeed: 40,
	    backDelay: 1300,
	    loop: true,
	    loopCount: Infinity,
	});
</script>

<script>
var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;

const altNav = document.getElementById('navbar').offsetHeight;
const firstscreen = windowHeight - altNav;
var screen = document.getElementById('screen');
screen.style.height = firstscreen;

// var largCards = document.getElementById('card').offsetWidth;
// var altCard = (largCards * 9) / 16;
// var cards = document.getElementById('card');
// cards.style.height = altCard;

if(windowWidth<920){
	var img = document.getElementById('icone');
	img.style.height = '80px';
	var navbar = document.getElementById('title-nav');
	navbar.innerHTML = 'My Home Janaúba';
}

//START MODAL
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

//start modal lojista
$("#btn-lojista").click(function(){
    $("#modal-lojista").modal();
});

//start modal loja
$("#btn-loja").click(function(){
    $("#modal-loja").modal();
});

//start modal fale conosco
$("#btn-fale").click(function(){
    $("#modal-fale").modal();
});
</script>

<?php
	include_once "includes/func_cpf.php";
	include_once "includes/valida_cnpj.php";
	include_once "conexao.php";
?>

</body>
</html>
