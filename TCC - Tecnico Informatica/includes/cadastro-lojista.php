<!--CADASTRO LOJISTA -->
	<div class="modal fade bd-example-modal-lg text-dark" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-lojista">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
					<h5 class="modal-title">LOJISTA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
      			</div>
      			<div class="modal-body">
				  	<form method="post" action="includes/php_cadastro-lojista.php">
						<div class="form-row form-group">
							<div class="col">
								<input type="text" name="nome" class="form-control" id='nome' placeholder="Nome" required>
							</div>
							<div class="col">
								<input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome" required>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" name="sexo" id="sexo" type="radio" value="Feminino"> Fem
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" name="sexo" id="sexo" type="radio" value="Masculino"> Masc
								</label>
							</div>
						</div>

						<div class="form-row form-group">
							<div class="col">
								<input type="tel" name="telefone1" id="telefone1" class="form-control" placeholder="Telefone 1 (xx) xxxx-xxxx" required>
							</div>
							<div class="col">
								<input type="tel" name="telefone2" id="telefone2" class="form-control" placeholder="Telefone 2 (xx) xxxx-xxxx">
							</div>
						</div>

						<div class="form-row form-group">
							<div class="col">
								<input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
							</div>
							<div class="col">
								<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required>
							</div>
							<div class="col">
								<input type="number" name="cep" id='cep' class="form-control" placeholder="CEP" required>
							</div>
						</div>

						<div class="form-group">
							<label class="sr-only" for="inlineFormInputGroup">Usuário</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
									<div class="input-group-text">@</div>
								</div>
								<input type="text" name="email" id='email' class="form-control" id="inlineFormInputGroup" placeholder="Email (arroz@gmail.com)" required>
							</div>
    					</div>						

						<div class="form-row form-group">
							<div class="col">
								<input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
							</div>
							<div class="col">
								<input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" required>
							</div>
						</div>

						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required checked>
								<label class="form-check-label" for="invalidCheck2">
								Concordo com os termos e condições - <a href="termos.php"> Acessar termos</a>
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-secundary">CADASTRAR</button>
				  		</form>				  	
				 </div>
    		</div>
		  </div>
	</div>
	<!-- FIM CADASTRO LOJISTA -->
