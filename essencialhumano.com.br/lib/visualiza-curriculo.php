<?php 
$result_visual = mysqli_query($conn,"select * from curriculo where cpf='$cpf' ;") or die(mysqli_error($conn)); 
 
$num_rows_visual = mysqli_num_rows($result_visual);
					if  ($num_rows_visual>0) {
						$comandoSQL_visual="SELECT `id_cargo_pretendido`, `outras_idioma`, `id_vaga_pretendido`,`deficiencia`, `salario_pretendido`, `id_horario`, 
						`nome`, DATE_FORMAT(data_nasc,  '%d/%m/%Y') as data_nasc, `estado_civil`, `sexo`, `naturalidade`, `profissao_conjuge`, 
						`id_renda_familia`, `tem_carro`, 
						`disp_mudanca`, `tem_moto`, `disp_viagem`, `id_tipo_residencia`, `endereco`, `bairro`, `cidade`, `uf`, `telefone`, 
						`telefone_recado`, `celular`, `email`, `email2`, `rg`, `cpf`, `id_escolaridade1`, `id_escolaridade2`, `id_escolaridade3`, 
						`id_idioma1`, `nivel_idioma1`, `id_idioma2`, `nivel_idioma2`, `id_idioma3`, `nivel_idioma3`, `instituicao_esc1`, `instituicao_esc2`,
						 `instituicao_esc3`, `curso_esc1`, `curso_esc2`, `curso_esc3`, `curso_extra1`, `curso_extra2`, `curso_extra3`, `instit_extra1`, 
						 `instit_extra2`, `instit_extra3`, `ano_extra1`, `ano_extra2`, `ano_extra3`, `id_situacao`, `nome_empresa1`, `nome_empresa2`,
						 `nome_empresa3`, `cargo_empresa1`, `cargo_empresa2`, `cargo_empresa3`, `admissao_empresa1`, `admissao_empresa2`, `admissao_empresa3`,
						 `demissao_empresa1`, `demissao_empresa2`, `demissao_empresa3`, `endereco_empresa1`, `endereco_empresa2`, `endereco_empresa3`, 
						 `fone_empresa1`, `fone_empresa2`, `fone_empresa3`, `superior_empresa1`, `superior_empresa2`, `superior_empresa3`, `ultsalario_empresa1`, 
						 `ultsalario_empresa2`, `ultsalario_empresa3`, `desliga_empresa1`, `desliga_empresa2`, `desliga_empresa3`, `atividades_empresa1`, 
						 `atividades_empresa2`, `atividades_empresa3`, dt_cadastro, hora_cadastro, arquivo_curriculo, arquivo_foto, senha, salario22 FROM curriculo WHERE cpf='$cpf' 
						 "; 
						 
					
				
						$sqlgeral_visual = mysqli_query($conn,$comandoSQL_visual);
						$num_total_visual = mysqli_num_rows($sqlgeral_visual);		 
									
						$linha_visual = mysqli_fetch_array($sqlgeral_visual);
						$id_cargo_pretendido=$linha_visual["id_cargo_pretendido"];
						$id_vaga_pretendido=$linha_visual["id_vaga_pretendido"];
						$deficiencia=$linha_visual["deficiencia"];
						$salario_pretendido=$linha_visual["salario22"];
						$id_horario=$linha_visual["id_horario"];
						$nome=$linha_visual["nome"];
						$nome1=$linha_visual["nome"];
						$outras_idioma=$linha_visual["outras_idioma"];	
						$data_nasc=$linha_visual["data_nasc"];
						$estado_civil=$linha_visual["estado_civil"];
						$sexo=$linha_visual["sexo"];
						$naturalidade=utf8_encode($linha_visual["naturalidade"]);
						$profissao_conjuge=utf8_encode($linha_visual["profissao_conjuge"]);
						$id_renda_familia=utf8_encode($linha_visual["id_renda_familia"]);
						$tem_carro=$linha_visual["tem_carro"]; 
						$disp_mudanca=$linha_visual["disp_mudanca"];
						$tem_moto=$linha_visual["tem_moto"];
						$disp_viagem=$linha_visual["disp_viagem"];
						$id_tipo_residencia=$linha_visual["id_tipo_residencia"];
						$endereco=utf8_encode($linha_visual["endereco"]);
						$bairro=utf8_encode($linha_visual["bairro"]);
						$cidade=utf8_encode($linha_visual["cidade"]);
						$uf=$linha_visual["uf"];
						$telefone=$linha_visual["telefone"];
						$telefone_recado=$linha_visual["telefone_recado"];
						$celular=$linha_visual["celular"];
						$email=$linha_visual["email"];
						$email2=$linha_visual["email2"];
						$rg=$linha_visual["rg"];
						$cpf=$linha_visual["cpf"];
						$id_escolaridade1=$linha_visual["id_escolaridade1"];
						$id_escolaridade2=$linha_visual["id_escolaridade2"];
						$id_escolaridade3=$linha_visual["id_escolaridade3"];
						$id_idioma1=$linha_visual["id_idioma1"];
						$nivel_idioma1=$linha_visual["nivel_idioma1"];
						$id_idioma2=$linha_visual["id_idioma2"];
						$nivel_idioma2=$linha_visual["nivel_idioma2"];
						$id_idioma3=$linha_visual["id_idioma3"];
							$nivel_idioma3=$linha_visual["nivel_idioma3"];
							$instituicao_esc1=utf8_encode($linha_visual["instituicao_esc1"]);
							$instituicao_esc2=utf8_encode($linha_visual["instituicao_esc2"]);
							$instituicao_esc3=utf8_encode($linha_visual["instituicao_esc3"]);
							$curso_esc1=utf8_encode($linha_visual["curso_esc1"]);
							$curso_esc2=utf8_encode($linha_visual["curso_esc2"]);
							$curso_esc3=utf8_encode($linha_visual["curso_esc3"]);
							$curso_extra1=utf8_encode($linha_visual["curso_extra1"]);
							$curso_extra2=utf8_encode($linha_visual["curso_extra2"]);
							$curso_extra3=utf8_encode($linha_visual["curso_extra3"]);
							$instit_extra1=utf8_encode($linha_visual["instit_extra1"]);
							$instit_extra2=utf8_encode($linha_visual["instit_extra2"]);
							$instit_extra3=utf8_encode($linha_visual["instit_extra3"]);
							$ano_extra1=$linha_visual["ano_extra1"];
							$ano_extra2=$linha_visual["ano_extra2"];
							$ano_extra3=$linha_visual["ano_extra3"];
							$id_situacao=$linha_visual["id_situacao"];
							$nome_empresa1=utf8_encode($linha_visual["nome_empresa1"]);
							$nome_empresa2=utf8_encode($linha_visual["nome_empresa2"]);
							$nome_empresa3=utf8_encode($linha_visual["nome_empresa3"]);
							$cargo_empresa1=utf8_encode($linha_visual["cargo_empresa1"]);
							$cargo_empresa2=utf8_encode($linha_visual["cargo_empresa2"]);
							$cargo_empresa3=utf8_encode($linha_visual["cargo_empresa3"]);
							$admissao_empresa1=$linha_visual["admissao_empresa1"];
							$admissao_empresa2=$linha_visual["admissao_empresa2"];
							$admissao_empresa3=$linha_visual["admissao_empresa3"];
							$demissao_empresa1=$linha_visual["demissao_empresa1"];
							$demissao_empresa2=$linha_visual["demissao_empresa2"];
							$demissao_empresa3=$linha_visual["demissao_empresa3"];
							$endereco_empresa1=utf8_encode($linha_visual["endereco_empresa1"]);
							$endereco_empresa2=utf8_encode($linha_visual["endereco_empresa2"]);
							$endereco_empresa3=utf8_encode($linha_visual["endereco_empresa3"]);
							$fone_empresa1=$linha_visual["fone_empresa1"];
							$fone_empresa2=$linha_visual["fone_empresa2"];
							$fone_empresa3=$linha_visual["fone_empresa3"];
							$superior_empresa1=utf8_encode($linha_visual["superior_empresa1"]);
							$superior_empresa2=utf8_encode($linha_visual["superior_empresa2"]);
							$superior_empresa3=utf8_encode($linha_visual["superior_empresa3"]);
							$ultsalario_empresa1=$linha_visual["ultsalario_empresa1"];
							$ultsalario_empresa2=$linha_visual["ultsalario_empresa2"];
							$ultsalario_empresa3=$linha_visual["ultsalario_empresa3"];
							$desliga_empresa1=utf8_encode($linha_visual["desliga_empresa1"]);
							$desliga_empresa2=utf8_encode($linha_visual["desliga_empresa2"]);
							$desliga_empresa3=utf8_encode($linha_visual["desliga_empresa3"]);
							$atividades_empresa1=utf8_encode($linha_visual["atividades_empresa1"]);
							$atividades_empresa2=utf8_encode($linha_visual["atividades_empresa2"]);
							$atividades_empresa3=utf8_encode($linha_visual["atividades_empresa3"]);
							$senha=$linha_visual["senha"];	
							$arquivo_curriculo=$linha_visual["arquivo_curriculo"];	
							$arquivo_foto=$linha_visual["arquivo_foto"];	
		?>


<div class="panel panel-default">
	<div class="panel-body">
    	<div class="container-fluid control-tam text-left">
    		<div class="row">

  			<div class="col-md-4">
            <strong>CPF:</strong>		
           <p><?php echo $cpf; ?></p>
            </div>

			<div class="col-md-4">
            <strong>Cargo Pretendido: </strong>           
            <p>			
			<?php  
				$sqlgeral = mysqli_query($conn,"select id_cargo, cargo from cargos where id_cargo='$id_cargo_pretendido' ");
	            $num_total = mysqli_num_rows($sqlgeral);			 
    	        if ($num_total != "0") {
            		$linha = mysqli_fetch_array($sqlgeral);
                    $titulo = utf8_encode($linha["cargo"]); 
                    echo "$titulo"; 
               }
			?>
			</p>            
            </div>

			<div class="col-md-4">
            <b>Vagas em aberto:</b>                
            <p><?php  $sqlgeral = mysqli_query($conn,"select id, titulo from geral where id_tipo=3 and id='$id_vaga_pretendido' ");
            $num_total = mysqli_num_rows($sqlgeral);			 
            if ($num_total != "0") {
               	$linha = mysqli_fetch_array($sqlgeral);
                $titulo = utf8_encode($linha["titulo"]); 
                echo "$titulo"; 

            }
			?></p>
            </div> 


  			</div>
  		</div>
		<div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-4">
            <strong>Pretensão Salarial:	 </strong>          
          	<div class="input-group">
                <p>R$ <?php echo $salario_pretendido ?></p>
            </div>
            </div>
            <div class="col-md-4">
            <strong>Horário Disponível:</strong>
            <p>
            <?php  
			$sqlgeral = mysqli_query($conn,"select id_horario, titulo from horario where id_horario='$id_horario' ");
			$num_total = mysqli_num_rows($sqlgeral);
			if ($num_total != "0") {
				$linha = mysqli_fetch_array($sqlgeral);
				$titulo = utf8_encode($linha["titulo"]);  
				echo "$titulo"; 
			
			}?>
            </p>           
            </div>
  			</div>
  		</div>

		<?php if ($deficiencia != 0) {?>
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-12">
            PDC Voltado para pessoas com deficiência física, auditiva, visual, mental ou múltipla.
            
            </div>
            </div>
  		</div>
         <?php }?>
        
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-4">
            <strong>Imagem:</strong>
            <?php if($arquivo_foto !="") {?><p><?php echo "<a href=\"$url_padrao/curriculos/$arquivo_foto\" title=\"$nome\" rel=\"lightbox\"><img src=\"$url_padrao/curriculos/$arquivo_foto\" width=\"60\" height=\"60\" class=\"img-thumbnail\"/></a>"; ?></p> <?php  } ?>
           
            </div>
            <div class="col-md-4">
           <strong>Arquivo em anexo:</strong>
           <?php if($arquivo_curriculo !="") {?>
            <p><?php echo "<a href=\"$url_padrao/curriculos/$arquivo_curriculo\" target=\"_blank\">Arquivo Currículo - Anexo</a>"; ?></p>
            <?php  } ?>
            </div>
  			</div>
  		</div>       
   
		<hr/>

	<div class="txt-tam20"><b>Informações Pessoais</b></div>

		<div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-6">
            <strong>Nome Completo:</strong>                		           
            <p><?php echo $nome; ?></p></div> 
  			<div class="col-md-3">
            <strong>Data de nascimento:  </strong>              		           
            <p><?php echo $data_nasc; ?></p>
            </div>
            <div class="col-md-3">
            <strong>Estado Civil:</strong>
			<p><?php  echo $estado_civil; ?></p>

            </div>
            </div>
  		</div>
        
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-3">
            <strong>Sexo:</strong>
			<p> <?php echo $sexo;  	?></p>

            </div>
            <div class="col-md-3">
            <strong>Profissão do Cônjuge:</strong>
			<p><?php echo $profissao_conjuge; ?></p></div> 
  			<div class="col-md-3">
            
		<p>
           
			</p>
        	</div>
            </div>
  		</div>
        
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-3">
            <strong>Possui Carro?</strong>
            <p><?php if ($tem_carro==1) { echo "Sim"; } else  { echo "Não"; } ?>&nbsp;</p>
            </div> 
  			<div class="col-md-3">
            <strong>Possui Moto?</strong>
			<p> <?php if ($tem_moto==1) { echo "Sim"; } else { echo "Não";} ?> &nbsp;</p> 
            </div>
            <div class="col-md-3">
            <strong>Disponibilidade de mudança?</strong>
			<p><?php if ($disp_mudanca==1) { echo "Sim"; } else { echo "Não";} ?> &nbsp;</p>
             </div>
  			<div class="col-md-3">
            <strong>Disponibilidade de viagem?</strong>
 			<p><?php if ($disp_viagem==1) { echo "Sim"; }  else { echo "Não";} ?> &nbsp;</p>

            </div>
            </div>
  		</div>

<hr/>

<div class="txt-tam20"><b>Endereço / Contatos</b></div>
	<div class="container-fluid control-tam text-left">
		<div class="row">
  			<div class="col-md-3">
            <strong>Endereço:</strong><p><?php echo $endereco; ?></p>
            </div>
 			
            <div class="col-md-3">
			<strong> Bairro:</strong><p><?php echo $bairro; ?></p>
            </div>

            <div class="col-md-3">
            <strong>Cidade:</strong><p><?php echo $cidade; ?></p>
            </div>

            <div class="col-md-3">
            <strong>Estado:</strong>
			<p>
            <?php  $sqlgeral = mysqli_query($conn,"select id_uf, titulo from estado_federal where id_uf='$uf' ");
			$num_total = mysqli_num_rows($sqlgeral);
			if ($num_total != "0") {
				$linha = mysqli_fetch_array($sqlgeral);$titulo = $linha["titulo"]; echo "$titulo";	
			}?>							
			</p>
            </div>

        </div>
	</div>
    
	<div class="container-fluid control-tam text-left">
		<div class="row">
			<div class="col-md-3">
			<strong>E-mail:</strong><p><?php echo $email; ?> </p>
            </div>

  			<div class="col-md-3">
			<strong>Telefone:</strong><p> <?php echo $telefone; ?></p>
            </div>

            <div class="col-md-3">
			<strong>Telefone: <small>[Recado]</small></strong><p><?php echo $telefone_recado; ?> </p>
            </div>

            <div class="col-md-3">
			<strong>Celular:</strong><p><?php echo $celular; ?></p>
            </div>
        </div>
	</div>

<hr/>

<div class="txt-tam20"><b>Escolaridade</b></div>
  		<div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-6">
              <strong>Instituição:</strong>
<p><?php echo $instituicao_esc1; ?> </p>

            </div>
            <div class="col-md-3">
            <strong>Curso:</strong>
<p><?php echo $curso_esc1; ?>  </p>

            </div>
            <div class="col-md-3">
            <strong>Nível de Formação 1:</strong>
            <p>
              	 <?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE id_escolaridade='$id_escolaridade1' ");
					    $num_total = mysqli_num_rows($sqlgeral);
			 
			           if ($num_total != "0") {
							$linha = mysqli_fetch_array($sqlgeral);
							$titulo = utf8_encode($linha["titulo"]); 
							echo "$titulo";	 
					   }
					?>
            </p>
           </div>
            </div>
        </div>
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-6">
            <strong>Instituição:</strong>
<p><?php echo $instituicao_esc2; ?></p>

            </div>
            <div class="col-md-3">
            <strong>Curso:</strong>
<p><?php echo $curso_esc2; ?></p>

            </div>
            <div class="col-md-3">
            <strong>Nível de Formação 2:</strong>
			<p>
              	 <?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE id_escolaridade='$id_escolaridade2' ");
					    $num_total = mysqli_num_rows($sqlgeral);
			 
			           if ($num_total != "0") {
							$linha = mysqli_fetch_array($sqlgeral);
							$titulo = utf8_encode($linha["titulo"]); 
							echo "$titulo"; 
					   }?>
                  </p>
            </div>
            </div>
        </div>
        <div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-6">
            <strong>Instituição:</strong>
				<p><?php echo $instituicao_esc3; ?></p>
            </div>
            <div class="col-md-3">
            <strong>Curso:</strong>
<p><?php echo $curso_esc3; ?> </p>
            </div>
            <div class="col-md-3">
            <strong>Nível de Formação 3:</strong>
            <p>
              	 <?php  $sqlgeral = mysqli_query($conn,"SELECT `id_escolaridade`, `titulo` FROM `escolaridade` WHERE id_escolaridade='$id_escolaridade3' ");
					    $num_total = mysqli_num_rows($sqlgeral);
			 
			           if ($num_total != "0") {
							$linha = mysqli_fetch_array($sqlgeral);
							$titulo = utf8_encode($linha["titulo"]);  
							echo "$titulo";	 

					   }
				?>
			</p>                              

            </div>
            </div>
        </div>

<hr/>

<div class="txt-tam20"><b>Situação Profissional</b></div>
  		<div class="container-fluid control-tam text-left">
    		<div class="row">
  			<div class="col-md-3">
            <strong>Situação Atual:</strong>

            <p><?php  $sqlgeral = mysqli_query($conn,"SELECT id_situacao, titulo FROM `situacao` WHERE id_situacao='$id_situacao' ");
			$num_total = mysqli_num_rows($sqlgeral);
			if ($num_total != "0") {
				$linha = mysqli_fetch_array($sqlgeral); 
				$titulo = utf8_encode($linha["titulo"]);  
				 echo "$titulo";  

			} ?>
</p>
            </div>
            </div>
        </div>
	</div>
</div>        
        


<?php } ?>