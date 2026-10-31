<?php 
$form_editar = "";
$nome_pagina = "Editar Curr&iacute;culo";
if(isset($_POST['cpf1'])) { //CNPJ/CPF 
	if(!isset($_POST['cadastrar'])) { //Para Editar
		$cpf_enviadox = $_POST['cpf1']; $senha_enviado=$_POST['senha'];
		$senha_enviadox=$_POST['senha'];
		$keyx ="essencial_";
		//Criptografia da Senha
	    $senha_enviadox=md5($senha_enviadox.'key');
		$resultadox = preg_replace('/[^[:alnum:]_]/', '',$cpf_enviadox);
		$parte_umx     = substr($resultadox, 0, 3); 
		$parte_doisx   = substr($resultadox, 3, 3); 
		$parte_tresx   = substr($resultadox, 6, 3); 
		$parte_quatrox = substr($resultadox, 9, 2);
		$cpf_enviadox = "$parte_umx.$parte_doisx.$parte_tresx-$parte_quatrox";
			
		$result = mysqli_query($conn,"select * from curriculo where cpf='$cpf_enviadox';") or die(mysqli_error($conn)); //Verificar se o usuário está cadastrado.
		$num_rows = mysqli_num_rows($result);
		
		if  ($num_rows>0) { //Se existe, verificar se a Senha é válida.
				$result1 = mysqli_query($conn,"select * from curriculo where cpf='$cpf_enviadox' and senha='$senha_enviadox';") or die(mysqli_error($conn)); 
				$num_rows1 = mysqli_num_rows($result1);				
				if  ($num_rows1==0) { //Senha inválida!
					$erro="1";
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"enviar-cv/$erro\";}";
					echo "setTimeout(\"Window()\", 1);</script>";
					exit;
				}else {
					$linhax = mysqli_fetch_array($result1);
					$arquivo_foto=$linhax["arquivo_foto"];
					$arquivo_anexo=$linhax["arquivo_anexo"] ?? null;				
				}
			
		}else{ //O usuário informado não existe!			
			
			echo "<script Language=\"JavaScript\">function Window(){";
			echo "window.location=\"enviar-cv/$erro\";}";
			echo "setTimeout(\"Window()\", 1);</script>";
			exit;
		} 
	} //cpf 
}else{ ?>
	<div class="alert alert-danger alert-dismissable text-center txt-tam20">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<i class="fas fa-exclamation-triangle txt-tam26"></i><br><strong>Aten&ccedil;&atilde;o!</strong><br>Acesso Pro&iacute;bido!
	</div><? 
	echo "<script Language=\"JavaScript\">function Window(){";
	echo "window.location=\"/\";}";
	echo "setTimeout(\"Window()\", 3000);</script>";
	exit;
}?>

<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row"> 
        	<div class="col-md-12 text-center">

            
			<?php
			// ENVIAR DADOS DO FORMULÁRIO PARA ATUALIZAR
    		if (isset($_POST['cadastrar'])) {
				$erro = 0;
		
				$id_cargo_pretendido=$_POST['cargo'];
				$sqlgeral = mysqli_query($conn,"select id_cargo, cargo from cargos where id_cargo=$id_cargo_pretendido");
				$num_total = mysqli_num_rows($sqlgeral);		 
				if ($num_total != "0") {
					$linha = mysqli_fetch_array($sqlgeral); $nomecargo = $linha["cargo"];  
				}
				
				$id_vaga_pretendido=$_POST['vagas_abertas'];
				if ($id_vaga_pretendido!="") {
					$sqlgeral = mysqli_query($conn,"select id, titulo from geral where id='$id_vaga_pretendido' ");
					$num_total = mysqli_num_rows($sqlgeral);		 
					if ($num_total != "0") {
						$linhav = mysqli_fetch_array($sqlgeral); $nomevaga = $linhav["titulo"];  
					}				 
				}
				
				if (isset($_POST['deficiencia'])) {
				$deficiencia="1"; }
				else {
				$deficiencia="0"; }
				 
				//KENIA - 25-03-2015
				//$salario_pretendido=str_replace(".","", $_POST['salario']);
				//$salario=str_replace(",",".",$salario_pretendido);
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
				}else{ $userfile_name1 = $arquivo_anexo;
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
                    
					if($userfile_name2 != "") { $dest2 = "curriculos/".$userfile_name2; copy($userfile2, $dest2); 					
						@$original = imagecreatefromjpeg("$dest2");
						$imnfo = getimagesize("$dest2");
						$img_w = $imnfo[0];       // largura
						$img_h = $imnfo[1];       // altura
						$img_f = $imnfo[2];       // extensão
						$img_m = $imnfo['mime']; // mime-type
						if( $img_m != "image/png" && $img_m != "image/gif" && $img_m != "image/bmp" && $img_m != "image/tiff") {
						if($img_w > 400) {
							$x = @imagesx($original);
							$y = @imagesy($original);
							$newX = 400;
							@$ratio = @$newX / $x;
							$newY = $y * $ratio;
							$img_temp = @imagecreatetruecolor($newX,$newY);	
							@imagecopyresized($img_temp, $original, 0, 0, 0, 0, $newX, $newY, $x, $y);
							@imagejpeg($img_temp,  "$dest2", 98);
							@imagedestroy($img_temp);
							@imagedestroy($original);
						}
						}
					}	
				}else{ $userfile_name2 = $arquivo_foto;
				}
		
				 //Informações Pessoais
				$nome=addslashes($_POST['nome']);
				$nome1=$_POST['nome'];
				 $data_nasc=$_POST['datanascimento'];
			 	 $dat_tmp = explode("/", $data_nasc);
				 $dat =  $dat_tmp[2]."-".$dat_tmp[1]."-".$dat_tmp[0];
					 
				 $estado_civil=$_POST['estado']; 
				 $sexo=$_POST['sexo']; 
				 $naturalidade= addslashes($_POST['naturalidade']);
                     $profissao_conjuge=addslashes($_POST['profissaoconjuge']);
                     $id_renda_familia=utf8_decode($_POST['renda']);
				 $tem_carro=$_POST['carro']; 
				$disp_mudanca=$_POST['mudanca'];
				 $tem_moto=$_POST['moto'];
				 $disp_viagem=$_POST['viagem'];
				 
				 //Endereço/Contatos
				 $id_tipo_residencia=utf8_decode($_POST['tipo_residencia']);
				    $endereco=addslashes($_POST['endereco']);
                      $bairro=addslashes($_POST['bairro']);
                      $cidade=addslashes($_POST['cidade']);
				  $uf=$_POST['uf'];
				  $telefone=$_POST['telefone'];
				 
				$telefone_recado=$_POST['telefone_recado'];
				 $celular=$_POST['celular'];
				 $email=strtolower($_POST['email']);
                     $email2=strtolower($_POST['email2']);
				 
				 //Documentos
				  $rg=addslashes($_POST['rg']);
				  $cpf=$_POST['cpf1']; 
				 
				 //Escolaridade
				 $id_escolaridade1=$_POST['formacao_nivel1'];
				 $id_escolaridade2=$_POST['formacao_nivel2'];
				 $id_escolaridade3=$_POST['formacao_nivel3'];
				 
				 //IDIOMA - Ver como vai ser a dinâmica na tela ???
				 $sql_idioma1 = mysqli_query($conn,"SELECT * FROM idioma WHERE ativo=1 order by nome asc");
					    $num_total_idioma1 = mysqli_num_rows($sql_idioma1);
			 
			           if ($num_total_idioma1 != "0") {
						   	for($i1 = 0; $i1<$num_total_idioma1; $i1++) {
								$linha_idioma1 = mysqli_fetch_array($sql_idioma1);
								$id_idioma1 = $linha_idioma1["id_idioma"];
								$nome_idioma1 = utf8_encode($linha_idioma1["nome"]);
								
								$bd = "idioma_$id_idioma1";	
								$bd1 = utf8_decode($_POST["$bd"]);
																
								$sql_idioma2 = mysqli_query($conn,"SELECT * FROM cv_idioma WHERE cpf='$cpf' and id_idioma=$id_idioma1");
					    		$num_total_idioma2 = mysqli_num_rows($sql_idioma2);
			 		           	if ($num_total_idioma2 != "0") {
									$comandoSQL_idioma2="update `cv_idioma` set `id_idioma`=$id_idioma1, `cpf`='$cpf', `nivel`='$bd1' where cpf='$cpf' and id_idioma=$id_idioma1";
									mysqli_query($conn,$comandoSQL_idioma2) or die(mysqli_error($conn));								
									
								}else{
									$comandoSQL_idioma2="INSERT INTO cv_idioma(id_idioma, nivel, cpf) VALUES ($id_idioma1, '$bd1', '$cpf')";
									mysqli_query($conn,$comandoSQL_idioma2) or die(mysqli_error($conn));
								}       
                    
							}
					   }
				 //fim IDIOMA
				 $outras_idioma=addslashes($_POST['outras_idioma']);
                     
                     $instituicao_esc1=addslashes($_POST['formacao_instituicao1']);
                     $instituicao_esc2=addslashes($_POST['formacao_instituicao2']);
                     $instituicao_esc3=addslashes($_POST['formacao_instituicao3']);
                     
                      $curso_esc1=addslashes($_POST['formacao_curso1']);
                     $curso_esc2=addslashes($_POST['formacao_curso2']);
                     $curso_esc3=addslashes($_POST['formacao_curso3']);
                     
                     //Cursos Extracurriculares
                     $curso_extra1=addslashes($_POST['extra_curso1']);
                     $curso_extra2=addslashes($_POST['extra_curso2']);
                     $curso_extra3=addslashes($_POST['extra_curso3']);
                     $instit_extra1=addslashes($_POST['extra_instituicao1']);
                     $instit_extra2=addslashes($_POST['extra_instituicao2']);
                     $instit_extra3=addslashes($_POST['extra_instituicao3']);
                     $ano_extra1=$_POST['extra_ano1'];
                      $ano_extra2=$_POST['extra_ano2'];
                      $ano_extra3=$_POST['extra_ano3'];
                      
                      //Situação Profissional
                      $id_situacao=addslashes($_POST['profissional_situacao_atual']);
                      $nome_empresa1=addslashes($_POST['profissional_empresa1']);
                      $nome_empresa2=addslashes($_POST['profissional_empresa2']);
                       $nome_empresa3=addslashes($_POST['profissional_empresa3']);
                       
                     $cargo_empresa1=addslashes($_POST['profissional_cargo1']);
                     $cargo_empresa2=addslashes($_POST['profissional_cargo2']);
                     $cargo_empresa3=addslashes($_POST['profissional_cargo3']);
                     
                     $admissao_empresa1=$_POST['profissional_admissao1'];
                     $admissao_empresa2=$_POST['profissional_admissao2'];
                     $admissao_empresa3=$_POST['profissional_admissao3'];
                     
                     $demissao_empresa1=$_POST['profissional_demissao1'];
                     $demissao_empresa2=$_POST['profissional_demissao2'];
                     $demissao_empresa3=$_POST['profissional_demissao3'];
                     
                     $endereco_empresa1=addslashes($_POST['profissional_endereco1']);
                     $endereco_empresa2=addslashes($_POST['profissional_endereco2']);
                     $endereco_empresa3=addslashes($_POST['profissional_endereco3']);
                     
                     $fone_empresa1=$_POST['profissional_telefone1'];
                     $fone_empresa2=$_POST['profissional_telefone2'];
                     $fone_empresa3=$_POST['profissional_telefone3'];
                     
                     $superior_empresa1=addslashes($_POST['profissional_nome_superior1']);
                     $superior_empresa2=addslashes($_POST['profissional_nome_superior2']);
                     $superior_empresa3=addslashes($_POST['profissional_nome_superior3']);
                     
                     $ultsalario_empresa1=$_POST['profissional_ultimo_salario1'];
                     $ultsalario_empresa2=$_POST['profissional_ultimo_salario2'];
                     $ultsalario_empresa3=$_POST['profissional_ultimo_salario3'];
                     
                     $desliga_empresa1=addslashes($_POST['profissional_motivo_desligamento1']);
                     $desliga_empresa2=addslashes($_POST['profissional_motivo_desligamento2']);
                     $desliga_empresa3=addslashes($_POST['profissional_motivo_desligamento3']);
                     
                     $atividades_empresa1=addslashes( $_POST['profissional_habilidades1']);
                     $atividades_empresa2=addslashes($_POST['profissional_habilidades2']);
                     $atividades_empresa3=addslashes($_POST['profissional_habilidades3']);
						
					$data_cadastro = date('d/m/Y');
					$hora_cadastro = date('H:i');
				
				$comandoSQL= utf8_decode("update `curriculo` set 
					`id_cargo_pretendido`=$id_cargo_pretendido, `outras_idioma`='$outras_idioma', `id_vaga_pretendido`='$id_vaga_pretendido', `deficiencia`=$deficiencia, 
					`salario22`='$salario',	`id_horario`='$id_horario', 
					`nome`='$nome', `data_nasc`='$dat', `estado_civil`='$estado_civil', 
					`sexo`='$sexo', `naturalidade`='$naturalidade', `profissao_conjuge`='$profissao_conjuge',
					 `id_renda_familia`='$renda_familia', `tem_carro`='$tem_carro', 
					`disp_mudanca`='$disp_mudanca', `tem_moto`='$tem_moto', `disp_viagem`='$disp_viagem', 
					`id_tipo_residencia`='$tipo_residencia', `endereco`='$endereco', `bairro`='$bairro',
					 `cidade`='$cidade', `uf`='$uf', `telefone`='$telefone', 
					`telefone_recado`='$telefone_recado', `celular`='$celular', `email`='$email', 
					`email2`='$email2', `rg`='$rg', `cpf`='$cpf', `id_escolaridade1`='$id_escolaridade1', 
					`id_escolaridade2`='$id_escolaridade2', `id_escolaridade3`='$id_escolaridade3', 
					`id_idioma1`='$id_idioma1', `nivel_idioma1`='$nivel_idioma1', `id_idioma2`= '$id_idioma2', 
					`nivel_idioma2`='$nivel_idioma2', `id_idioma3`='$id_idioma3', `nivel_idioma3`='$nivel_idioma3',
					 `instituicao_esc1`='$instituicao_esc1', `instituicao_esc2`='$instituicao_esc2',
					 `instituicao_esc3`='$instituicao_esc3', `curso_esc1`='$curso_esc1', `curso_esc2`='$curso_esc2',
					  `curso_esc3`='$curso_esc3', `curso_extra1`='$curso_extra1', `curso_extra2`='$curso_extra2',
					  `curso_extra3`='$curso_extra3', `instit_extra1`='$instit_extra1', 
					 `instit_extra2`='$instit_extra2', `instit_extra3`='$instit_extra3', 
					 `ano_extra1`='$ano_extra1', `ano_extra2`='$ano_extra2', `ano_extra3`= '$ano_extra3',
					  `id_situacao`=$id_situacao, `nome_empresa1`='$nome_empresa1', `nome_empresa2`='$nome_empresa2',
					 `nome_empresa3`='$nome_empresa3', `cargo_empresa1`='$cargo_empresa1', `cargo_empresa2`='$cargo_empresa2',
					  `cargo_empresa3`='$cargo_empresa3', `admissao_empresa1`='$admissao_empresa1',
					  `admissao_empresa2`='$admissao_empresa2', `admissao_empresa3`='$admissao_empresa3',
					 `demissao_empresa1`='$demissao_empresa1', `demissao_empresa2`= '$demissao_empresa2',
					  `demissao_empresa3`='$demissao_empresa3', `endereco_empresa1`='$endereco_empresa1',
					  `endereco_empresa2`='$endereco_empresa2', `endereco_empresa3`='$endereco_empresa3', 
					 `fone_empresa1`='$fone_empresa1', `fone_empresa2`='$fone_empresa2', `fone_empresa3`='$fone_empresa3',
					  `superior_empresa1`='$superior_empresa1', `superior_empresa2`='$superior_empresa2',
					  `superior_empresa3`='$superior_empresa3', `ultsalario_empresa1`='$ultsalario_empresa1', 
					 `ultsalario_empresa2`='$ultsalario_empresa2', `ultsalario_empresa3`='$ultsalario_empresa3',
					  `desliga_empresa1`='$desliga_empresa1', `desliga_empresa2`='$desliga_empresa2',
					   `desliga_empresa3`='$desliga_empresa3', `atividades_empresa1`='$atividades_empresa1', 
					 `atividades_empresa2`='$atividades_empresa2', `atividades_empresa3`='$atividades_empresa3',
					  dt_cadastro=CURDATE(), hora_cadastro='$hora_cadastro'"); 
					  if($userfile_name1!="") { $comandoSQL.=", arquivo_curriculo='$userfile_name1'"; } 
					  if($userfile_name2!="") { $comandoSQL.=", arquivo_foto='$userfile_name2'"; } 
						$comandoSQL.=" where cpf='$cpf'; ";
		

				
				$sql=mysqli_query($conn,$comandoSQL) 
				or die(mysqli_error());
						
				if ($erro==0) {
					if(isset($_GET['vaga'])) {
						echo "<div class=\"alert alert-success txt-tam20\"><p class=\"text-center\">$nome1, Seu Currículo foi cadastrado na vaga (<strong>$nomevaga</strong>).<br />
						Agradecemos o seu contato!</p></div>";
					}else{
					echo "<div class=\"alert alert-success txt-tam20\"><p class=\"text-center\">$nome1, Seu Curr&iacute;culo foi <strong>atualizado</strong> com sucesso.<br />Agradecemos o seu contato!</p></div>";}
					$date_home = date("h:i:s");
				    echo "<h4 class=\"txt-tam28 text-center\"><strong>Visualizar Curr&iacute;culo Alterado</strong></h4>";
					include("lib/visualiza-curriculo.php");
					
					
					//ENVIAR EMAIL *****************************************************************	
					$date = date("d/m/Y") ." &agrave;s ". date("H:i");
		
					//CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************						
					$assunto = "Resposta Automática (".EMP1." - Editar Currículo)";
                         
                    //ENVIO DE MENSAGEns     
					$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
						<a href=\"".URL1."\"><img src=\"".URL1."/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
						</td></tr><tr><td>
						
						<h3><b>$nome,</b></h3>Agradecemos por atualizar seu Curr&iacute;culo em nossa base de dados.<br />Assim que houver uma nova oportunidade de trabalho na &aacute;rea pretendida, entraremos em contato.
										
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
						echo "$descricaoErroecho Erro: " . $mailer->ErrorInfo; echo " </strong></div>";	exit;
					}
				}
			
			//*********************************************************************************	
	}else{
				
				if(isset($_POST['cpf1'])) { //CNPJ/CPF
					$cpf_enviado = $_POST['cpf1'];
					$senha_enviado=$_POST['senha'];
		 			$key ="essencial_";
					 //Criptografia da Senha
					 $senha_enviado=md5($senha_enviado.'key');
					$resultado = preg_replace('/[^[:alnum:]_]/', '',$cpf_enviado);
					$parte_um     = substr($resultado, 0, 3); $parte_dois   = substr($resultado, 3, 3); $parte_tres   = substr($resultado, 6, 3); $parte_quatro = substr($resultado, 9, 2);
					$cpf_enviado = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";
					
					$result = mysqli_query($conn,"select * from curriculo where cpf='$cpf_enviado' and senha='$senha_enviado';") or die(mysqli_error($conn)); 
					$num_rows = mysqli_num_rows($result);
					if  ($num_rows>0) {
						$comandoSQL="SELECT `id_cargo_pretendido`, `outras_idioma`, `id_vaga_pretendido`,`deficiencia`, `salario_pretendido`, `id_horario`, 
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
						 `atividades_empresa2`, `atividades_empresa3`, dt_cadastro, hora_cadastro, arquivo_curriculo, arquivo_foto, senha, salario22 FROM curriculo WHERE cpf='$cpf_enviado' 
						 and senha='$senha_enviado'"; 
				
						$sqlgeral = mysqli_query($conn,$comandoSQL);
						$num_total = mysqli_num_rows($sqlgeral);		 
									
						$linha = mysqli_fetch_array($sqlgeral);
						$id_cargo_pretendido=$linha["id_cargo_pretendido"];
						$id_vaga_pretendido=$linha["id_vaga_pretendido"];
						$deficiencia=$linha["deficiencia"];
						//formatação para mostar na tela
						
										
						//setlocale(LC_MONETARY, 'it_IT');
						
						//KENIA - 25-03-2015
	//					$salario_pretendido=money_format('%.2n', $salario); 
						//$salario=$linha["salario_pretendido"];
						$salario_pretendido=$linha["salario22"];
						
						$id_horario=$linha["id_horario"];
						$nome=utf8_encode($linha["nome"]);
						$nome1=$linha["nome"];
						$outras_idioma=$linha["outras_idioma"];	
						$data_nasc=$linha["data_nasc"];
						$estado_civil=$linha["estado_civil"];
						$sexo=$linha["sexo"];
						$naturalidade=utf8_encode($linha["naturalidade"]);
						$profissao_conjuge=utf8_encode($linha["profissao_conjuge"]);
						$id_renda_familia=utf8_encode($linha["id_renda_familia"]);
						$tem_carro=$linha["tem_carro"]; 
						$disp_mudanca=$linha["disp_mudanca"];
						$tem_moto=$linha["tem_moto"];
						$disp_viagem=$linha["disp_viagem"];
						$id_tipo_residencia=$linha["id_tipo_residencia"];
						$endereco=utf8_encode($linha["endereco"]);
						$bairro=utf8_encode($linha["bairro"]);
						$cidade=utf8_encode($linha["cidade"]);
						$uf=$linha["uf"];
						$telefone=$linha["telefone"];
						$telefone_recado=$linha["telefone_recado"];
						$celular=$linha["celular"];
						$email=$linha["email"];
						$email2=$linha["email2"];
						$rg=$linha["rg"];
						$cpf=$linha["cpf"];
						$id_escolaridade1=$linha["id_escolaridade1"];
						$id_escolaridade2=$linha["id_escolaridade2"];
						$id_escolaridade3=$linha["id_escolaridade3"];
						$id_idioma1=$linha["id_idioma1"];
						$nivel_idioma1=$linha["nivel_idioma1"];
						$id_idioma2=$linha["id_idioma2"];
						$nivel_idioma2=$linha["nivel_idioma2"];
						$id_idioma3=$linha["id_idioma3"];
							$nivel_idioma3=$linha["nivel_idioma3"];
							$instituicao_esc1=utf8_encode($linha["instituicao_esc1"]);
							$instituicao_esc2=utf8_encode($linha["instituicao_esc2"]);
							$instituicao_esc3=utf8_encode($linha["instituicao_esc3"]);
							$curso_esc1=utf8_encode($linha["curso_esc1"]);
							$curso_esc2=utf8_encode($linha["curso_esc2"]);
							$curso_esc3=utf8_encode($linha["curso_esc3"]);
							$curso_extra1=utf8_encode($linha["curso_extra1"]);
							$curso_extra2=utf8_encode($linha["curso_extra2"]);
							$curso_extra3=utf8_encode($linha["curso_extra3"]);
							$instit_extra1=utf8_encode($linha["instit_extra1"]);
							$instit_extra2=utf8_encode($linha["instit_extra2"]);
							$instit_extra3=utf8_encode($linha["instit_extra3"]);
							$ano_extra1=$linha["ano_extra1"];
							$ano_extra2=$linha["ano_extra2"];
							$ano_extra3=$linha["ano_extra3"];
							$id_situacao=$linha["id_situacao"];
							$nome_empresa1=utf8_encode($linha["nome_empresa1"]);
							$nome_empresa2=utf8_encode($linha["nome_empresa2"]);
							$nome_empresa3=utf8_encode($linha["nome_empresa3"]);
							$cargo_empresa1=utf8_encode($linha["cargo_empresa1"]);
							$cargo_empresa2=utf8_encode($linha["cargo_empresa2"]);
							$cargo_empresa3=utf8_encode($linha["cargo_empresa3"]);
							$admissao_empresa1=$linha["admissao_empresa1"];
							$admissao_empresa2=$linha["admissao_empresa2"];
							$admissao_empresa3=$linha["admissao_empresa3"];
							$demissao_empresa1=$linha["demissao_empresa1"];
							$demissao_empresa2=$linha["demissao_empresa2"];
							$demissao_empresa3=$linha["demissao_empresa3"];
							$endereco_empresa1=utf8_encode($linha["endereco_empresa1"]);
							$endereco_empresa2=utf8_encode($linha["endereco_empresa2"]);
							$endereco_empresa3=utf8_encode($linha["endereco_empresa3"]);
							$fone_empresa1=$linha["fone_empresa1"];
							$fone_empresa2=$linha["fone_empresa2"];
							$fone_empresa3=$linha["fone_empresa3"];
							$superior_empresa1=utf8_encode($linha["superior_empresa1"]);
							$superior_empresa2=utf8_encode($linha["superior_empresa2"]);
							$superior_empresa3=utf8_encode($linha["superior_empresa3"]);
							$ultsalario_empresa1=$linha["ultsalario_empresa1"];
							$ultsalario_empresa2=$linha["ultsalario_empresa2"];
							$ultsalario_empresa3=$linha["ultsalario_empresa3"];
							$desliga_empresa1=utf8_encode($linha["desliga_empresa1"]);
							$desliga_empresa2=utf8_encode($linha["desliga_empresa2"]);
							$desliga_empresa3=utf8_encode($linha["desliga_empresa3"]);
							$atividades_empresa1=utf8_encode($linha["atividades_empresa1"]);
							$atividades_empresa2=utf8_encode($linha["atividades_empresa2"]);
							$atividades_empresa3=utf8_encode($linha["atividades_empresa3"]);
							$senha=$linha["senha"];	
					}
					?>    
                    <p class="txt-tam26">Ol&aacute; <?php echo $nome ?>.</p>
            		<p class="txt-tam18">Atualize seu curr&iacute;culo: </p><br />       
                    
                    <?php if(isset($_GET['vaga'])) { $ativar_vagas = "?vaga=".$_GET['vaga']; ?>
        	<div class="alert alert-danger" role="alert">
  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Aviso:</span>
  			Escolha o <strong>Cargo em Aberto</strong> a se candidata </div>
			<?php } ?>
            
                         
					<form id="cadastrocliente1" name="cadastrocliente1" enctype="multipart/form-data" method="post" class="form" action="/editacurriculo<?php if(isset($_GET['vaga'])) { echo $ativar_vagas; }?>">
                    <?php include_once("lib/form-cv.php"); ?>               		      
				 	</form>          		             		    
			<?php }else{
					echo "<div class=\"alert alert-danger\">$descricaoErro xxx</div>";
					
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"javascript:window.history.back()\";}";
					echo "setTimeout(\"Window()\", 3000);</script>";	
				}
				
	}?> 

                
            </div>
		</div>

	</div>
</section>