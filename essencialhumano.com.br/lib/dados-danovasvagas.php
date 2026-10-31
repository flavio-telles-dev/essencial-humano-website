<p class="txt-tam16"><strong>LEVANTAMENTO DE PERFIL DE VAGA</p>
<p class="txt-tam12">EMPRESA</p>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="container-fluid control-tam text-left">
				
			<div class="row">
				<div class="col-md-6">
				<strong>Empresa requisitante:</strong>    
				<p><?=$empresa;?></p>
				</div>

				<div class="col-md-6">
				<strong>Contato:</strong>    
				<p><?php echo $contato; ?></p>
				</div>	

				<div class="col-md-6">
				<strong>CNPJ:</strong>    
				<p><?php echo $cnpj; ?></p>
				</div>

				<div class="col-md-6">
				<strong>CPF:</strong>    
				<p><?php echo $cpf; ?></p>
				</div>

				<div class=" col-md-6">
				<strong>E-mail:</strong>
				<p><?php echo $email; ?></p>
				</div>
				
				<div class="col-md-6">
				<strong>Endereço:</strong>
				<p><?php echo $endereco; ?></p>
				</div>

				<div class=" col-md-2">
				<strong>Cidade:</strong>
				<p><?php echo $cidade; ?></p>
				</div>

				<div class=" col-md-2">
				<strong>Estado:</strong>
				<p><?php echo $estado; ?></p>
				</div>


				<div class=" col-md-2">
				<strong>Cep:</strong>
				<p><?php echo $cep; ?></p>
				</div>

				<div class="col-md-4">
				<strong>Telefone:</strong>
				<p><?=$telefone?></p>
				</div>

				<div class=" col-md-4">
				<strong>Gerente da vaga:</strong>
				<p><?=$gerentevaga;?></p>
				</div>

				<div class=" col-md-4">
				<strong>Data da Solicitação:</strong>
				<p><?=$datasolicitacao?></p>
				</div>
				
				<div class=" col-md-12">
				<strong>Outras informações:</strong>
				<p><?=$outros01;?></p>
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
    			
    			<div class="row">

  				<div class=" col-md-4">
				<strong>Nome do Cargo:</strong> 
				<p><?php echo $nomecargo; ?></p>
				</div>

				<div class=" col-md-2">
				<strong>Qt. de Vagas: </strong> 
				<p><?php echo $numvagas; ?></p>
				</div>

  				<div class=" col-md-3">
  				<strong>Horário de Trabalho: </strong> 
				<p><?php echo $horariotrabalho; ?></p>
				</div>

				<div class=" col-md-3">		
				<strong>Local que irá trabalhar: </strong> 
				<p><?php echo $localtrabalho; ?></p>
				</div> 

  				<div class=" col-md-6">
				<strong>Forma de Contratação: </strong> 
				<p><?php echo $formacontratacao; ?></p>
				</div>

				<div class=" col-md-6">
				<strong>Outros:</strong> 
				<p><?php echo $outros00; ?></p>
				</div>			

  				<div class=" col-md-6">
				<strong>Salário:</strong> 
				<p><?php echo $salariofixo; ?></p>
				<strong>Descrição da remuneração:</strong> 
				<p><?php echo $variavel ?></p>
				</div>

				<div class=" col-md-6">
				</div> 

			</div>

			<div class="row">

  				<div class=" col-md-6">
				<strong>Benefícios:</strong>
				<p><?php echo $beneficios;?></p>
				</div> 

			</div>
			<div class="row">
  				
				<div class=" col-md-12">
				<strong>Principais Benefícios:</strong>
				<p><ul><?php
				foreach($todos_beneficios as $mostrar){
					if($mostrar == "Vale Transporte") {
					echo "<li>" . $mostrar . " - R$ ". $valortransporte . "</li>";
					} elseif($mostrar == "Auxílio Combustível") {
					echo "<li>" . $mostrar . " - R$ ". $valorcombustivel . "</li>";
					} elseif($mostrar == "Vale Alimentação") {
					echo "<li>" . $mostrar . " - R$ ". $valoralimentacao . "</li>";
					} elseif($mostrar == "Plano de Saúde") {
					echo "<li>" . $mostrar . " - ". $outros02 . "</li>";
					}else{
					echo "<li>" . $mostrar . "</li>";
					}   				
				}?></ul></p>
				</div>

				<div class=" col-md-12">
				<strong>Outras Benefícios:</strong>
				<p><?=$outros03;?>
				</div>

			</div>

			<div class="row">

  				<div class=" col-md-4">
				<strong>Está vaga é sigilosa?:</strong>
				<p><?=$vagasigilosa;?></p>
				</div> 

  				<div class=" col-md-4">
				<strong>Disponibilidade para Viagem:</strong>
				<p><?=$dispviagem;?></p>
				</div>

				<div class=" col-md-4">
				<strong>Disponibilidade para Mudança:</strong>
				<p><?=$dispmudanca;?></p>
				</div> 

  				<div class=" col-md-6">
				<strong>Condução Própria:</strong>
				<p><?=$conducaopropria;?></p>
				<strong>Tipo de Condução:</strong>
				<p><?=$cond_carro;?></p>
				<p><?=$cond_moto;?></p>				
				</div>

				<div class=" col-md-6">
				<strong>Sexo: </strong>
				<p><?=$sexo;?></p>
				</div>

  				<div class=" col-md-4">
				<strong>Estado Civil: </strong>
				<p><?=$estado_civil;?></p>				
				</div>

				<div class=" col-md-4">
				<strong>Faixa Etária:</strong>
				<p><?php echo $faixaetaria; ?></p>
				</div> 

				<div class=" col-md-4">
				<strong>CNH:</strong>
				<p><?php echo $cnh; ?>
				</div>

				<div class=" col-md-12">
				<strong>Outras:</strong>
				<p><?=$outros04;?></p>
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
			
			<div class="row">
				
				<div class=" col-md-12">
				<strong>Formação Escolar:</strong>
				<p><ul><?php
				if($formacao_escolar != ""){
					foreach($formacao_escolar as $mostrar){
    					echo "<li>" . $mostrar . "</li>";
					}
				}?></ul></p>
				</div>
				
				<div class=" col-md-12">
				<strong>Área de formação:</strong>
				<p><?=$areadeformacao;?></p>
				</div>		
 
				<div class=" col-md-12">
				<p><strong>Cursos Complementares</strong></p><hr/>
				</div>

				<div class=" col-md-6">					
				<strong>Pacote Office:</strong>
				<p><ul><?php
				if($pacote_office != ""){
					foreach($pacote_office as $mostrar){
    					echo "<li>" . $mostrar . "</li>";
					}
				}?></ul></p> 
				</div>

				<div class=" col-md-6">
				<strong>Idiomas:</strong>
				<p><ul><?php
				if($idiomas != ""){
					foreach($idiomas as $mostrar){
    					echo "<li>" . $mostrar . "</li>";
					}
				}?></ul></p>
				</div>

				<div class=" col-md-12">
				<strong>Sistemas / Programas:</strong>
				<p><?=$programas;?></p>
				</div>

				<div class=" col-md-12">
				<strong>Conhecimentos específicos: </strong>
				<p><?=$conhecimentosespecificos;?></p>			
				</div>

				<div class=" col-md-12">
				<strong>Principais atividade do cargo:</strong>
				<p><?=$atividadedocargo;?></p>			
				</div>

				<div class=" col-md-12">
				<strong>Competências</strong>
				<p><ul><?php
				if($competencias != ""){
					foreach($competencias as $mostrar){
	    				echo "<li>" . $mostrar . "</li>";
					}
				}?></ul></p>
				</div>

				<div class=" col-md-12">
				<strong>Características Pessoais Imprescindíveis ao cargo:</strong>	
				<p><?=$caracteristicaspessoais;?></p>			
				</div>

				<div class=" col-md-12">
					<strong>Características indesejáveis: </strong>
					<p><?=$caracteristicasindesejaveis;?></p>	
				</div>

			</div>
		</div>
	</div>
</div>
