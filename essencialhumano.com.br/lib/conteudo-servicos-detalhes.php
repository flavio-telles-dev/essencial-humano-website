<section class="fd-body pagina-servicos-detalhes">
	<?php 
	if (isset ($_GET['nome_cod'])) {  
		$cod = addslashes(trim(strip_tags($_GET['nome_cod']))); 
		$cod  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cod );
		$codigo_select = "select * from geral where ativo=0 and id_tipo=$tipo_pagina and link_pagina='$cod'";              
		$sqld = mysqli_query($conn,$codigo_select);   $num_totald = @mysqli_num_rows($sqld);    
		if ($num_totald != "0") { 
			$linhad = mysqli_fetch_array($sqld);    
			$dobradosite = $linhad["dobradosite"];
		}
	}	
	include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">
	<?php
			if (isset($_POST['enviar'])) {
				$erro = 0;$descricaoErro="";
				$nome = $_POST['nome'];$servico = $_POST['servico'];
				if ($nome=="") {$erro=1; $descricaoErro.="Informe o Nome corretamente!<br>";}	
				$email = $_POST['email'];
				if ($email == "") { $erro =1; $descricaoErro.="Informe o Endere&ccedil;o de e-mail corretamente!<br>"; }
				$email = strtolower($email);											
				$email_valido=0;
				if (verifica_email($email)) { $email_valido=1; }
				if ( ($erro==0) and ($email_valido==0))  {$erro=1; $descricaoErro.="Informe o Endere&ccedil;o de e-mail corretamente!<br>";}
				$celular = $_POST['celular'] ?? null;	
				$telefone = $_POST['telefone'] ?? null;
				$assunto = $_POST['assunto'] ?? null;					
		   
				$mensagem1 = nl2br($_POST['mensagem']);
				if ($mensagem1=="") {$erro=1; $descricaoErro.="Informe a mensagem corretamente!<br>";}
											
				if ($erro==0) { 
				//CONFIGURA&Ccedil;&Otilde;ES                            
				$date = date("d/m/Y") ." &agrave;s ". date("H:i");					
				//CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************
				$assunto1 = utf8_decode("" . EMP1 . " - Orcamento: $servico");									//ENVIO DE MENSAGEns
				$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
				<a href=\"".URL1."\"><img src=\"".URL1."/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
				</td></tr><tr><td>
				<h3>$nome_pagina</h3>Servico: $servico<br/>Nome: $nome<br />E-mail: $email<br />Telefone: $telefone<br />Celular: $celular<br />Mensagem: $mensagem1				
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
				$mailer->AddReplyTo("$email", "$nome1");
				$mailer->AddAddress(MAI1, EMP1);
				$mailer->Subject = $assunto1;
				$mailer->IsHTML(true);
				$mailer->Body = $mensagem;
				if(!$mailer->Send()) { 
					echo "$descricaoErro Erro: " . $mailer->ErrorInfo; echo " </strong></div>";
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"javascript:window.history.back()\";}";
					echo "setTimeout(\"Window()\", 3500);</script>";					
					exit; 
				}				
				print  "<br><br><div class=\"alert alert-success col-md-12 text-center\" role=\"alert\"><strong><h3>A ".EMP1." agradece pelo seu contato e j&aacute; est&aacute; trabalhando para o retorno de sua mensagem.</h3></strong></div><br><br><br><br>";
				echo "<script Language=\"JavaScript\">function Window(){";
				echo "window.location=\" ". URL1. "/servicos\";}";
				echo "setTimeout(\"Window()\", 6500);</script>";
				}else{
					echo "<div class=\"alert alert-danger col-md-12 text-center\"><strong><h3>ERRO</h3></strong>$descricaoErro </div><br />";
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"javascript:window.history.back()\";}";
					echo "setTimeout(\"Window()\", 3500);</script>";	
				}
			}else{	?>

		<div class="list-items ">
			<div class="row">
				<div class="left col-md-12">
					<div class="text">
					<?php
					if (isset ($_GET['nome_cod'])) {  
						$cod = addslashes(trim(strip_tags($_GET['nome_cod']))); 
						$cod  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cod );
						
						$codigo_select = "select * from geral where ativo=0 and id_tipo=$tipo_pagina and link_pagina='$cod'";              
						$sql = mysqli_query($conn,$codigo_select);   $num_total = @mysqli_num_rows($sql);    
						if ($num_total != "0") { 
							$linha = mysqli_fetch_array($sql);    
							$id = $linha["id"]; $titulo = $linha["titulo"]; $olho = $linha["olho"]; $data = $linha["data"]; $foto  = $linha["imagem"];
							$texto  = $linha["descricao"]; $arquivo_nome = $linha["arquivo_nome"];  
							$arquivo_tipo = $linha["arquivo_tipo"]; $thumbnail_foto = "thumbnail_"."$foto"; $legenda = $linha["legenda"]; 
							$fotografo = $linha["fotografo"]; $id_galeria = $linha["id_galeria"]; $url = $linha["url"]; $fonte = $linha["fonte"];	
									    
							@mysqli_query($conn,"UPDATE geral SET visitas = visitas+1 WHERE id=$id"); // MARCA VISITA NA PAGINA ?>
							<? 
							echo "<h2 class=\"text-center\"><strong>$titulo</strong></h2>";
							echo "$texto";
							if($fonte!="") { echo "<p>";if($url!="") { echo "<a target=\"_blank\" href=\"$url\">"; } echo "<b>Fonte: $fonte</b>"; if($url!="") { echo "</a>"; }echo "</p>";}?>							
							<? // GALERIA DE FOTOS ******************************************************
							$sql_galeria = mysqli_query($conn,"select id, id_not, arquivos as imagem, legenda as txt, fotografo as site from galeria where id_not = $id order by id asc");
							$numero_galeria = mysqli_num_rows($sql_galeria)/3;
							if($numero_galeria != 0) { ?>           	
							<div class="col-md-12"><div class="row"><hr/><h3 class="txt-tam14"><strong>Galeria imagens</strong></h3><?php       
								for($z_galeria = 0; $z_galeria<$numero_galeria; $z_galeria++) { ?><div class="row"><?
									$linha1_galeria =  mysqli_fetch_array($sql_galeria);
									$foto1_galeria=$linha1_galeria["imagem"]; $txt1_galeria=utf8_encode($linha1_galeria["txt"]); $site1_galeria=$linha1_galeria["site"];
									$linha2_galeria =  mysqli_fetch_array($sql_galeria);
									$foto2_galeria=$linha2_galeria["imagem"]; $txt2_galeria=utf8_encode($linha2_galeria["txt"]); $site2_galeria=$linha2_galeria["site"];
									$linha3_galeria =  mysqli_fetch_array($sql_galeria);
									$foto3_galeria=$linha3_galeria["imagem"]; $txt3_galeria=utf8_encode($linha3_galeria["txt"]); $site3_galeria=$linha3_galeria["site"];
									
									$caminho1_galeria= URL1 . "/imagens/galeria/fotos";$caminho2_galeria= URL1 ."/imagens/galeria/icones";
									if ($foto1_galeria != "") 
									echo "<div class=\"col-sm-4 espc-height2\"><a href=\"$caminho1_galeria/$foto1_galeria\" data-fancybox=\"gallery\" title=\"$txt1_galeria\">
									<img src='$caminho2_galeria/$foto1_galeria' title=\"$txt1_galeria\" alt=\"$txt1_galeria\" class=\"img-responsive img-thumbnail img-centery\"></a></div>";
									if ($foto2_galeria != "") 
									echo "<div class=\"col-sm-4 espc-height2\"><a href=\"$caminho1_galeria/$foto2_galeria\" data-fancybox=\"gallery\" title=\"$txt2_galeria\">
									<img src='$caminho2_galeria/$foto2_galeria' title=\"$txt2_galeria\" alt=\"$txt2_galeria\" class=\"img-responsive img-thumbnail img-centery\"></a></div>";
									if ($foto3_galeria != "") 
									echo "<div class=\"col-sm-4 espc-height2\"><a href=\"$caminho1_galeria/$foto3_galeria\" data-fancybox=\"gallery\" title=\"$txt3_galeria\">
									<img src='$caminho2_galeria/$foto3_galeria' title=\"$txt3_galeria\" alt=\"$txt3_galeria\" class=\"img-responsive img-thumbnail img-centery\"></a></div>";?>
									</div><? 
								} ?>				  
							</div></div><?php 
							}?>
							
							<?php
						}
					}?> 
					</div>
				</div>
							                    
			</div>
		</div>
		<br><br>
		<h1 class="text-center">Entre em contato</h1>
		<div class="hr1 text-center"><img src="/imagens/layout/linha_breadcrumbs.jpg" width="738" height="24" border="0" alt=""></div><br><br>
		<?php include('lib/form2.php'); ?>
		<?php } ?>
	</div>
</section>