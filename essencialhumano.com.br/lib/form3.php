
					<form id="form_ebook" method="post" class="form">						
					
						<div class="fields">
							<div class="row">
							<input name="servico" type="hidden" value="<?=$titulo?>" />
								<div class="field col-md-12">
									<label for="nome">Seu nome</label>
									<input type="text" id="nome" name="nome" class="inputbox" />
								</div>
								<div class="field col-md-12">
									<label for="email">E-mail</label>
									<input type="email" id="email" name="email" class="inputbox" />
								</div>
								<div class="field col-md-12">
									<label for="telefone">Telefone fixo com DDD</label>
									<input type="tel" id="telefone" name="telefone" class="inputbox phone" />
								</div>
								<div class="field col-md-12">
									<label for="celular">Telefone celular com DDD</label>
									<input type="tel" id="celular" name="celular" class="inputbox phone" />
								</div>
							</div>

							<div class="buttons text-center">
								<button type="submit" class="pur_button link-branco" name="enviar" id="enviar"><span>BAIXE O E-BOOK</span></button>
							</div>
						</div>
					</form>
					