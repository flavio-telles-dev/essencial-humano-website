<section class="fd-body">
	<?php $nome_pagina = "Recupera&ccedil;&atilde;o de senha"; include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row"> 
        	<div class="col-md-12 text-center">
            
			<?php if(isset($_POST['cpf'])) { //CNPJ/CPF
				$cpf_enviado = $_POST['cpf'];
				$cpf_enviado = addslashes(trim(strip_tags($cpf_enviado))); 
				$cpf_enviado  = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/","",$cpf_enviado );
				$resultado = preg_replace('/[^[:alnum:]_]/', '',$cpf_enviado);
				$parte_um     = substr($resultado, 0, 3); $parte_dois   = substr($resultado, 3, 3); $parte_tres   = substr($resultado, 6, 3); $parte_quatro = substr($resultado, 9, 2);
				$cpf_enviado = "$parte_um.$parte_dois.$parte_tres-$parte_quatro";
				//$cpf_enviadox = explode(".", $cpf_enviado);
				//$cpf_enviadoz = explode("-", $cnpj_enviadoy[1]);
				//$usuario_cpf = $cpf_enviadox[0].$cpf_enviadox[1].$cpf_enviadoy[0].$cpf_enviadoz[0].$cpf_enviadoz[1];					
							
				$result = mysqli_query($conn,"select * from curriculo where cpf='$cpf_enviado';") or die(mysqli_error($conn));
				$num_rows = mysqli_num_rows($result);
				if  ($num_rows>0) {
					$linha_result = mysqli_fetch_array($result);
					$id = $linha_result['id_curriculo']; $email = $linha_result['email']; $nome_curriculo = $linha_result['nome']; 

					//ENVIAR EMAIL *****************************************************************
					$date = date("d/m/Y") ." &agrave;s ". date("H:i");
					$datemsn = date("d/m/Y H:i");
					$chave = date("dmYHi");  $chave = "re-".date("y")."-".strtolower(base64_encode($chave));
					//ENVIO DE MENSAGEns										
					//CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************						
								$assunto = utf8_decode("Recuperar Senha (MAIL - Banco de Currículos)");
									 
								//ENVIO DE MENSAGEns     
								$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#F1F8F7\"><tr><td><a href=\"".URL1."\"><img src=\"https://www.essencialhumano.com.br/imagens/logo/logo.png\" width=\"215\" height=\"100\" border=0 alt=\"".MAIL."\" /></a></td></tr><tr><td>
								<h3><strong>Olá $nome_curriculo,</strong></h3>
								<p>Clique no link para fazer a recuperação da senha no <strong>Banco de Currículos.</strong></p>
								<p><a href=\"URL1/novasenha-curriculo/$id/$chave\">Nova Senha</a>.</p>				
								<hr/>
								<strong>".MAIL."</strong><br />E-mail: ".MAIL."<br />Telefones: ".TEL1."<br/><b>Acesse:</b> <a href=\"".URL1."\">".SIT1."</a></td></tr></table>");
								
								$nome1 = $nome_curriculo;

								require_once('classes/class.phpmailer.php');
								$mailer = new PHPMailer();
								$mailer->IsSMTP();
								$mailer->SMTPDebug = 1;					
								$mailer->SMTPAuth   = true;  //Define se haverá ou não autenticação no SMTP;
								$mailer->Port = MPOR; //Indica a porta de conexão para a saída de e-mails.
								$mailer->Host = MSMT; //Onde em 'servidor_de_saida'.
								$mailer->Username = MMAL; //Informe o e-mai o completo
								$mailer->Password = MSEN; //Senha da caixa postal
								$mailer->FromName = utf8_decode(MAIL); //Nome que será exibido para o destinatário
								$mailer->From = MMAL; //Obrigatório ser a mesma caixa postal indicada em "username"
								$mailer->AddReplyTo(MAIL, MAIL);
								$mailer->AddAddress("$email");
								$mailer->Subject = $assunto;
								$mailer->IsHTML(true);
								$mailer->Body = $mensagem;

								//CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************						
					$assunto = "Recuperar Senha (".EMP1." - Banco de Currículo)";
                         
                    //ENVIO DE MENSAGEns     
					$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
						<a href=\"".URL1."\"><img src=\"https://www.essencialhumano.com.br/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
						</td></tr><tr><td>
						
						<h3><strong>Ol&aacute; $nome_curriculo,</strong></h3>
						<p>Clique no link para fazer a recupera&ccedil;&atilde;o da senha no <strong>Banco de Curr&iacute;culos.</strong></p>
						<p><a href=\"".URL1."/novasenha-curriculo/$id/$chave\">Criar Nova Senha</a>.</p>	
										
						</td></tr><tr><td><hr/></td></tr><tr><td><strong>".EMP1."</strong>
						<br />E-mail: ".MAIL."<br />Telefones: ".TEL1."<br/>
						<b>Acesse:</b> <a href=\"".URL1."\">".SIT1."</a></td></tr></table>");
					
						$nome1 = $nome_curriculo;					
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

					$descricaoErro="Usu&aacute;rio encontrado (<strong>$cpf_enviado</strong>)! <br/> Orienta&ccedil;&otilde;es foram enviadas para E-mail cadastrado. <br/> Por favor, verifique a sua caixa de entrada!";
					echo "<div class=\"alert alert-success txt-tam20\">$descricaoErro</div>";
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"".URL1."/enviar-cv\";}";
					echo "setTimeout(\"Window()\", 5500);</script>";	
				}else{ ?>
					<div class="alert alert-danger alert-dismissable txt-tam20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Atenção!</strong> Este usuário ainda não tem cadastro!
					</div>
				<? }
				}else{ ?>
				<h3>Informe o CPF utilizado por voc&ecirc;<br>para acessar seu curr&iacute;culo.</h3>
				<p>Uma mensagem ser&aacute; enviada para o seu e-mail alternativo cadastrado<br>com as instru&ccedil&otilde;es para a cria&ccedil;&atilde;o de uma nova senha.</p>
				<hr/>
				<form id="cadastrocliente" nome="cadastrocliente" action="" role="form" method="post" class="form"> 
				<div class="col-sm-3"></div>
				<div class="form-group text-center col-sm-6">
				<label>Digite seu CPF</label>
				<input name="cpf" type="text" id="cpf" size="20" class="form-control" required="required" autofocus="autofocus"/>
				</div>
				<div class="col-sm-3"></div>
				<div class="col-sm-12">
				<p class="flt-esq"><input type="submit" name="button" id="button" value="Enviar" class="pur_button link-branco"/></p>
				</div>
				</form>
				<?php } ?>   
                
            </div>
		</div>

	</div>
</section>