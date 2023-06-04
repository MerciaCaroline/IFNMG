<nav class="navbar navbar-expand-lg navbar-dark bg-secondary" id="navbar">
	<a class="navbar-brand" href="#" id="navbar-brand">
    <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <span id='title-nav'> </span>
	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto mr-auto">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="sobre_nos.php">Sobre Nós</a>
      <button type="button" class="btn" data-toggle="modal" data-target="#modal-cadastro">Página do Lojista</button>
    </div>
  </div>
</nav>

<?php include 'cadastro-lojista.php' ?>
<?php include 'modal-cadastro.php' ?>
<?php include 'cadastro-loja.php' ?>
<?php include 'fale-conosco.php' ?>