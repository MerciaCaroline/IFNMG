<!--FALE CONOSCO -->
	<div class="modal fade bd-example-modal-lg text-dark" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-fale">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
					<h5 class="modal-title">FALE CONOSCO</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
      			</div>
      			<div class="modal-body">
				  <form method="post" action="includes/php_cadastro-comentario.php">
						<div class="form-row form-group">
							<div class="col">
							<input type="text" class="form-control" name="nome" id="sobrenome" placeholder="Nome">
							</div>
							<div class="col">
							<input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sexo" id="sexo" value="Feminino"> Fem
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino"> Masc
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="sr-only" for="inlineFormInputGroup">Usuário</label>
							<div class="input-group mb-2">
								<div class="input-group-prepend">
								<div class="input-group-text">@</div>
								</div>
								<input type="text" class="form-control" id="email" name="email" placeholder="Email (arroz@gmail.com)">
							</div>
    					</div>						

						<div class="form-group">
							<label for="exampleFormControlTextarea1">INFORME O PROBLEMA:</label>
							<textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
  						</div>
						  <button type="submit" class="btn btn-secundary">Enviar</button>

					</form>
      			</div>

      			<div class="modal-footer">
      			</div>
    		</div>
  		</div>
	</div>
	<!-- FIM fale conosco-->

	</div>