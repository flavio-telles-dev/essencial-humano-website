<?php 
$form_editar = "";
$nome_pagina = utf8_encode("Solicitação de vagas");?>

<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">
		<div class="row"> 
        	<div class="col-md-12 text-center">

       		<?php if (isset($_POST['cadastrar'])) { // iniciar gestão dos dados

       			

       			$empresa=$_POST['empresa'];
				$contato=$_POST['contato'];
				$cnpj=$_POST['cnpj'];
				$email=$_POST['email'];
				$endereco=$_POST['endereco'];
				$cidade=$_POST['cidade'];
				$telefone=$_POST['telefone'];
				$gerentevaga=$_POST['gerentevaga'];
				$datasolicitacao=$_POST['datasolicitacao'];
				$outros01=$_POST['outros01'];
				$nomecargo=$_POST['nomecargo'];
				$numvagas=$_POST['numvagas'];
				$horariotrabalho=$_POST['horariotrabalho'];
				$localtrabalho=$_POST['localtrabalho'];
				$formacontratacao=$_POST['formacontratacao'];
				$outros02=$_POST['outros02'];
				$salariofixo=$_POST['salariofixo'];
				$variavel=$_POST['variavel'];
				$beneficios=$_POST['beneficios'];
				$todos_beneficios=$_POST['todos_beneficios'];
				$valoralimentacao=$_POST['valoralimentacao'];
				$outros00=$_POST['outros00'];
				$outros03=$_POST['outros03'];
				$vagasigilosa=$_POST['vagasigilosa'];
				$dispviagem=$_POST['dispviagem'];
				$dispmudanca=$_POST['dispmudanca'];
				$conducaopropria=$_POST['conducaopropria'];
				$cond_carro=$_POST['cond_carro'];
				$cond_moto=$_POST['cond_moto'];
				$sexo=$_POST['sexo'];
				$estado_civil=$_POST['estado_civil'];
				$faixaetaria=$_POST['faixaetaria'];
				$cnh=$_POST['cnh'];
				$outros04=$_POST['outros04'];
				$formacao_escolar=$_POST['formacao_escolar'];
				$areadeformacao=$_POST['areadeformacao'];
				$pacote_office=$_POST['pacote_office'];
				$idiomas=$_POST['idiomas'];
				$programas=$_POST['programas'];
				$conhecimentosespecificos=$_POST['conhecimentosespecificos'];
				$atividadedocargo=$_POST['atividadedocargo'];
				$competencias=$_POST['competencias'];
				$caracteristicaspessoais=$_POST['caracteristicaspessoais'];
				$caracteristicasindesejaveis=$_POST['caracteristicasindesejaveis'];

				$empresa  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$empresa);
        		$empresa = trim(strip_tags(addslashes($empresa)));
        		$contato  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$contato);
        		$contato = trim(strip_tags(addslashes($contato)));


				=$_POST['contato'];
				$cnpj=$_POST['cnpj'];
				$email=$_POST['email'];
				$endereco=$_POST['endereco'];
				$cidade=$_POST['cidade'];
				$telefone=$_POST['telefone'];
				$gerentevaga=$_POST['gerentevaga'];
				$datasolicitacao=$_POST['datasolicitacao'];
				$outros01=$_POST['outros01'];
				$nomecargo=$_POST['nomecargo'];
				$numvagas=$_POST['numvagas'];
				$horariotrabalho=$_POST['horariotrabalho'];
				$localtrabalho=$_POST['localtrabalho'];
				$formacontratacao=$_POST['formacontratacao'];
				$outros02=$_POST['outros02'];
				$salariofixo=$_POST['salariofixo'];
				$variavel=$_POST['variavel'];
				$valoralimentacao=$_POST['valoralimentacao'];
				$outros00=$_POST['outros00'];
				$outros03=$_POST['outros03'];
				$faixaetaria=$_POST['faixaetaria'];
				$cnh=$_POST['cnh'];
				$outros04=$_POST['outros04'];
				$areadeformacao=$_POST['areadeformacao'];
				
				$programas=$_POST['programas'];
				$conhecimentosespecificos=$_POST['conhecimentosespecificos'];
				$atividadedocargo=$_POST['atividadedocargo'];
				
				$caracteristicaspessoais=$_POST['caracteristicaspessoais'];
				$caracteristicasindesejaveis=$_POST['caracteristicasindesejaveis'];


       			$erro = 0;
				$cpf=$cpf_enviado;					
				if  ($cpf!="") {				
					$id_cargo_pretendido=$_POST['cargo'];
                    $sqlgeral = mysqli_query($conn,"select id_cargo, cargo from cargos where id_cargo=$id_cargo_pretendido");
                    $num_total = mysqli_num_rows($sqlgeral);		 
                    if ($num_total != "0") {
                        $linha = mysqli_fetch_array($sqlgeral);
                        $nomecargo = utf8_encode($linha["cargo"]);  
                    }
					$id_vaga_pretendido=$_POST['vagas_abertas'];
					if ($id_vaga_pretendido!="") {
						$sqlgeral = mysqli_query($conn,"select id, titulo from geral where id=$id_vaga_pretendido");
						$num_total = mysqli_num_rows($sqlgeral);
						 
						if ($num_total != "0") {
							$linhav = mysqli_fetch_array($sqlgeral); $nomevaga = utf8_encode($linhav["titulo"]);  
						}
					}
					
                     if (isset($_POST['deficiencia'])) {
                     $deficiencia="1"; }
                     else {
                     $deficiencia="0"; }
					 $salario=$_POST['salario'];				
                     $id_horario=$_POST['horario'];
                      
                     $senha=$_POST['senha1'];
                     $key ="essencial_";
                     //Criptografia da Senha
                     $senha=md5($senha.'key'); 

					
					// ARQUIVO CURRICULO *****************************************************************
					if ($_FILES['arquivo_anexo']['name']!="") { 
						$arquivo_nome1 =$_FILES['arquivo_anexo']['name'];
						$arquivo_type1 =strtolower($arquivo_nome1);
						$arquivo_type1 = substr($arquivo_type1, -4); 
						if($arquivo_type1[0] == '.'){ 
							$arquivo_type1 = substr($arquivo_type1, -3); 
						}					
						$nomearquivo1 = "curriculo-".date("d-m-Y")."-".date("h-i");
						$userfile1 =$_FILES['arquivo_anexo']['tmp_name'];
						
						if($arquivo_type1 == "pdf") { $userfile_name1 = "$nomearquivo1.pdf"; 
						}elseif($arquivo_type1 == "doc") { $userfile_name1 = "$nomearquivo1.doc"; 
						}elseif($arquivo_type1 == "docx") { $userfile_name1 = "$nomearquivo1.docx";
						}else{ $userfile_name1 = ""; }                  
						
						if($userfile_name1 != "") { $dest = "curriculos/".$userfile_name1; copy($userfile1, $dest); }	
					}

					// ARQUIVO FOTO *****************************************************************
					if ($_FILES['arquivo_foto']['name']!="") { 
						$arquivo_nome2 =$_FILES['arquivo_foto']['name'];
						$arquivo_type2 =strtolower($arquivo_nome2);
						$arquivo_type2 = substr($arquivo_type2, -4);
						if($arquivo_type2[0] == '.'){
							$arquivo_type2= substr($arquivo_type2, -3);
						}
											
						$nomearquivo2 = "foto-".date("d-m-Y")."-".date("h-i");
						$userfile2 =$_FILES['arquivo_foto']['tmp_name'];
						
						if($arquivo_type2 == "png") { $userfile_name2 = "$nomearquivo2.png";
						}elseif($arquivo_type2 == "gif") { $userfile_name2 = "$nomearquivo2.gif";
						}elseif($arquivo_type2 == "jpeg") { $userfile_name2 = "$nomearquivo2.jpg"; }elseif($arquivo_type2 == "jpg") { $userfile_name2 = "$nomearquivo2.jpg"; 
						}elseif($arquivo_type2 == "jpe") { $userfile_name2 = "$nomearquivo2.jpg";
						}else{ $userfile_name2 = ""; }                   
                    
						if($userfile_name2 != "") { 
							$dest2 = "curriculos/".$userfile_name2; copy($userfile2, $dest2); 			
							@$original = imagecreatefromjpeg("$dest2");
							$imnfo = getimagesize("$dest2");
							$img_w = $imnfo[0];       // largura
							$img_h = $imnfo[1];       // altura
							$img_f = $imnfo[2];       // extensão
							$img_m = $imnfo['mime']; // mime-type
							if( $img_m != "image/png" && $img_m != "image/gif" && $img_m != "image/bmp" && $img_m != "image/tiff") {
								if($img_w > 400) {
									$x = imagesx($original);
									$y = imagesy($original);
									$newX = 400;
									$ratio = $newX / $x;
									$newY = $y * $ratio;
									$img_temp = imagecreatetruecolor($newX,$newY);	
									imagecopyresized($img_temp, $original, 0, 0, 0, 0, $newX, $newY, $x, $y);
									imagejpeg($img_temp,  "$dest2", 98);
									imagedestroy($img_temp);
									imagedestroy($original);
								}
							}
						}	
					}else{ $userfile_name2="";}
                
            
                     //Informações Pessoais
                    $nome=utf8_encode($_POST['nome']);
                    $nome1=$_POST['nome'];
                     $data_nasc=$_POST['datanascimento'];
					 $dat_tmp = explode("/", $data_nasc);
					 $dat =  $dat_tmp[2]."-".$dat_tmp[1]."-".$dat_tmp[0];
					 
                     $estado_civil=$_POST['estado']; 
                     $sexo=$_POST['sexo']; 
                     $naturalidade= $_POST['naturalidade'] ?? null;
                     $profissao_conjuge=$_POST['profissaoconjuge'] ?? null;
                     $id_renda_familia=utf8_encode($_POST['renda']);
                     $tem_carro=$_POST['carro']; 
                    $disp_mudanca=$_POST['mudanca'];
                     $tem_moto=$_POST['moto'];
                     $disp_viagem=$_POST['viagem'];
                     
                     //Endereço/Contatos
                     $id_tipo_residencia=utf8_encode($_POST['tipo_residencia'] ?? null) ;
                      $endereco=$_POST['endereco'];
                      $bairro=$_POST['bairro'];
                      $cidade=$_POST['cidade'];
                      $uf=$_POST['uf'];
                      $telefone=$_POST['telefone'];
                     
                    $telefone_recado=$_POST['telefone_recado'];
                     $celular=$_POST['celular'];
                     $email=strtolower($_POST['email']);
                     $email2=strtolower($_POST['email2'] ?? null);
                     
                     //Documentos
                     $rg=$_POST['rg'] ?? null;
                     
                     
                     //Escolaridade
                     $id_escolaridade1=$_POST['formacao_nivel1'];
                     $id_escolaridade2=$_POST['formacao_nivel2'];
                     $id_escolaridade3=$_POST['formacao_nivel3'];
                     
                     $outras_idioma=$_POST['outras_idioma'] ?? null;
                     
                     $instituicao_esc1=$_POST['formacao_instituicao1'] ?? null;
                     $instituicao_esc2=$_POST['formacao_instituicao2'] ?? null;
                     $instituicao_esc3=$_POST['formacao_instituicao3'] ?? null;
                     
                      $curso_esc1=$_POST['formacao_curso1'] ?? null;
                     $curso_esc2=$_POST['formacao_curso2'] ?? null;
                     $curso_esc3=$_POST['formacao_curso3'] ?? null;
                     
                     //Cursos Extracurriculares
                     $curso_extra1=$_POST['extra_curso1'] ?? null;
                     $curso_extra2=$_POST['extra_curso2'] ?? null;
                     $curso_extra3=$_POST['extra_curso3'] ?? null;
                     $instit_extra1=$_POST['extra_instituicao1'] ?? null;
                     $instit_extra2=$_POST['extra_instituicao2'] ?? null;
                     $instit_extra3=$_POST['extra_instituicao3'] ?? null;
                     $ano_extra1=$_POST['extra_ano1'] ?? null;
                      $ano_extra2=$_POST['extra_ano2'] ?? null;
                      $ano_extra3=$_POST['extra_ano3'] ?? null;
                      
                      //Situação Profissional
                      $id_situacao=$_POST['profissional_situacao_atual'] ?? null;
                      $nome_empresa1=$_POST['profissional_empresa1'] ?? null;
                      $nome_empresa2=$_POST['profissional_empresa2'] ?? null;
                       $nome_empresa3=$_POST['profissional_empresa3'] ?? null;
                       
                     $cargo_empresa1=$_POST['profissional_cargo1'] ?? null;
                     $cargo_empresa2=$_POST['profissional_cargo2'] ?? null;
                     $cargo_empresa3=$_POST['profissional_cargo3'] ?? null;
                     
                     $admissao_empresa1=$_POST['profissional_admissao1'] ?? null;
                     $admissao_empresa2=$_POST['profissional_admissao2'] ?? null;
                     $admissao_empresa3=$_POST['profissional_admissao3'] ?? null;
                     
                     $demissao_empresa1=$_POST['profissional_demissao1'] ?? null;
                     $demissao_empresa2=$_POST['profissional_demissao2'] ?? null;
                     $demissao_empresa3=$_POST['profissional_demissao3'] ?? null;
                     
                     $endereco_empresa1=$_POST['profissional_endereco1'] ?? null;
                     $endereco_empresa2=$_POST['profissional_endereco2'] ?? null;
                     $endereco_empresa3=$_POST['profissional_endereco3'] ?? null;
                     
                     $fone_empresa1=$_POST['profissional_telefone1'] ?? null;
                     $fone_empresa2=$_POST['profissional_telefone2'] ?? null;
                     $fone_empresa3=$_POST['profissional_telefone3'] ?? null;
                     
                     $superior_empresa1=$_POST['profissional_nome_superior1'] ?? null;
                     $superior_empresa2=$_POST['profissional_nome_superior2'] ?? null;
                     $superior_empresa3=$_POST['profissional_nome_superior3'] ?? null;
                     
                     $ultsalario_empresa1=$_POST['profissional_ultimo_salario1'] ?? null;
                     $ultsalario_empresa2=$_POST['profissional_ultimo_salario2'] ?? null;
                     $ultsalario_empresa3=$_POST['profissional_ultimo_salario3'] ?? null;
                     
                     $desliga_empresa1=$_POST['profissional_motivo_desligamento1'] ?? null;
                     $desliga_empresa2=$_POST['profissional_motivo_desligamento2'] ?? null;
                     $desliga_empresa3=$_POST['profissional_motivo_desligamento3'] ?? null;
                     
                     $atividades_empresa1= $_POST['profissional_habilidades1'] ?? null;
                     $atividades_empresa2=$_POST['profissional_habilidades2'] ?? null;
                     $atividades_empresa3=$_POST['profissional_habilidades3'] ?? null;
                     $id_idioma1=""; $nivel_idioma1=""; $id_idioma2=""; $nivel_idioma2=""; $id_idioma3=""; $nivel_idioma3="";                   
            
                    $data_cadastro = date('d/m/Y');
                    $hora_cadastro = date('H:i');
					
                    
                    $comandoSQL= utf8_decode("INSERT INTO `curriculo`(`id_cargo_pretendido`, `outras_idioma`, `id_vaga_pretendido`, `deficiencia`,  `id_horario`, 
                        `nome`, `data_nasc`, `estado_civil`, `sexo`, `naturalidade`, `profissao_conjuge`, `id_renda_familia`, `tem_carro`, 
                        `disp_mudanca`, `tem_moto`, `disp_viagem`, `id_tipo_residencia`, `endereco`, `bairro`, `cidade`, `uf`, `telefone`, 
                        `telefone_recado`, `celular`, `email`, `email2`, `rg`, `cpf`, `id_escolaridade1`, `id_escolaridade2`, `id_escolaridade3`, 
                        `id_idioma1`, `nivel_idioma1`, `id_idioma2`, `nivel_idioma2`, `id_idioma3`, `nivel_idioma3`, `instituicao_esc1`, `instituicao_esc2`,
                         `instituicao_esc3`, `curso_esc1`, `curso_esc2`, `curso_esc3`, `curso_extra1`, `curso_extra2`, `curso_extra3`, `instit_extra1`, 
                         `instit_extra2`, `instit_extra3`, `ano_extra1`, `ano_extra2`, `ano_extra3`, `id_situacao`, `nome_empresa1`, `nome_empresa2`,
                         `nome_empresa3`, `cargo_empresa1`, `cargo_empresa2`, `cargo_empresa3`, `admissao_empresa1`, `admissao_empresa2`, `admissao_empresa3`,
                         `demissao_empresa1`, `demissao_empresa2`, `demissao_empresa3`, `endereco_empresa1`, `endereco_empresa2`, `endereco_empresa3`, 
                         `fone_empresa1`, `fone_empresa2`, `fone_empresa3`, `superior_empresa1`, `superior_empresa2`, `superior_empresa3`, `ultsalario_empresa1`, 
                         `ultsalario_empresa2`, `ultsalario_empresa3`, `desliga_empresa1`, `desliga_empresa2`, `desliga_empresa3`, `atividades_empresa1`, 
                         `atividades_empresa2`, `atividades_empresa3`, dt_cadastro, hora_cadastro, arquivo_curriculo, arquivo_foto, senha, salario22) 
                         VALUES 
                         ($id_cargo_pretendido, '$outras_idioma', '$id_vaga_pretendido', '$deficiencia',   '$id_horario', 
                        '$nome', '$dat', '$estado_civil', '$sexo', '$naturalidade', '$profissao_conjuge', '$id_renda_familia', '$tem_carro', 
                        '$disp_mudanca', '$tem_moto', '$disp_viagem', '$id_tipo_residencia', '$endereco', '$bairro', '$cidade', '$uf', '$telefone', 
                        '$telefone_recado', '$celular', '$email', '$email2', '$rg', '$cpf', '$id_escolaridade1', '$id_escolaridade2', '$id_escolaridade3', 
                        '$id_idioma1', '$nivel_idioma1', '$id_idioma2', '$nivel_idioma2', '$id_idioma3', '$nivel_idioma3', '$instituicao_esc1', '$instituicao_esc2',
                         '$instituicao_esc3', '$curso_esc1', '$curso_esc2', '$curso_esc3', '$curso_extra1', '$curso_extra2', '$curso_extra3', '$instit_extra1', 
                         '$instit_extra2', '$instit_extra3', '$ano_extra1', '$ano_extra2', '$ano_extra3', $id_situacao, '$nome_empresa1', '$nome_empresa2',
                         '$nome_empresa3', '$cargo_empresa1', '$cargo_empresa2', '$cargo_empresa3', '$admissao_empresa1', '$admissao_empresa2', '$admissao_empresa3',
                         '$demissao_empresa1', '$demissao_empresa2', '$demissao_empresa3', '$endereco_empresa1', '$endereco_empresa2', '$endereco_empresa3', 
                         '$fone_empresa1', '$fone_empresa2', '$fone_empresa3', '$superior_empresa1', '$superior_empresa2', '$superior_empresa3', '$ultsalario_empresa1', 
                         '$ultsalario_empresa2', '$ultsalario_empresa3', '$desliga_empresa1', '$desliga_empresa2', '$desliga_empresa3', '$atividades_empresa1', 
                         '$atividades_empresa2', '$atividades_empresa3', CURDATE(), '$hora_cadastro', '$userfile_name1', '$userfile_name2', '$senha', '$salario')");
            
                   // echo $comandoSQL;
                    
                    $sql=mysqli_query($conn,$comandoSQL) 
                    or die(mysqli_error($conn));
					if ($erro==0) {
						if(isset($_GET['vaga'])) {
							echo "<div class=\"alert alert-success txt-tam20\"><p class=\"text-center\">$nome1, Seu Curr&iacute;culo foi cadastrado na vaga (<strong>$nomevaga</strong>).<br />
							Agradecemos o seu contato!</p></div>";
						}else{
							echo "<div class=\"alert alert-success txt-tam20\"><p class=\"text-center\">$nome1, Seu Curr&iacute;culo foi enviado com sucesso.<br>  Enviaremos por e-mail a <b>confirma&ccedil;&atilde;o do cadastro</b>.<br><br> Agradecemos o seu contato!</p></div>";
						}

						$date_home = date("h:i:s");
						echo "<h4 class=\"txt-tam28 text-center\"><strong>Visualizar Curr&iacute;culo</strong></h4>";?>
						<div class="text-left">
						<?php include("lib/visualiza-curriculo.php");?>
						</div><?php
						//ENVIAR EMAIL *****************************************************************
                        //CONFIGURA&Ccedil;&Otilde;ES
                                     
                        $date = date("d/m/Y") ." &agrave;s ". date("H:i");
            
                        //CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************						
						$assunto = utf8_decode("Resposta Automática (".EMP1." - Cadastro Currículo)");
							 
						//ENVIO DE MENSAGEns     
						$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
						<a href=\"".URL1."\"><img src=\"".URL1."/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
						</td></tr><tr><td>
						
						<h3><strong>Prezado (a),</strong></h3>
						<p>O seu currículo foi cadastrado no site da Essencial Humano com <b>sucesso!</b></p>
						<p>Agradecemos o seu contato!</p>
						<p>O seu currículo ficará em nosso banco de dados de forma permanente.</p>
						<p>Recomendamos que você anote a seu login e senha do cadastro em um local que possa lembrar, para que você consiga atualizar, sempre que precisar, as suas informações do cadastro do currículo.</p><strong>Seus dados de acesso:</strong><br>
						Login: $cpf_enviado<br>
						Senha: ".$_POST['senha1']."<br>
						<p>Mas, se você esquecer a senha, é só solicitar nova senha no campo abaixo do login. Então receberá um link no seu e-mail para criar nova senha. <strong>Fácil!</strong></p>
						<p>O seu cadastro em nossa consultoria é inteiramente gratuito. Não haverá cobrança de qualquer taxa para participar de processo seletivo.</p>
						<p>Para nós é importante termos o seu currículo cadastrado no sistema do site para que localizemos o seu perfil de forma mais eficiente e rápida.</p>
										
						</td></tr><tr><td><hr/></td></tr><tr><td><strong>".EMP1."</strong>
						<br />E-mail: ".MAIL."<br />Telefones: ".TEL1."<br/>
						<b>Acesse:</b> <a href=\"".URL1."\">".SIT1."</a></td></tr></table>");
						
						$nome1 = utf8_decode("$nome");					
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
						$mailer->AddReplyTo(MAIL, EMP1);
						$mailer->AddAddress("$email", "$nome1");
						$mailer->Subject = $assunto;
						$mailer->IsHTML(true);
						$mailer->Body = $mensagem;
						if(!$mailer->Send()) { 
							echo "$descricaoErroecho Erro: <div><strong>" . $mailer->ErrorInfo; echo " </strong></div>";	exit;
						}
					}else{
						echo "tratamento erro";
						echo "<div class=\"alert alert-danger\">$descricaoErro </div>";
						
						echo "<script Language=\"JavaScript\">function Window(){";
						echo "window.location=\"javascript:window.history.back()\";}";
						echo "setTimeout(\"Window()\", 5000);</script>";	
					}
				}// FIM CPF
				
			}else{ // carregar formulário ?>  
            	<form id="cadastrocliente1" name="cadastrocliente1" enctype="multipart/form-data" method="post" class="form" action="/solicitacao-de-vagas">
	    			<?php include_once("lib/form-novasvagas.php"); ?>               		      
				</form>
			<?php } // fechar ?>

	  		</div>
		</div>
	</div>
</section>
