<?php 
$form_editar = "";
$nome_pagina = "Solicitação de vagas";?>

<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">
		<div class="row"> 
        	<div class="col-md-12 text-center">

       		<?php if (isset($_POST['cadastrar'])) { // iniciar gestão dos dados

       		$empresa=isset($_POST['empresa']) ? $_POST['empresa'] : null;
				$contato=isset($_POST['contato']) ? $_POST['contato'] : null;
				$cnpj=isset($_POST['cnpj']) ? $_POST['cnpj'] : null;
				$cpf=isset($_POST['cpf']) ? $_POST['cpf'] : null;
				$email=isset($_POST['email']) ? $_POST['email'] : null;
				$endereco=isset($_POST['endereco']) ? $_POST['endereco'] : null;
				$cidade=isset($_POST['cidade']) ? $_POST['cidade'] : null;
				$estado=isset($_POST['estado']) ? $_POST['estado'] : null;
				$cep=isset($_POST['cep']) ? $_POST['cep'] : null;
				$telefone=isset($_POST['telefone']) ? $_POST['telefone'] : null;
				$gerentevaga=isset($_POST['gerentevaga']) ? $_POST['gerentevaga'] : null;
				$datasolicitacao=isset($_POST['datasolicitacao']) ? $_POST['datasolicitacao'] : null;
				$outros01=isset($_POST['outros01']) ? $_POST['outros01'] : null;
				$nomecargo=isset($_POST['nomecargo']) ? $_POST['nomecargo'] : null;
				$numvagas=isset($_POST['numvagas']) ? $_POST['numvagas'] : null;
				$horariotrabalho=isset($_POST['horariotrabalho']) ? $_POST['horariotrabalho'] : null;
				$localtrabalho=isset($_POST['localtrabalho']) ? $_POST['localtrabalho'] : null;
				$formacontratacao=isset($_POST['formacontratacao']) ? $_POST['formacontratacao'] : null;
				$outros02=isset($_POST['outros02']) ? $_POST['outros02'] : null;
				$outros00=isset($_POST['outros00']) ? $_POST['outros00'] : null;
				$pedirsalarial=isset($_POST['pedirsalarial']) ? $_POST['pedirsalarial'] : null;
				$faixasalarial=isset($_POST['faixasalarial']) ? $_POST['faixasalarial'] : null;
				$salariofixo=isset($_POST['salariofixo']) ? $_POST['salariofixo'] : null;
				$variavel=isset($_POST['variavel']) ? $_POST['variavel'] : null;
				$beneficios=isset($_POST['beneficios']) ? $_POST['beneficios'] : null;
				$todos_beneficios=isset($_POST['todos_beneficios']) ? $_POST['todos_beneficios'] : null;
				$valoralimentacao=isset($_POST['valoralimentacao']) ? $_POST['valoralimentacao'] : null;
				$valortransporte=isset($_POST['valortransporte']) ? $_POST['valortransporte'] : null;
				$valorcombustivel=isset($_POST['valorcombustivel']) ? $_POST['valorcombustivel'] : null;
				$outros03=isset($_POST['outros03']) ? $_POST['outros03'] : null;
				$vagasigilosa=isset($_POST['vagasigilosa']) ? $_POST['vagasigilosa'] : null;
				$dispviagem=isset($_POST['dispviagem']) ? $_POST['dispviagem'] : null;
				$dispmudanca=isset($_POST['dispmudanca']) ? $_POST['dispmudanca'] : null;
				$conducaopropria=isset($_POST['conducaopropria']) ? $_POST['conducaopropria'] : null;
				$cond_carro=isset($_POST['cond_carro']) ? $_POST['cond_carro'] : null;
				$cond_moto=isset($_POST['cond_moto']) ? $_POST['cond_moto'] : null;
				$sexo=isset($_POST['sexo']) ? $_POST['sexo'] : null;
				$estado_civil=isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null;
				$faixaetaria=isset($_POST['faixaetaria']) ? $_POST['faixaetaria'] : null;
				$cnh=isset($_POST['cnh']) ? $_POST['cnh'] : null;
				$outros04=isset($_POST['outros04']) ? $_POST['outros04'] : null;
				$formacao_escolar=isset($_POST['formacao_escolar']) ? $_POST['formacao_escolar'] : null;
				$areadeformacao=isset($_POST['areadeformacao']) ? $_POST['areadeformacao'] : null;
				$pacote_office=isset($_POST['pacote_office']) ? $_POST['pacote_office'] : null;
				$idiomas=isset($_POST['idiomas']) ? $_POST['idiomas'] : null;
				$programas=isset($_POST['programas']) ? $_POST['programas'] : null;
				$conhecimentosespecificos=isset($_POST['conhecimentosespecificos']) ? $_POST['conhecimentosespecificos'] : null;
				$atividadedocargo=isset($_POST['atividadedocargo']) ? $_POST['atividadedocargo'] : null;
				$competencias=isset($_POST['competencias']) ? $_POST['competencias'] : null;
				$caracteristicaspessoais=isset($_POST['caracteristicaspessoais']) ? $_POST['caracteristicaspessoais'] : null;
				$caracteristicasindesejaveis=isset($_POST['caracteristicasindesejaveis']) ? $_POST['caracteristicasindesejaveis'] : null;

				$empresa=trim(strip_tags(addslashes(htmlspecialchars($empresa))));
				$contato=trim(strip_tags(addslashes(htmlspecialchars($contato))));
				$cnpj=trim(strip_tags(addslashes(htmlspecialchars($cnpj))));
				$cpf=trim(strip_tags(addslashes(htmlspecialchars($cpf))));
				$email=trim(strip_tags(addslashes(htmlspecialchars($email))));
				$endereco=trim(strip_tags(addslashes(htmlspecialchars($endereco))));
				$cidade=trim(strip_tags(addslashes(htmlspecialchars($cidade))));
				$estado=trim(strip_tags(addslashes(htmlspecialchars($estado))));
				$cep=trim(strip_tags(addslashes(htmlspecialchars($cep))));
				$telefone=trim(strip_tags(addslashes(htmlspecialchars($telefone))));
				$gerentevaga=trim(strip_tags(addslashes(htmlspecialchars($gerentevaga))));
				$datasolicitacao=trim(strip_tags(addslashes(htmlspecialchars($datasolicitacao))));
				$outros01=trim(strip_tags(addslashes(htmlspecialchars($outros01))));
				$nomecargo=trim(strip_tags(addslashes(htmlspecialchars($nomecargo))));
				$numvagas=trim(strip_tags(addslashes(htmlspecialchars($numvagas))));
				$horariotrabalho=trim(strip_tags(addslashes(htmlspecialchars($horariotrabalho))));
				$localtrabalho=trim(strip_tags(addslashes(htmlspecialchars($localtrabalho))));
				$formacontratacao=trim(strip_tags(addslashes(htmlspecialchars($formacontratacao))));
				$outros02=trim(strip_tags(addslashes(htmlspecialchars($outros02))));
				$outros00=trim(strip_tags(addslashes(htmlspecialchars($outros00))));
				$pedirsalarial=trim(strip_tags(addslashes(htmlspecialchars($pedirsalarial))));
				$faixasalarial=trim(strip_tags(addslashes(htmlspecialchars($faixasalarial))));
				$salariofixo=trim(strip_tags(addslashes(htmlspecialchars($salariofixo))));
				$variavel=trim(strip_tags(addslashes(htmlspecialchars($variavel))));
				$beneficios=trim(strip_tags(addslashes(htmlspecialchars($beneficios))));			
				$valoralimentacao=trim(strip_tags(addslashes(htmlspecialchars($valoralimentacao))));
				$valortransporte=trim(strip_tags(addslashes(htmlspecialchars($valortransporte))));
				$valorcombustivel=trim(strip_tags(addslashes(htmlspecialchars($valorcombustivel))));
				$outros03=trim(strip_tags(addslashes(htmlspecialchars($outros03))));
				$vagasigilosa=trim(strip_tags(addslashes(htmlspecialchars($vagasigilosa))));
				$dispviagem=trim(strip_tags(addslashes(htmlspecialchars($dispviagem))));
				$dispmudanca=trim(strip_tags(addslashes(htmlspecialchars($dispmudanca))));
				$conducaopropria=trim(strip_tags(addslashes(htmlspecialchars($conducaopropria))));
				$cond_carro=trim(strip_tags(addslashes(htmlspecialchars($cond_carro))));
				$cond_moto=trim(strip_tags(addslashes(htmlspecialchars($cond_moto))));
				$sexo=trim(strip_tags(addslashes(htmlspecialchars($sexo))));
				$estado_civil=trim(strip_tags(addslashes(htmlspecialchars($estado_civil))));
				$faixaetaria=trim(strip_tags(addslashes(htmlspecialchars($faixaetaria))));
				$cnh=trim(strip_tags(addslashes(htmlspecialchars($cnh))));
				$outros04=trim(strip_tags(addslashes(htmlspecialchars($outros04))));				
				$areadeformacao=trim(strip_tags(addslashes(htmlspecialchars($areadeformacao))));
				$programas=trim(strip_tags(addslashes(htmlspecialchars($programas))));
				$conhecimentosespecificos=trim(strip_tags(addslashes(htmlspecialchars($conhecimentosespecificos))));
				$atividadedocargo=trim(strip_tags(addslashes(htmlspecialchars($atividadedocargo))));
				$caracteristicaspessoais=trim(strip_tags(addslashes(htmlspecialchars($caracteristicaspessoais))));
				$caracteristicasindesejaveis=trim(strip_tags(addslashes(htmlspecialchars($caracteristicasindesejaveis))));
				

				$empresa  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$empresa);
        		$contato  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$contato);

				 $cnpj = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cnpj);
				 $cpf = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cpf);
				 $email = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$email);
				 $endereco = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$endereco);
				 $cidade = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cidade);
				 $estado = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$estado);
				 $cep = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cep);
				 $telefone = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$telefone);
				 $gerentevaga = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$gerentevaga);
				 $datasolicitacao = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$datasolicitacao);
				 $outros01 = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$outros01);
				 $nomecargo = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$nomecargo);
				 $numvagas = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$numvagas);
				 $horariotrabalho = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$horariotrabalho);
				 $localtrabalho = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$localtrabalho);
				 $formacontratacao = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$formacontratacao);
				 $outros02 = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$outros02);
				 $outros00 = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$outros00);
				  $pedirsalarial = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$pedirsalarial);
				$faixasalarial = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$faixasalarial);
				 $salariofixo = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$salariofixo);
				 $variavel = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$variavel);
				 $beneficios = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$beneficios);
				 $todos_beneficios = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$todos_beneficios);
				 $valoralimentacao = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$valoralimentacao);
				 $valortransporte = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$valortransporte);
				 $valorcombustivel = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$valorcombustivel);
				 $outros03 = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$outros03);
				 $vagasigilosa = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$vagasigilosa);
				 $dispviagem = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$dispviagem);
				 $dispmudanca = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$dispmudanca);
				 $conducaopropria = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$conducaopropria);
				 $cond_carro = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cond_carro);
				 $cond_moto = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cond_moto);
				 $sexo = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$sexo);
				 $estado_civil = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$estado_civil);
				 $faixaetaria = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$faixaetaria);
				 $cnh = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cnh);
				 $outros04 = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$outros04);
				 $formacao_escolar = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$formacao_escolar);
				 $areadeformacao = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$areadeformacao);
				 $pacote_office = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$pacote_office);
				 $idiomas = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$idiomas);
				 $programas = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$programas);
				 $conhecimentosespecificos = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$conhecimentosespecificos);
				 $atividadedocargo = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$atividadedocargo);
				 $competencias = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$competencias);
				 $caracteristicaspessoais = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$caracteristicaspessoais);
				$caracteristicasindesejaveis = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$caracteristicasindesejaveis);

				$competencias_array = "";
				$idiomas_array = "";
				$todos_beneficios_array = "";
				$pacote_office_array = "";
				$formacao_escolar_array ="";
				$mostrar = "";


				$datasolicitacao_tmp = explode("/", $datasolicitacao);
				 $dat_tmp =  $datasolicitacao_tmp[2]."-".$datasolicitacao_tmp[1]."-".$datasolicitacao_tmp[0];
				if ($idiomas != "") { 
					foreach($idiomas as $mostrar){ 
						if($idiomas_array != "")
							$idiomas_array .= "," . $mostrar;
						else
							$idiomas_array .= $mostrar;
					}
				}
				if ($competencias != "") {
					foreach($competencias as $mostrar){ 
						if($competencias_array != "")
							$competencias_array .= "," . $mostrar;
						else
							$competencias_array .= $mostrar;
					}
				}
				if ($pacote_office != "") {
					foreach($pacote_office as $mostrar){ 
						if($pacote_office_array != "")
							$pacote_office_array .= "," . $mostrar;
						else
							$pacote_office_array .= $mostrar;
					}
				}
				if ($formacao_escolar_array != "") {
					foreach($formacao_escolar as $mostrar){ 
						if($formacao_escolar_array != "")
							$formacao_escolar_array .= "," . $mostrar;
						else
							$formacao_escolar_array .= $mostrar;
					}
				}
				if ($todos_beneficios != "") {
					foreach($todos_beneficios as $mostrar){ 
						if($todos_beneficios_array != "")
							$todos_beneficios_array .= "," . $mostrar;
						else
							$todos_beneficios_array .= $mostrar;
					}
				}	 
            
                $data_cadastro = date('Y-m-d');
                $hora_cadastro = date('H:i:s');

                $dados = "INSERT INTO `solicitacaodevagas`(`empresa`, `contato`, `cnpj`, `cpf`,`email`, `endereco`, `cidade`,`estado`,`cep`, `telefone`, `gerentevaga`, `datasolicitacao`, `outros01`, `nomecargo`, `numvagas`, `horariotrabalho`, `localtrabalho`, `formacontratacao`, `outros02`, `outros00`, `pedirsalarial`, `salariofixo`, `faixasalarial`, `variavel`, `beneficios`, `todos_beneficios`, `valoralimentacao`, `valortransporte`, `valorcombustivel`, `outros03`, `vagasigilosa`, `dispviagem`, `dispmudanca`, `conducaopropria`, `cond_carro`, `cond_moto`, `sexo`, `estado_civil`, `faixaetaria`, `cnh`, `outros04`, `formacao_escolar`, `areadeformacao`, `pacote_office`, `idiomas`, `programas`, `conhecimentosespecificos`, `atividadedocargo`, `competencias`, `caracteristicaspessoais`, `caracteristicasindesejaveis`, `data_criacao`, `hora_criacao`) VALUES ('$empresa',
'$contato',
'$cnpj',
'$cpf',
'$email',
'$endereco',
'$cidade',
'$estado',
'$cep',
'$telefone',
'$gerentevaga',
'$dat_tmp',
'$outros01',
'$nomecargo',
'$numvagas',
'$horariotrabalho',
'$localtrabalho',
'$formacontratacao',
'$outros02',
'$outros00',
'$pedirsalarial',
'$salariofixo',
'$faixasalarial',
'$variavel',
'$beneficios',
'$todos_beneficios_array',
'$valoralimentacao',
'$valortransporte',
'$valorcombustivel',
'$outros03',
'$vagasigilosa',
'$dispviagem',
'$dispmudanca',
'$conducaopropria',
'$cond_carro',
'$cond_moto',
'$sexo',
'$estado_civil',
'$faixaetaria',
'$cnh',
'$outros04',
'$formacao_escolar_array',
'$areadeformacao',
'$pacote_office_array',
'$idiomas_array',
'$programas',
'$conhecimentosespecificos',
'$atividadedocargo',
'$competencias_array',
'$caracteristicaspessoais',
'$caracteristicasindesejaveis','$data_cadastro','$hora_cadastro')";

                mysqli_query($conn, $dados) or die(mysqli_error($conn));

                $idgerado = mysqli_insert_id($conn);

                echo "<div class=\"alert alert-success\"><h2>Cadastro de Vaga realizado com Sucesso.</h2><p>Em breve voc&ecirc; receber&aacute; um retorno da Essencial Humano Consultoria sobre a abertura da vaga!<br>Obrigada!</p></div>";

                //ENVIO DE MENSAGEns     
						$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
						<a href=\"".URL1."\"><img src=\"".URL1."/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
						</td></tr><tr><td>
						
						<h3><strong>Prezado (a),</strong></h3>
						<p>A empresa <strong>$empresa - $cnpj / $cpf</strong> realizou um novo cadastrado no site da Essencial Humano com <b>sucesso!</b></p>
						<p><a href=\"".URL1."/alteracao-de-vagas?codigo=$idgerado\">https://www.essencialhumano.com.br/alteracao-de-vagas?codigo=$idgerado</a></p>
										
						</td></tr><tr><td><hr/></td></tr><tr><td><strong>".EMP1."</strong>
						<br />E-mail: ".MAIL."<br />Telefones: ".TEL1."<br/>
						<b>Acesse:</b> <a href=\"".URL1."\">".SIT1."</a></td></tr></table>");
						
						$nome1 = utf8_decode("$empresa");					
						require_once('classes/class.phpmailer.php');
						$mailer = new PHPMailer();
						$mailer->IsSMTP();
						$mailer->SMTPDebug = 1;					
						$mailer->SMTPAuth   = true;  //Define se haverá ou não autenticação no SMTP;
						$mailer->Port = MPOR; //Indica a porta de conexão para a saída de e-mails.				
						$mailer->Host = MSMT; //Onde em 'servidor_de_saida'.
						$mailer->Username = MMAL; //Informe o e-mai o completo
						$mailer->Password = MSEN; //Senha da caixa postal
						$mailer->FromName = utf8_decode(EMP1); //Nome que será exibido para o destinatário
						$mailer->From = MMAL; //Obrigatório ser a mesma caixa postal indicada em "username"
						$mailer->AddReplyTo("$email", "$nome1");
						$mailer->AddAddress(MAI1, EMP1);
						$mailer->Subject = "Cadastro de vagas";
						$mailer->IsHTML(true);
						$mailer->Body = $mensagem;
						if(!$mailer->Send()) { 
							echo "$descricaoErroecho Erro: <div><strong>" . $mailer->ErrorInfo; echo " </strong></div>";	exit;
						}

                ?>

                <?php include_once("lib/dados-danovasvagas.php"); ?>
                







			<?php	
			}else{ // carregar formulário ?>  
            	<form id="cadastrovaga" name="cadastrovaga" enctype="multipart/form-data" method="post" class="form">
	    			<?php include_once("lib/form-novasvagas.php"); ?>               		      
				</form>
			<?php } // fechar ?>

	  		</div>
		</div>
	</div>
</section>
