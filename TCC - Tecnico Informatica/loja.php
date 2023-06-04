<?php
$id= $_GET['codigo'];
 ?>
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

		<div class="container-row bg-dark" id="loja-screen">
			<div id='container-loja'>
				<center> <div id='geral-loja' class='col-md-10 offset-md-1' >
					<h3> CATEGORIA: LANCHONETES </h3>
					<h4> LOJA: <b> BARBARUS </b> </h4>
				</div> <br> </center>
				<div id='dados' class='col-10 offset-1' >
					<p class="dados"> Telefone de Contato: <b> (38) 9 9179-4066 </b> </p>
					<p class="dados"> Endereço: <b> Rua Jascinto Pinto Aquino Rego, N°: 0 </b> </p>
					<p class="dados"> E-mail para Contato: <b> arroz@gmail.com </b> </p>
					<p class="dados"> Avaliação: <b> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> </b> </p>
				</div> <br>

				<div id='avaliacao' class='col-10 offset-1' >
					<center><h3> AVALIAÇÕES </h3></center>
					<div class="avaliacao">
						<h6> Nome: Junim </h6>
						<h6> E-mail: emaildapessoa@email.com </h6>
						<h6> Nota: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> </h6>
						<p> Muito boa, falta melhorar só o pão, a carne, o atendimento, o local e o quétichupe</p>
						<hr>
					</div>
					<div class="avaliacao">
						<h6> Nome: Junim </h6>
						<h6> E-mail: emaildapessoa@email.com </h6>
						<h6> Nota: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> </h6>
						<p> Muito boa, falta melhorar só o pão, a carne, o atendimento, o local e o quétichupe</p>
						<hr>
					</div>
					<div class="avaliacao">
						<h6> Nome: Junim </h6>
						<h6> E-mail: emaildapessoa@email.com </h6>
						<h6> Nota: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> </h6>
						<p> Muito boa, falta melhorar só o pão, a carne, o atendimento, o local e o quétichupe</p>
						<hr>
					</div> <br>
					<center><h3> AVALIE VOCÊ TAMBEM! </h3></center>
					<div id="avalie" class="col-md-10 offset-md-1 col-12"> <br>
						<form>
							<div class="form-row form-group">
								<div class="col">
									<input type="text" class="form-control" placeholder="Seu Nome">
								</div>
								<div class="col hidden-sm">
									<input type="text" class="form-control" placeholder="Seu E-mail">
								</div>
							</div>
							<div class="form-row form-group hidden-lg">
								<div class="col hidden-lg">
									<input type="text" class="form-control" placeholder="Seu E-mail">
								</div>
							</div>
							<div class="form-row form-group">
								<div class="col" id="notas">
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="0"> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
									</div>
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="1"> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
									</div>
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="2"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
									</div>
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="3"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
									</div>
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="4"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
									</div>
									<div class="col-md-2 col-10">
										<input type="radio" name="nota" value="5"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									</div>
								</div>
							</div>
							<div class="form-row form-group">
								<div class="col">
									<textarea rows="10" style="width: 100%;" placeholder="Seu Comentário aqui ..."></textarea>
								</div>
							</div>
							<center> <div class="form-row form-group">
								<div class="col">
									<button type="button" class="btn btn-secondary">COMENTAR</button>
								</div>
							</div> </center>
						</form>
					</div>
				</div>
			</div>
		</div>

<div class="container-row" id='footer2'>
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
var screen = document.getElementById('sobre-nos-screen');
var atual = screen.offsetHeight;
screen.style.height = atual - altNav;

// var largCards = document.getElementById('card').offsetWidth;
// var altCard = (largCards * 9) / 16;
// var cards = document.getElementById('card');
// cards.style.height = altCard;

if(windowWidth<920){
	var pessoa = document.getElementsByClassName('pessoa');
	console.log(pessoa);
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
</script>


</body>
</html>
