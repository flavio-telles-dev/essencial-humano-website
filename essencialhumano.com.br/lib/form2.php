
					<form id="form_contato" method="post" class="form">						
					
						<div class="fields">
							<div class="row">						
							
								<div class="field col-md-4">
									<label for="nome">Servi&ccedil;o</label>
									<input type="text" id="servico" name="servico" class="inputbox" value="<?=$titulo?>" />
								</div>
								<div class="field col-md-8">
									<label for="nome">Seu nome</label>
									<input type="text" id="nome" name="nome" class="inputbox" />
								</div>
								<div class="field col-md-6">
									<label for="email">E-mail</label>
									<input type="email" id="email" name="email" class="inputbox" />
								</div>
								<div class="field col-md-3">
									<label for="telefone">Telefone fixo com DDD</label>
									<input type="tel" id="telefone" name="telefone" class="inputbox phone" />
								</div>
								<div class="field col-md-3">
									<label for="celular">Telefone celular com DDD</label>
									<input type="tel" id="celular" name="celular" class="inputbox phone" />
								</div>
								<div class="field col-md-12">
									<label for="mensagem">Descrever o assunto:</label>
									<textarea id="mensagem" name="mensagem" class="inputbox textarea"></textarea>
								</div>
							</div>

							<div class="buttons text-center">
								<button type="submit" class="pur_button link-branco" name="enviar" id="enviar"><span>Enviar mensagem</span></button>
							</div>
						</div>
					</form>
					