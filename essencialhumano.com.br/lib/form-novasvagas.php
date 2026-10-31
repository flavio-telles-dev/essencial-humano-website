
<p class="txt-tam16"><strong>LEVANTAMENTO DE PERFIL DE VAGA</p>
<p class="txt-tam12">EMPRESA</p>
<div class="panel panel-default">
	<div class="panel-body">
    		<div class="container-fluid control-tam text-left">
			<div class="fields">
				<div class="row">

					<div class="field col-md-6">
					<label for="empresa">Empresa requisitante: <span style="color:#F00;">*</span></label>    
					<input name="empresa" type="text" class="form-control inputbox cssval" id="empresa" size="100" maxlength="250" autocorrect="off" value="<?php if(isset($empresa)) { echo $empresa; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome da empresa." required>
					</div>

					<div class="field col-md-6">
					<label for="contato">Contato: <span style="color:#F00;">*</span></label>    
					<input name="contato" type="text" class="form-control inputbox cssval" id="contato" size="100" maxlength="250" autocorrect="off" value="<?php if(isset($contato)) { echo $contato; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome do contato." required>
					</div>	

				</div>
				<div class="row">

					<div class="field col-md-3">
					<label for="cnpj">CNPJ: </label>    
					<input name="cnpj" type="text" class="form-control inputbox cssval" id="cnpj" size="21" maxlength="21" autocorrect="off" value="<?php if(isset($cnpj)) { echo $cnpj; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite CNPJ com apenas número.">
					</div>

					<div class="field col-md-3">
					<label for="cpf">CPF: </label>    
					<input name="cpf" type="text" class="form-control inputbox cssval" id="cpf" size="15" maxlength="15" autocorrect="off" value="<?php if(isset($cpf)) { echo $cpf; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite CPF com apenas número.">
					</div>

					<div class="field col-md-6">
					<label for="email">E-mail:<span style="color:#F00;">*</span></label>
					<input id="email" name="email" maxlength="150" type="email" required class="form-control inputbox"  value="<?php if(isset($email)) { echo $email; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite seu endereço de e-mail." />
					</div>

				</div>
				<div class="row">

					<div class="field col-md-5">
					<label for="endereco">Endereço:<span style="color:#F00;">*</span></label>
					<input id="endereco" autocorrect="off" name="endereco" minlength="2" maxlength="100" type="text" class="form-control inputbox"  value="<?php if(isset($endereco)) { echo $endereco; } ?>" required data-toggle="tooltip" data-placement="bottom" title = "Digite seu endereço completo." required/>
					</div>

					<div class="field col-md-3">
					<label for="cidade">Cidade:<span style="color:#F00;">*</span></label>
					<input id="cidade" name="cidade" class="form-control inputbox" autocorrect="off" minlength="3" maxlength="75" type="text" value="<?php if(isset($cidade)) { echo $cidade; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome da sua cidade." required/>
					</div>

					<div class="field col-md-2">
					<label for="estado">Estado:</label>
					<select name="estado" id="estado" class="form-control inputbox" required data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção do Estado.">
					<option value="">Selecione</option>
				
					   <?php  $sqlgeral = mysqli_query($conn,"select id_uf, titulo from estado_federal");
					$num_total = mysqli_num_rows($sqlgeral);
					if ($num_total != "0") {
						for($i = 0; $i<$num_total; $i++) {
							$linha = mysqli_fetch_array($sqlgeral); 
							$titulo_uf = $linha["titulo"]; $id_uf = $linha["id_uf"]; 
							if ($estado=="$id_uf") { echo "<option value=\"$id_uf\" selected=\"selected\">$titulo_uf</option>"; }else{ echo "<option value=\"$id_uf\" >$titulo_uf</option>"; }
						}
					}?>
					</select>
					</div>

					<div class="field col-md-2">
					<label for="cep">CEP:<span style="color:#F00;">*</span></label>
					<input id="cep" name="cep" class="form-control inputbox" autocorrect="off"  maxlength="9" type="text" value="<?php if(isset($cep)) { echo $cep; } ?>" required pattern= "\d{5}-?\d{3}" data-toggle="tooltip" data-placement="bottom" title = "Digite o CEP."/>
					<script type="text/javascript">$("#cep").mask("00000-000");</script>
					</div>



				</div>
				<div class="row">

					<div class="field col-md-4">
					<label for="telefone">Telefone:<span style="color:#F00;">*</span></label>
					<input id="telefone" name="telefone" maxlength="15" type="tel" class="form-control inputbox" value="<?php if(isset($telefone)) { echo $telefone; } ?>" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" data-toggle="tooltip" data-placement="bottom" title = "Digite telefone de contato." required/>
					<script type="text/javascript">$("#telefone").mask("(00) 00009-0000");</script>
					</div>

					<div class="field col-md-4">
					<label for="gerentevaga">Gerente da vaga:<span style="color:#F00;">*</span></label>
					<input id="gerentevaga" autocorrect="off" name="gerentevaga" minlength="2" maxlength="75" type="text" class="form-control inputbox"  value="<?php if(isset($gerentevaga)) { echo $gerentevaga; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome do gerente da vaga" required>
					</div>
					<?php $dtsolicitacao_extra = date('d/m/Y'); ?>
					<div class="field col-md-4">
					<label for="datasolicitacao">Data da Solicitação:<span style="color:#F00;">*</span></label>
					<input name="datasolicitacao" type="text" class="form-control inputbox" id="datasolicitacao" type="text" value="<?php if(isset($datasolicitacao)) { echo $datasolicitacao; }else{ echo $dtsolicitacao_extra;} ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite sua data da Solicitação." />
					<script type="text/javascript">$("#datasolicitacao").mask("99/99/9999");</script>
					</div>

				</div>
				<div class="row">

					<div class="field col-md-12">
					<label for="outros01">Outras informações:</label>
					<textarea id="outros01" name="outros01" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite mais informações sobre a vaga."><?php if(isset($outros01)) { echo $outros01; } ?></textarea>
					</div>	

				</div>
			</div>
  		</div>
  	</div>        
</div>
				

<!--Informações Pessoais -->
<br>
<p class="txt-tam16"><strong>PERFIL DO CARGO</p>
<p class="txt-tam12">CARGO</p>

<div class="panel panel-default">	
  	<div class="panel-body">
  		<div class="container-fluid control-tam text-left">
			<div class="fields">
    			<div class="row">

  				<div class="field col-md-4">
				<label for="nomecargo">Nome do Cargo: <span style="color:#F00;">*</span> </label>
				<input name="nomecargo" type="text" class="form-control inputbox cssval" id="nomecargo" size="100" maxlength="250" value="<?php if(isset($nomecargo)) { echo $nomecargo; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome do cargo."required>
				</div>

				<div class="field col-md-2">
				<label for="numvagas">Qt. de Vagas: <span style="color:#F00;">*</span> </label>
				<input name="numvagas" type="text" class="form-control inputbox cssval" id="numvagas" size="100" maxlength="10" value="<?php if(isset($numvagas)) { echo $numvagas; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o número de vagas." required>
				</div>

  				<div class="field col-md-3">
  				<label for="horariotrabalho">Horário de Trabalho: <span style="color:#F00;">*</span> </label>
				<input name="horariotrabalho" type="text" class="form-control inputbox cssval" id="horariotrabalho" size="100" maxlength="250" value="<?php if(isset($horariotrabalho)) { echo $horariotrabalho; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o horário de trabalho." required>	
				</div>

				<div class="field col-md-3">		
				<label for="localtrabalho">Local que irá trabalhar: <span style="color:#F00;">*</span> </label>
				<input name="localtrabalho" type="text" class="form-control inputbox cssval" id="localtrabalho" size="100" maxlength="250" value="<?php if(isset($localtrabalho)) { echo $localtrabalho; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o local de trabalho." required>	
				</div> 

			</div>

			<div class="row">

  				<div class="field col-md-6">
				<label for="formacontratacao">Forma de Contratação: <span style="color:#F00;">*</span> </label>
				<input name="formacontratacao" type="text" class="form-control inputbox cssval" id="formacontratacao" size="100" maxlength="250" value="<?php if(isset($formacontratacao)) { echo $formacontratacao; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite a forma da contratação." required>
				</div>

				<div class="field col-md-6">
				<label for="outros00">Outros: </label>
				<input name="outros00" type="text" class="form-control inputbox cssval" id="outros00" size="100" maxlength="250" value="<?php if(isset($outros00)) { echo $outros00; } ?>"  data-toggle="tooltip" data-placement="bottom" title = "Digite outras forma.">
				</div>

			</div>

			<div class="row">
				
				<div class="field col-md-6">						
				<label for="pacoteoffice">Salário:</label>
				<p><input type="radio" name="salariofixo" value="Pedir pretensão salarial"  title="Pedir pretensão salarial" id="salariofixo_0" <?php if(isset($salariofixo)) { if ($salariofixo=="Pedir pretensão salarial") echo "checked=\"checked\" "; } ?>/> Pedir pretensão salarial &nbsp; 
				<input type="radio" name="salariofixo" title="Faixa salarial definida" value="Faixa salarial definida" id="salariofixo_1" <?php if(isset($salariofixo)) { if ($salariofixo=="Faixa salarial definida") echo "checked=\"checked\" "; } ?>/> Faixa salarial definida</p>
				</div>

				<div class="field col-md-6"></div>

				<div class="field col-md-12">
				<label for="programas">Descrição da remuneração:</label>
					<textarea id="variavel" name="variavel" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite as descrições da remuneração."><?php if(isset($variavel)) { echo $variavel; } ?></textarea>
				
				</div>

			</div>

			

			<div class="row">

  				<div class="field col-md-6">
				<label for="beneficios">Benefícios:</label>
				<p><input type="radio" name="beneficios" value="Sim"  title="Sim" id="beneficios_0" <?php if(isset($beneficios)) { if ($beneficios=="Sim") echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
				<input type="radio" name="beneficios" title="Não" value="Não" id="beneficios_1" <?php if(isset($beneficios)) { if ($beneficios=="Não") echo "checked=\"checked\" "; } ?>/> Não</p>
				</div> 

			</div>
			<div class="row">
  				<div class="field col-md-12">
				<label for="todos_beneficios">Tipos Benefícios:</label>
				</div>
				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_moradia" value="Moradia" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Moradia" ); if ($pos === false) { } else {echo "checked";}}?>> Moradia.
				</div>

				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_segurodevida" value="Seguro de Vida" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Seguro de Vida" ); if ($pos === false) { } else {echo "checked";}}?>> Seguro de Vida.
				</div>

				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_localalimentacao" value="Alimentação no Local" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Alimentação no Local" ); if ($pos === false) { } else {echo "checked";}}?>> Alimentação no Local.
				</div>

				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_odontologico" value="Plano Odontológico" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Plano Odontológico" ); if ($pos === false) { } else {echo "checked";}}?>> Plano Odontológico.
				</div> 
				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_transporte" value="Vale Transporte" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Vale Transporte" ); if ($pos === false) { } else {echo "checked";}}?>> Vale Transporte. Valor: <div class="input-group"><div class="input-group-addon">R$</div>
					<input pattern="^[-+]?\d{1,3}(\.\d{3})*,\d{2}$" name="valortransporte" type="text" class="form-control inputbox" id="valortransporte" size="30" maxlength="30" value="<?php if(isset($valortransporte)) { echo $valortransporte; } ?>" style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "Digite o valor transporte."/></div>
				</div>
				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_resultados" value="Participações nos Resultados" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Participações nos Resultados" ); if ($pos === false) { } else {echo "checked";}}?>> Participações nos Resultados. 
				</div> 

				
			</div>
			<div class="row">
				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_transporte" value="Auxílio Combustível" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Auxílio Combustível" ); if ($pos === false) { } else {echo "checked";}}?>> Auxílio Combustível. Valor: <div class="input-group"><div class="input-group-addon">R$</div>
					<input pattern="^[-+]?\d{1,3}(\.\d{3})*,\d{2}$" name="valorcombustivel" type="text" class="form-control inputbox" id="valorcombustivel" size="30" maxlength="30" value="<?php if(isset($valorcombustivel)) { echo $valorcombustivel; } ?>" style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "Digite o valor do Auxílio Combustível."/></div>
				</div>

				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_valealimentacao" value="Vale Alimentação" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Vale Alimentação" ); if ($pos === false) { } else {echo "checked";}}?>> Vale Alimentação. 
					Valor: <div class="input-group"><div class="input-group-addon">R$</div>
					<input pattern="^[-+]?\d{1,3}(\.\d{3})*,\d{2}$" name="valoralimentacao" type="text" class="form-control inputbox" id="valoralimentacao" size="30" maxlength="30" value="<?php if(isset($valoralimentacao)) { echo $valoralimentacao; } ?>" style="width:100%;" data-toggle="tooltip" data-placement="bottom" title = "Digite o valor do Vale Alimentação."/></div>
				</div>

				
				<div class="field col-md-6">
				<input type="checkbox" name="todos_beneficios[]" id="benf_planosaude" value="Plano de Saúde" <?php if(isset($todos_beneficios)) { $pos = strpos( $todos_beneficios, "Plano de Saúde" ); if ($pos === false) { } else {echo "checked";}}?>> Plano de Saúde. Qual: <input name="outros02" type="text" class="form-control inputbox cssval" id="outros02" size="100" maxlength="250" value="<?php if(isset($outros02)) { echo $outros02; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite o nome do Plano de Saúde.">
				</div>

				<div class="field col-md-12">
					<label for="outros03">Outras:</label>
					<textarea id="outros03" name="outros03" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite os Benefícios."><?php if(isset($outros03)) { echo $outros03; } ?></textarea>
				</div>

			</div>

			<div class="row">

  				<div class="field col-md-4">
				<label for="vagasigilosa">Está vaga é sigilosa?:</label>
				<p><input type="radio" name="vagasigilosa" value="Sim" title="Sim" id="vagasigilosa_0" <?php if(isset($vagasigilosa)) { if ($vagasigilosa=="Sim") echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
				<input type="radio" name="vagasigilosa" title="Não" value="Não" id="vagasigilosa_1"  <?php if(isset($vagasigilosa)) { if ($vagasigilosa=="Não") echo "checked=\"checked\" "; } ?>/> Não</p>
				</div> 

  				<div class="field col-md-4">
				<label for="dispviagem">Disponibilidade para Viagem:</label>
				<p><input type="radio" name="dispviagem" value="Sim" title="Sim" id="dispviagem_0"  <?php if(isset($dispviagem)) { if ($dispviagem=="Sim") echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
				<input type="radio" name="dispviagem" title="Não" value="Não" id="dispviagem_1"  <?php if(isset($dispviagem)) { if ($dispviagem=="Não") echo "checked=\"checked\" "; } ?>/> Não</p>
				</div>

				<div class="field col-md-4">
				<label for="dispmudanca">Disponibilidade para Mudança:</label>
				<p><input type="radio" name="dispmudanca" value="Sim"  title="Sim" id="dispmudanca_0"  <?php if(isset($dispmudanca)) { if ($dispmudanca=="Sim") echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
				<input type="radio" name="dispmudanca" title="Não" value="Não" id="dispmudanca_1"  <?php if(isset($dispmudanca)) { if ($dispmudanca=="Não") echo "checked=\"checked\" "; } ?>/> Não</p>
				</div> 

			</div>

			<div class="row">

  				<div class="field col-md-6">
				<label for="conducaopropria">Condução Própria: </label>
				<p><input type="radio" name="conducaopropria" value="Sim"  title="Sim" id="conducaopropria_0" <?php if(isset($conducaopropria)) { if ($conducaopropria=="Sim") echo "checked=\"checked\" "; } ?>/> Sim &nbsp; 
				<input type="radio" name="conducaopropria" title="Não" value="Não" id="conducaopropria_1"  <?php if(isset($conducaopropria)) { if ($conducaopropria=="Não") echo "checked=\"checked\" "; } ?>/> Não<br>
				<input type="checkbox" name="cond_carro" id="cond_carro" value="Ter Carro" <?php if(isset($cond_carro)) { $pos = strpos( $cond_carro, "Ter Carro" ); if ($pos === false) { } else {echo "checked";}}?>> Carro. &nbsp;&nbsp;
				<input type="checkbox" name="cond_moto" id="cond_moto" value="Ter Moto"<?php if(isset($cond_moto)) { $pos = strpos( $cond_moto, "Ter Moto" ); if ($pos === false) { } else {echo "checked";}}?>> Moto.
				</p>
				</div>

				<div class="field col-md-6">
				<label for="sexo">Sexo: <span style="color:#F00;">*</span></label>
				<select name="sexo" id="sexo" class="form-control inputbox" required data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção do Sexo.">
				<option value="">Selecione</option>
				<?php 
				if ($sexo=="Ambos") { echo "<option value=\"Ambos\" selected=\"selected\">Ambos</option>"; }else{ echo "<option value=\"Ambos\" >Ambos</option>"; }
				if ($sexo=="Masculino") {echo "<option value=\"Masculino\" selected=\"selected\" >Masculino</option>"; }else{ echo "<option value=\"Masculino\" >Masculino</option>"; }
				if ($sexo=="Feminino") { echo "<option value=\"Feminino\" selected=\"selected\">Feminino</option>"; }else{ echo "<option value=\"Feminino\" >Feminino</option>"; }
				?>
				</select>
				</div>

			</div>

			<div class="row">
  				<div class="field col-md-4">
				<label for="estado_civil">Estado Civil: <span style="color:#F00;">*</span></label>
				<select name="estado_civil" id="estado_civil" class="form-control inputbox" required data-toggle="tooltip" data-placement="bottom" title = "É Obrigatório a seleção de um Estado Civil.">
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

				<div class="field col-md-4">
					<label for="faixaetaria">Faixa Etária:</label>
					<input name="faixaetaria" type="text" class="form-control inputbox cssval" id="faixaetaria" size="100" maxlength="50" value="<?php if(isset($faixaetaria)) { echo $faixaetaria; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite a Faixa Etária.">
				</div> 
				<div class="field col-md-4">
					<label for="cnh">CNH:</label>
					<input name="cnh" type="text" class="form-control inputbox cssval" id="cnh" size="100" maxlength="250" value="<?php if(isset($cnh)) { echo $cnh; } ?>"  data-toggle="tooltip" data-placement="bottom" title = "Digite a categoria da CNH.">	
				</div>
			</div>

			<div class="row">
				<div class="field col-md-12">
				<label for="outros04">Outras:</label>
				<textarea id="outros04" name="outros04" class="inputbox textarea"   data-toggle="tooltip" data-placement="bottom" title = "Digite mais informações."><?php if(isset($outros04)) { echo $outros04; } ?></textarea>
				</div>				
			</div>

  			</div>
        	</div>

  	</div>
</div>



<!--Endereço / Contatos -->
<br>
<p class="txt-tam16"><strong>ESCOLARIDADE</strong></p>
<p class="txt-tam12">PERFIL TÉCNICO DO CARGO</p>

<div class="panel panel-default">
  	<div class="panel-body">

        <div class="container-fluid control-tam text-left">
		<div class="fields">
			<div class="row">
				
				<div class="field col-md-12">
				<label for="formacaoescolar">Formação Escolar:</label>
				<input type="checkbox" name="formacao_escolar[]" id="ensinofundamental" value="Ensino Fundamental" <?php if(isset($formacao_escolar)) { $pos = strpos( $formacao_escolar, "Ensino Fundamental" ); if ($pos === false) { } else {echo "checked";}}?>> Ensino Fundamental. &nbsp;&nbsp; 
				<input type="checkbox" name="formacao_escolar[]" id="ensinomedio" value="Ensino Médio" <?php if(isset($formacao_escolar)) { $pos = strpos( $formacao_escolar, "Ensino Médio" ); if ($pos === false) { } else {echo "checked";}}?>> Ensino Médio. &nbsp;&nbsp;	
				<input type="checkbox" name="formacao_escolar[]" id="ensinosuperior" value="Ensino Superior" <?php if(isset($formacao_escolar)) { $pos = strpos( $formacao_escolar, "Ensino Superior" ); if ($pos === false) { } else {echo "checked";}}?>> Ensino Superior. &nbsp;&nbsp;	
				<input type="checkbox" name="formacao_escolar[]" id="posgraduacao" value="Pós-Graduação" <?php if(isset($formacao_escolar)) { $pos = strpos( $formacao_escolar, "Pós-Graduação" ); if ($pos === false) { } else {echo "checked";}}?>> Pós-Graduação.
				</div>
				
				<div class="field col-md-12">
				<label for="areadeformacao">Área de formação:<span style="color:#F00;">*</span></label>
				<input name="areadeformacao" type="text" class="form-control inputbox cssval" id="areadeformacao" size="100" maxlength="250" value="<?php if(isset($areadeformacao)) { echo $areadeformacao; } ?>" required>
					</div>
				</div>		
 

				<div class="row">
				<div class="field col-md-12">
				<p><strong>Cursos Complementares</strong></p><hr/>
				</div>
				<div class="field col-md-6">						
				<label for="pacoteoffice">Pacote Office:</label>
				<input type="checkbox" name="pacote_office[]" id="officebasico" value="Básico" <?php if(isset($pacote_office)) { $pos = strpos( $pacote_office, "Básico" ); if ($pos === false) { } else {echo "checked";}}?>> Básico. &nbsp;&nbsp;
				<input type="checkbox" name="pacote_office[]" id="officeintermediario" value=" Intermediário" <?php if(isset($pacote_office)) { $pos = strpos( $pacote_office, "Intermediário" ); if ($pos === false) { } else {echo "checked";}}?>> Intermediário. &nbsp;&nbsp;
				<input type="checkbox" name="pacote_office[]" id="officeavancado" value="Avançado" <?php if(isset($pacote_office)) { $pos = strpos( $pacote_office, "Avançado" ); if ($pos === false) { } else {echo "checked";}}?>> Avançado. 
				</div>

				<div class="field col-md-6">
				<label for="idiomas">Idiomas:</label>
				<input type="checkbox" name="idiomas[]" id="idiomasbasico" value="Básico" <?php if(isset($idiomas)) { $pos = strpos( $idiomas, "Básico" ); if ($pos === false) { } else {echo "checked";}}?>> Básico.  &nbsp;&nbsp;
				<input type="checkbox" name="idiomas[]" id="idiomasintermediario" value="Intermediário" <?php if(isset($idiomas)) { $pos = strpos( $idiomas, "Intermediário" ); if ($pos === false) { } else {echo "checked";}}?>> Intermediário. 	&nbsp;&nbsp;
				<input type="checkbox" name="idiomas[]" id="idiomasavancado" value="Avançado" <?php if(isset($idiomas)) { $pos = strpos( $idiomas, "Avançado" ); if ($pos === false) { } else {echo "checked";}}?>> Avançado. 
				</div>

				</div>

				<div class="row">
				<div class="field col-md-12">
				<label for="programas">Sistemas / Programas:</label>
				<input name="programas" type="text" class="form-control inputbox cssval" id="programas" size="100" maxlength="250" value="<?php if(isset($programas)) { echo $programas; } ?>" data-toggle="tooltip" data-placement="bottom" title = "Digite outros Sistemas e Programas.">
				</div>				
				</div>

				<div class="row">
					<div class="field col-md-12">
					<label for="conhecimentosespecificos">Conhecimentos específicos: <span style="color:#F00;">*</span></label>
					<textarea id="conhecimentosespecificos" name="conhecimentosespecificos" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite os Conhecimentos específicos." ><?php if(isset($conhecimentosespecificos)) { echo $conhecimentosespecificos; } ?></textarea>
					</div>				
				</div>

				<div class="row">
					<div class="field col-md-12">
					<label for="atividadedocargo">Principais atividade do cargo:<span style="color:#F00;">*</span></label>
					<textarea id="atividadedocargo" name="atividadedocargo" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite as principais atividade do cargo."><?php if(isset($atividadedocargo)) { echo $atividadedocargo; } ?></textarea>
					</div>				
				</div>


				<div class="row">
					<div class="field col-md-12">
					<p><strong>Competências</strong></p><hr/>
					</div>
	  				<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_transporte" value="Atenção Concentrada" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Atenção Concentrada" ); if ($pos === false) { } else {echo "checked";}}?>> Atenção Concentrada.
					</div>
					
					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_moradia" value="Adaptação" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Adaptação" ); if ($pos === false) { } else {echo "checked";}}?>> Adaptação.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_segurodevida" value="Assertividade" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Assertividade" ); if ($pos === false) { } else {echo "checked";}}?>> Assertividade.
					</div> 

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_localalimentacao" value="Administração de conflitos" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Administração de conflitos" ); if ($pos === false) { } else {echo "checked";}}?>> Administração de conflitos.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_odontologico" value="Criatividade" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Criatividade" ); if ($pos === false) { } else {echo "checked";}}?>> Criatividade.
					</div> 

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_resultados" value="Comunicação" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Comunicação" ); if ($pos === false) { } else {echo "checked";}}?>> Comunicação. 
					</div> 

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_valealimentacao" value="Decisão" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Decisão" ); if ($pos === false) { } else {echo "checked";}}?>> Decisão.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Foco no cliente" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Foco no cliente" ); if ($pos === false) { } else {echo "checked";}}?>> Foco no cliente.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Flexibilidade" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Flexibilidade" ); if ($pos === false) { } else {echo "checked";}}?>> Flexibilidade.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Liderança" <?php if(isset($competencias)) { $pos = strpos( $competencias, "iderança" ); if ($pos === false) { } else {echo "checked";}}?>> Liderança.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Organização" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Organização" ); if ($pos === false) { } else {echo "checked";}}?>> Organização.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Planejamento" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Planejamento" ); if ($pos === false) { } else {echo "checked";}}?>> Planejamento.
					</div>
					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Lógico" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Lógico" ); if ($pos === false) { } else {echo "checked";}}?>> Lógico.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="benf_planosaude" id="benf_planosaude" value="Proatividade" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Proatividade" ); if ($pos === false) { } else {echo "checked";}}?>> Proatividade.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Trabalho sob pressão" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Trabalho sob pressão" ); if ($pos === false) { } else {echo "checked";}}?>> Trabalho sob pressão.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Relacionamento Interpessoal" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Relacionamento Interpessoal" ); if ($pos === false) { } else {echo "checked";}}?>> Relacionamento Interpessoal.
					</div>

					<div class="field col-md-4">
					<input type="checkbox" name="competencias[]" id="benf_planosaude" value="Negociação" <?php if(isset($competencias)) { $pos = strpos( $competencias, "Negociação" ); if ($pos === false) { } else {echo "checked";}}?>> Negociação.
					</div>
				</div>

				<div class="row">
					<div class="field col-md-12">
					<label for="caracteristicaspessoais">Características Pessoais Imprescindíveis ao cargo: 
						 <span style="color:#F00;">*</span></label>
						 <span class="txt-tam10">(Grau de Maturidade / Relacionamento/ Visão / Estilo de comunicação e Liderança / Interesses, etc.)</span>
					<textarea required id="caracteristicaspessoais" name="caracteristicaspessoais" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite as características Pessoais Imprescindíveis ao cargo."><?php if(isset($caracteristicaspessoais)) { echo $caracteristicaspessoais; } ?></textarea>
					</div>				
				</div>

				<div class="row">
					<div class="field col-md-12">
					<label for="caracteristicasindesejaveis">Características indesejáveis: <span style="color:#F00;">*</span></label>
					<textarea required id="caracteristicasindesejaveis" name="caracteristicasindesejaveis" class="inputbox textarea" data-toggle="tooltip" data-placement="bottom" title = "Digite as características indesejáveis."><?php if(isset($caracteristicasindesejaveis)) { echo $caracteristicasindesejaveis; } ?></textarea>
					</div>				
				</div>

			</div>
		</div>
	</div>
</div>

  
<button name="cadastrar" id="cadastrar" type="submit" class="pur_button link-branco" >Cadastrar</button>
