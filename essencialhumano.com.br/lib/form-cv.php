<div class="panel panel-default">
	<div class="panel-body">

    	<div class="container-fluid control-tam text-left">
			<div class="fields">
				<div class="row">
					<div class="field col-md-3">
						<label for="cpf">CPF: </label>  		
						<input name="cpf" type="text" class="form-control inputbox" id="cpf" maxlength="30" value="<?php if(isset($cpf_enviado)) { echo $cpf_enviado; } ?>" disabled style="width:100%;"/>
						<input name="cpf1" type="hidden" id="cpf1" value="<?php echo $cpf_enviado ?>" />
					</div>
					<?php if(!isset($form_editar)) {?>
					<div class="field col-md-3">
						<label for="senha2">Senha: <span style="color:#F00;">*</span> </label>
						<input name="senha1" type="password" class="form-control inputbox" id="senha1" size="30" maxlength="10" required autofocus="autofocus" data-toggle="tooltip" data-placement="bottom" title = "Digite sua senha entre 8 a 10 caracteres usando entre números e letras."/>						
					</div>
					<div class="field col-md-3">
						<label for="senha2">Confirme Senha: <span style="color:#F00;">*</span> </label>
						<input name="senha2" type="password" class="form-control inputbox" id="senha2" size="30" maxlength="10" required data-toggle="tooltip" data-placement="bottom" title = "Por favor insira o mesmo valor novamente."/>
					</div>
					<?php } ?>
				</div>
			</div>
  		</div>
        
idioma 		<div class="container-fluid control-tam text-left">
    		<div class="fields">
				<div class="row">
  					<div class="field col-md-3">
						<label for="cargo"><b>Cargo Pretendido:</b> <span style="color:#F00;">*</span> </label>     
						<select name="cargo" id="cargo" class="form-control inputbox"  required style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório selecionar um CARGO.">
						<option value="">Selecione o Cargo</option>
						<?php  $sqlgeral = mysqli_query($conn,"select id_cargo, cargo from cargos where ativo=1 order by cargo");
						$num_total = mysqli_num_rows($sqlgeral);			 
						if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id_cargo"]; $titulo = $linha["cargo"]; 
								if ($id==$id_cargo_pretendido) { echo "<option value=\"$id\" selected=\"selected\">$titulo</option>"; }else{ echo "<option value=\"$id\">$titulo</option>"; }
							}
						}
						?>
						</select>
					</div>

					<?php if(isset($_GET['vaga'])) { ?>
					<div class="field col-md-3"><div class="form-group has-error">
						<label for="inputError1"><b>Vagas em aberto:</b> </label>     
						<select name="vagas_abertas" id="inputError1" class="form-control inputbox" style="width:100%;">
						<option value="">Selecione a Vaga</option>
						<?php  $sqlgeral = mysqli_query($conn,"select id, titulo from geral where id_tipo = 3 order by titulo");
						$num_total = mysqli_num_rows($sqlgeral);			 
						if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id"]; $titulo = $linha["titulo"]; 							
								if ($id==$id_vaga_pretendido) { echo "<option value=\"$id\" selected=\"selected\">$titulo</option>"; }else{ echo "<option value=\"$id\">$titulo</option>"; }							
							}
						}
						?>
						</select>
					</div>
					<?php }else{ ?>
					<div class="field col-md-3">
						<label for="vagas_abertas"><b>Vagas em aberto:</b> </label>     
						<select name="vagas_abertas" id="vagas_abertas" class="form-control inputbox" style="width:100%;">
						<option value="">Selecione a Vaga</option>
						<?php  $sqlgeral = mysqli_query($conn,"select id, titulo from geral where id_tipo = 3 order by titulo");
						$num_total = mysqli_num_rows($sqlgeral);			 
						if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id"]; $titulo = $linha["titulo"]; 							
								if ($id==$id_vaga_pretendido) { echo "<option value=\"$id\" selected=\"selected\">$titulo</option>"; }else{ echo "<option value=\"$id\">$titulo</option>"; } 							
							}
						}
						?>
						</select>
					</div>            
					<?php } ?>
				</div>
  			</div>
  		</div>
        
		<div class="container-fluid control-tam text-left">
    		<div class="fields">
				<div class="row">
  					<div class="field col-md-12">
						<label>
						<input type="checkbox" name="deficiencia" id="deficiencia" value="1"> PDC Voltado para pessoas com deficiência física, auditiva, visual, mental ou múltipla.
						</label>
					</div>
				</div>
			</div>
  		</div>

        <div class="container-fluid control-tam">
			<div class="fields">
				<div class="row">
					<div class="field col-md-3">
						<label for="salario">Pretensão Salarial: </label>  		           
						<div class="input-group"><div class="input-group-addon">R$</div>
						<input pattern="^[-+]?\d{1,3}(\.\d{3})*,\d{2}$" name="salario" type="text" class="form-control inputbox" id="salario" size="30" maxlength="30" value="<?php if(isset($salario_pretendido)) { echo $salario_pretendido; } ?>" style="width:100%;"        />
						</div>
					</div>
					
					<div class="field col-md-3">
						<label for="horario">Horário Disponível: <span style="color:#F00;">*</span></label>
						<select name="horario" id="horario" class="form-control inputbox" required style="width:100%;"  data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção de um Horário.">
						<option value="">Selecione o Horário</option>
							<?php  $sqlgeral = mysqli_query($conn,"select id_horario, titulo from horario where ativo=1 order by titulo");
							$num_total = mysqli_num_rows($sqlgeral);
							if ($num_total != "0") {
								for($i = 0; $i<$num_total; $i++) {
									$linha = mysqli_fetch_array($sqlgeral);
									$id = $linha["id_horario"]; $titulo = utf8_encode($linha["titulo"]);  
									if ($id==$id_horario) { echo "<option value=\"$id\" selected=\"selected\">$titulo</option>"; }else { echo "<option value=\"$id\">$titulo</option>"; }
								}
							}?>
						</select>
					</div>
				
					<div class="field col-md-3">
						<label for="arquivo_foto">Foto 3x4:</label>
						<input name="arquivo_foto" type="file" id="arquivo_foto" size="47" accept="image/gif,image/png,image/bmp,image/jpg" style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "Será aceito apenas os formatos: JPG, GIF ou PNG"/>
					</div>
				
					<div class="field col-md-3">
						<label for="arquivo_anexo">Currículo: <span style="color:#F00;">*</span></label>
						<input name="arquivo_anexo" type="file" id="arquivo_anexo" size="47" accept="application/pdf,.doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "Será aceito apenas os formatos: PDF e DOC"/>
					</div>
				</div>
			</div>
  		</div>
	</div>
</div>

<!--Informações Pessoais -->
<br><h4 class="txt-tam22"><strong>Informações Pessoais</strong></h4>
<div class="panel panel-default">	
  	<div class="panel-body">

  		<div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">
  					<div class="field col-md-5">
						<label for="nome">Nome Completo: <span style="color:#F00;">*</span> </label>    <input name="nome" type="text" class="form-control inputbox cssval" id="nome" size="100" maxlength="250" autocorrect="off" value="<?php if(isset($nome)) { echo $nome; } ?>" required data-toggle="tooltip" data-placement="bottom" title = "Digite seu nome completo."/>
					</div> 
  					<div class="field col-md-3">
						<label for="datanascimento">Data de nascimento: <span style="color:#F00;">*</span>  </label>                		           
						<input name="datanascimento" type="text" class="form-control inputbox" id="datanascimento" type="text" value="<?php if(isset($data_nasc)) { echo $data_nasc; } ?>"  data-toggle="tooltip" data-placement="bottom" title = "Digite sua data de Nascimento." />
						<script type="text/javascript">$("#datanascimento").mask("99/99/9999");</script> 
						
					</div>
					<div class="field col-md-2">
						<label for="estado">Estado Civil: <span style="color:#F00;">*</span></label>
						<select name="estado" id="estado" class="form-control inputbox" required data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção de um Estado Civil.">
						<option value="">Selecione</option>
						<?php  $sqlgeral = mysqli_query($conn,"select id_estado, titulo from estado_civil where ativo=1 order by titulo");
						$num_total = mysqli_num_rows($sqlgeral);
						if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral); $id = $linha["id_estado"]; $titulo = $linha["titulo"];  
								if ($titulo==$estado_civil) { echo "<option value=\"$titulo\" selected=\"selected\">$titulo</option>"; }else{ echo "<option value=\"$titulo\">$titulo</option>"; }
							}
						}?>
						</select>
					</div>
					<div class="field col-md-2">
						<label for="sexo">Sexo: <span style="color:#F00;">*</span></label>
						<select name="sexo" id="sexo" class="form-control inputbox" required data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção do Sexo.">
						<option value="">Selecione</option>
						<?php if ($sexo=="Masculino") {echo "<option value=\"Masculino\" selected=\"selected\" >Masculino</option>"; }else{ echo "<option value=\"Masculino\" >Masculino</option>"; }
						if ($sexo=="Feminino") { echo "<option value=\"Feminino\" selected=\"selected\">Feminino</option>"; }else{ echo "<option value=\"Feminino\" >Feminino</option>"; }
						?>
						</select>
					</div>             
					<input name="renda" id="renda" type="hidden" value="" />			
				</div>
  			</div>
        </div>

        <div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">
  					<div class="field col-md-3">
						<label>Possui Carro?</label>
						<p><input type="radio" name="carro" value="1"  title="Sim" id="carro_0" required <?php if(isset($tem_carro)) { if ($tem_carro==1) echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
						<input type="radio" name="carro" title="Não" value="0" id="carro_1" required <?php if(isset($tem_carro)) { if ($tem_carro==0) echo "checked=\"checked\" "; } ?>/> Não</p>
					</div> 
  					<div class="field col-md-3">
						<label>Possui Moto?</label>
						<p><input type="radio" name="moto" value="1" title="Sim" id="moto_0" required <?php if(isset($tem_moto)) { if ($tem_moto==1) echo "checked=\"checked\" "; } ?> /> Sim &nbsp; 
						<input type="radio" name="moto" value="0" title="Não" id="moto_1" required <?php if(isset($tem_moto)) { if ($tem_moto==0) echo "checked=\"checked\" "; } ?> /> Não</p>
					</div>
					<div class="field col-md-3">
						<label>Disponibilidade de mudança?</label>
						<p><input type="radio" name="mudanca" value="1" title="Sim" id="mudanca_0" required   <?php if(isset($disp_mudanca)) { if ($disp_mudanca==1)  echo "checked=\"checked\" "; } ?>  /> Sim &nbsp; 
 						<input type="radio" name="mudanca" value="0"  title="Não" id="mudanca_1" required <?php if(isset($disp_mudanca)) { if ($disp_mudanca==0) echo "checked=\"checked\" "; } ?> /> Não</p>
					</div>
  					<div class="field col-md-3">
						<label>Disponibilidade de viagem?</label>
 						<p><input type="radio" name="viagem" value="1" title="Sim" id="viagem_0" required <?php if(isset($disp_viagem)) { if ($disp_viagem==1) echo "checked=\"checked\" "; } ?> /> Sim &nbsp; 
						<input type="radio" name="viagem" value="0" title="Não" id="viagem_1" required <?php if(isset($disp_viagem)) { if ($disp_viagem==0) echo "checked=\"checked\" "; } ?>  /> Não</p>
					</div>
				</div>
  			</div>
		</div>

  	</div>
</div>


<!--Endereço / Contatos -->
<br><h4 class="txt-tam22"><strong>Endereço / Contatos</strong></h4>
<div class="panel panel-default">
  	<div class="panel-body">

        <div class="container-fluid control-tam text-left">
			<div class="fields">
				<div class="row">
					<div class="field col-md-6">
						<label for="endereco">Endereço:<span style="color:#F00;">*</span></label>
						<input id="endereco" autocorrect="off" name="endereco" minlength="2" maxlength="75" type="text" class="form-control inputbox"  value="<?php if(isset($endereco)) { echo $endereco; } ?>" required data-toggle="tooltip" data-placement="bottom" title = "Digite seu Endereço completo."/>
					</div>
					<div class="field col-md-6">
						<label for="email">E-mail:<span style="color:#F00;">*</span></label>
						<input id="email" name="email" maxlength="150" type="email" required class="form-control inputbox"  value="<?php if(isset($email)) { echo $email; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite seu Endereço de e-mail." />
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid control-tam text-left">
			<div class="fields">
				<div class="row">				
					<div class="field col-md-4">
						<label for="bairro">Bairro:<span style="color:#F00;">*</span></label>
						<input id="bairro" name="bairro" autocorrect="off" minlength="3" maxlength="45" type="text"  class="form-control inputbox" value="<?php if(isset($bairro)) { echo $bairro; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome do seu Bairro / Setor." required/>
					</div>
					<div class="field col-md-4">
						<label for="cidade">Cidade:<span style="color:#F00;">*</span></label>
						<input id="cidade" name="cidade" class="form-control inputbox" autocorrect="off" minlength="3" maxlength="75" type="text" value="<?php if(isset($cidade)) { echo $cidade; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome da sua Cidade." required/>
					</div>
					<div class="field col-md-4">
						<label for="uf">Estado:<span style="color:#F00;">*</span></label>
						<select id="uf" name="uf" required class="form-control inputbox"  data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção de um Estado.">
						<option value="">Selecione</option>
						<?php  $sqlgeral = mysqli_query($conn,"select id_uf, titulo from estado_federal where ativo=1 order by titulo");
						$num_total = mysqli_num_rows($sqlgeral);
				 		if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id_uf"];
								$titulo = $linha["titulo"];  
								if ($id==$uf) {
									echo "<option value=\"$id\" selected=\"selected\">$titulo</option>";	
								}else {echo "<option value=\"$id\">$titulo</option>"; }
							}
						}else{ 
							require("lib/erro-existe.php"); 
						} ?>
						</select>
					</div>
				</div>
			</div>
        </div>

        <div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">
  					<div class="field col-md-4">
						<label for="telefone">Telefone:<span style="color:#F00;">*</span></label>
						<input id="telefone" name="telefone" required maxlength="15" type="tel" class="form-control inputbox" value="<?php if(isset($telefone)) { echo $telefone; } ?>" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}"/>
						<script type="text/javascript">$("#telefone").mask("(00) 00009-0000");</script>
					</div>
					<div class="field col-md-4">
						<label for="telefone_recado">Telefone: <small>[Recado]</small></label>
						<input id="telefone_recado" name="telefone_recado" maxlength="15" type="tel"  class="form-control inputbox" value="<?php if(isset($telefone_recado)) { echo $telefone_recado; } ?>"  pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" />
						<script type="text/javascript">$("#telefone_recado").mask("(00) 00009-0000");</script>
					</div>
					<div class="field col-md-4">
						<label for="celular">Celular:<span style="color:#F00;">*</span></label>
						<input id="celular" name="celular" required maxlength="15" type="tel" class="form-control inputbox" value="<?php if(isset($celular)) { echo $celular; } ?>"  pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" />
						<script type="text/javascript">$("#celular").mask("(00) 00009-0000");</script>
					</div>
				</div>
            </div>
        </div>

	</div>
</div>


<!--Endereço / Contatos -->
<br><h4 class="txt-tam22"><strong>Escolaridade</strong></h4>
<div class="panel panel-default">
  	<div class="panel-body">
  		
		<div class="container-fluid control-tam text-left">
    		<div class="fields">
				<div class="row">
  					<div class="field col-md-6">
						<label for="formacao_instituicao1">Instituição:</label>
						<input id="formacao_instituicao1" name="formacao_instituicao1" autocorrect="off" minlength="2" maxlength="75" type="text"  class="form-control inputbox" value="<?php if(isset($instituicao_esc1)) { echo $instituicao_esc1; } ?>"/>
					</div>
					<div class="field col-md-3">
						<label for="formacao_curso1">Curso:<span style="color:#F00;">*</span></label>
						<input id="formacao_curso1" name="formacao_curso1" autocorrect="off" minlength="2" maxlength="45" type="text" class="form-control inputbox"  required="required" value="<?php if(isset($curso_esc1)) { echo $curso_esc1; } ?>" />
					</div>
					<div class="field col-md-3">
						<label for="formacao_nivel1">Nível de Formação 1:<span style="color:#F00;">*</span></label>
						<select id="formacao_nivel1" name="formacao_nivel1"  class="form-control inputbox" required>
	      				<option value="">Selecione</option>
              			<?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE ativo=1 order by id_escolaridade");
					    $num_total = mysqli_num_rows($sqlgeral);			 
						if ($num_total != "0") {
						   	for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id_escolaridade"];
								$titulo = $linha["titulo"]; 
								if ($id==$id_escolaridade1) {
									echo "<option value=\"$id\" selected=\"selected\">$titulo</option>";	
								}else { 
								echo "<option value=\"$id\">$titulo</option>"; 
								}
							}
						}else{ 
							require("lib/erro-existe.php"); 
						} ?>
						</select>
					</div>
				</div>
            </div>
        </div>

        <div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">
  					<div class="field col-md-6">
						<label for="formacao_instituicao2">Instituição:</label>
						<input id="formacao_instituicao2" name="formacao_instituicao2" autocorrect="off" minlength="2" maxlength="75" type="text"  class="form-control inputbox" value="<?php if(isset($instituicao_esc2)) { echo $instituicao_esc2; } ?>"/>
					</div>
					<div class="field col-md-3">
						<label for="formacao_curso2">Curso:</label>
						<input id="formacao_curso2" name="formacao_curso2" autocorrect="off" minlength="2" maxlength="45" type="text" class="form-control inputbox" value="<?php if(isset($curso_esc2)) { echo $curso_esc2; } ?>"/>
					</div>
					<div class="field col-md-3">
						<label for="formacao_nivel2">Nível de Formação 2:</label>
						<select id="formacao_nivel2" name="formacao_nivel2"  class="form-control inputbox">
	      				<option value="">Selecione</option>
              			<?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE ativo=1 order by id_escolaridade");
					    $num_total = mysqli_num_rows($sqlgeral);
						if ($num_total != "0") {
						   	for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id_escolaridade"];
								$titulo = $linha["titulo"]; 
								if ($id==$id_escolaridade2) {
									echo "<option value=\"$id\" selected=\"selected\">$titulo</option>";	
								}else {  
									echo "<option value=\"$id\">$titulo</option>"; 
								}
							}
						}else{ 
							require("lib/erro-existe.php"); 
						} ?>
						</select>
					</div>
				</div>
            </div>
        </div>

        <div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">
  					<div class="field col-md-6">
						<label for="formacao_instituicao3">Instituição:</label>
						<input id="formacao_instituicao3" name="formacao_instituicao3" autocorrect="off" minlength="2" maxlength="75" type="text"  class="form-control inputbox" value="<?php if(isset($instituicao_esc3)) { echo $instituicao_esc3; } ?>" />
					</div>
					<div class="field col-md-3">
						<label for="formacao_curso3">Curso:</label>
						<input id="formacao_curso3" name="formacao_curso3" autocorrect="off" minlength="2" maxlength="45" type="text" class="form-control inputbox" value="<?php if(isset($curso_esc3)) { echo $curso_esc3; } ?>" />
					</div>
					<div class="field col-md-3">
						<label for="formacao_nivel3">Nível de Formação 3:</label>
						<select id="formacao_nivel3" name="formacao_nivel3"  class="form-control inputbox">
	      				<option value="">Selecione</option>
              			<?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE ativo=1 order by id_escolaridade");
					    $num_total = mysqli_num_rows($sqlgeral);
			            if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral);
								$id = $linha["id_escolaridade"];
								$titulo = $linha["titulo"];  
								if ($id==$id_escolaridade3) {
									echo "<option value=\"$id\" selected=\"selected\">$titulo</option>";	
								}else { 
									echo "<option value=\"$id\">$titulo</option>";
								}
							}
						}else{ 
							require("lib/erro-existe.php"); 
						} ?>
						</select>
					</div>
				</div>
            </div>
        </div>

	</div>
</div> 
	

<!--Endereço / Contatos -->
<br><h4 class="txt-tam22"><strong>Situação Profissional</strong></h4>
<div class="panel panel-default">
  	<div class="panel-body">

  		<div class="container-fluid control-tam text-left">
			<div class="fields">
				<div class="row">
					<div class="field col-md-3">
						<label for="profissional_situacao_atual">Situação Atual:<span style="color:#F00;">*</span> </label>
						<select id="profissional_situacao_atual" name="profissional_situacao_atual" class="form-control inputbox" required >
						<option value="">Selecione</option>
						<?php  $sqlgeral = mysqli_query($conn,"SELECT id_situacao, titulo FROM `situacao` WHERE ativo=1 order by titulo");
						$num_total = mysqli_num_rows($sqlgeral);
						if ($num_total != "0") {
							for($i = 0; $i<$num_total; $i++) {
								$linha = mysqli_fetch_array($sqlgeral); $id = $linha["id_situacao"]; $titulo = $linha["titulo"];  
								if ($id==$id_situacao) { echo "<option value=\"$id\" selected=\"selected\">$titulo</option>"; } else { echo "<option value=\"$id\">$titulo</option>"; }
							}
						} ?>
						</select>
					</div>
				</div>			
			</div>
        </div>

	</div>
</div>        
  
<button name="cadastrar" id="cadastrar" type="submit" class="pur_button link-branco" >
    <?php if(isset($_GET['vaga'])) { ?>CANDIDATAR A VAGA!<?php }else{ ?>Cadastrar <?php }?>    
    </button>
    <!-- Modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
			<br /><center><h3><i class="fa fa-circle-o-notch fa-spin"></i><br />Aguarde!</h3></center><br />
			</div>
		</div>
	</div>