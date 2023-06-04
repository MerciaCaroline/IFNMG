<!--CADASTRO LOJA -->
	<div class="modal fade bd-example-modal-lg text-dark" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-lojA">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
					<h5 class="modal-title">LOJA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
      			</div>
      			<div class="modal-body">
				  <form method="post" action="includes/php_cadastro-loja.php">
					  	<div class="form-row form-group">
							<div class="col">
							<input type="text" class="form-control" name="nome_loja" placeholder="Nome da loja" required>
							</div>
						</div>

						<div class="form-row form-group">
							<div class="col">
							<input type="tel" class="form-control" name="telefone1" placeholder="Telefone 1 (xx) xxxx-xxxx" required>
							</div>
							<div class="col">
							<input type="tel" class="form-control" name="telefone2" placeholder="Telefone 2 (xx) xxxx-xxxx">
							</div>
						</div>

						<div class="form-row form-group">
							<div class="col">
							<input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
							</div><div class="col">
							<input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
							</div>
							<div class="col">
							<input type="text" class="form-control" name="cep" placeholder="CEP" required>
							</div>
						</div>

						<div class="form-group">
							<label class="sr-only" for="inlineFormInputGroup">Usuário</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
								<div class="input-group-text">@</div>
								</div>
								<input type="text" class="form-control" name="email" placeholder="Email para contato (exemplo@gmail.com)" required>
							</div>
    					</div>						

						<div class="form-row form-group">
							<div class="col">
							<input type="text" class="form-control" name="cnpj" placeholder="CNPJ do lojista" required>
							</div>
							<select class="form-control col" name="categoria">
  								<option value="Academias e suplementos">Academias e suplementos</option>
								<option value="Açaí, doces e sorvetes">Açaí, doces e sorvetes</option>
								<option value="Agropecuária">Agropecuária</option>
								<option value="Autoescolas">Autoescolas</option>
								<option value="Bar, café e restaurantes">Bar, café e restaurantes</option>
								<option value="Carros, motos e seguros">Carros, motos e seguros</option>
								<option value="Construções e reformas">Construções e reformas</option>
								<option value="Delivery">Delivery</option>
								<option value="Drogaria e manipulação">Drogaria e manipulação</option>
								<option value="Escritórios">Escritórios</option>
								<option value="Festas, Eventos e Buffet">Festas, Eventos e Buffet</option>
								<option value="">Floricultura e Jardinagem</option>
								<option value="Hortifruti e Açougue">Hortifruti e Açougue</option>
								<option value="Internet, Telefone e Tv">Internet, Telefone e Tv</option>
								<option value="Lazer e Entreterimento">Lazer e Entreterimento</option>
								<option value="Oficinas e Peças">Oficinas e Peças</option>
								<option value="Pizza, Lanches e Fastfoods">Pizza, Lanches e Fastfoods</option>
								<option value="Roupas e Acessórios">Roupas e Acessórios</option>
								<option value="Salão e Estética">Salão e Estética</option>
								<option value="Saúde">Saúde</option>
								<option value="Serviço em geral">Serviço em geral</option>
								<option value="Som e Acessórios">Som e Acessórios</option>
								<option value="Transporte">Transporte</option>
								<option value="Turismo, Hotel e Motel">Turismo, Hotel e Motel</option>

							</select>
						</div>

						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required checked>
								<label class="form-check-label" for="invalidCheck2">
								Concordo com os termos e condições - <a href="termos.php"> Acessar termos</a>
								</label>
							</div>
							<button type="submit" class="btn btn-secundary">CADASTRAR</button>

						</div>
					</form>
      			</div>
      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>
	<!-- FIM CADASTRO LOJA -->


