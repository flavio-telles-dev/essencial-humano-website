<section class="fd-body pagina-contato">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">
		<div class="row">

			<?php
			if (isset($_POST['enviar'])) {
				$erro = 0;$descricaoErro="";
				$nome = $_POST['nome'];
				if ($nome=="") {$erro=1; $descricaoErro.="Informe o Nome corretamente!<br>";}	
				$email = $_POST['email'];
				if ($email == "") { $erro =1; $descricaoErro.="Informe o Endere&ccedil;o de e-mail corretamente!<br>"; }
				$email = strtolower($email);											
				$email_valido=0;
				if (verifica_email($email)) { $email_valido=1; }
				if ( ($erro==0) and ($email_valido==0))  {$erro=1; $descricaoErro.="Informe o Endere&ccedil;o de e-mail corretamente!<br>";}
				$assunto = $_POST['assunto'];
				$celular = $_POST['celular'];	
				$telefone = $_POST['telefone'];
				$assunto = $_POST['assunto'];					
		   
				$mensagem1 = nl2br($_POST['mensagem']);
				if ($mensagem1=="") {$erro=1; $descricaoErro.="Informe a mensagem corretamente!<br>";}
											
				if ($erro==0) { 
				//CONFIGURA&Ccedil;&Otilde;ES                            
				$date = date("d/m/Y") ." &agrave;s ". date("H:i");					
				//CONFIGURA&Ccedil;OES DA MENSAGEM ORIGINAL***************
				$assunto1 = utf8_decode("" . EMP1 . " - $nome_pagina");									//ENVIO DE MENSAGEns
				$mensagem = utf8_decode("<table width=\"650\" cellspacing=\"15\" cellpadding=\"15\" align=\"center\" bgcolor=\"#ffffff\"><tr><td>
				<a href=\"".URL1."\"><img src=\"".URL1."/imagens/logo/logo.png\" width=\"254\" height=\"119\" border=0 alt=\"".EMP1."\" /></a>
				</td></tr><tr><td>
				<h3>$nome_pagina</h3>Nome: $nome<br />E-mail: $email<br />Assunto: $assunto<br />Telefone: $telefone<br />Celular: $celular<br />Mensagem: $mensagem1				
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
				echo "window.location=\" ". URL1. "/contato\";}";
				echo "setTimeout(\"Window()\", 6500);</script>";
				}else{
					echo "<div class=\"alert alert-danger col-md-12 text-center\"><strong><h3>ERRO</h3></strong>$descricaoErro </div><br />";
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"javascript:window.history.back()\";}";
					echo "setTimeout(\"Window()\", 3500);</script>";	
				}
			}else{	?>
				<div class="col-md-12 text-center">
					<h3>Temos uma Equipe especializada para melhor lhe atender</h3>
				</div>
				<div class="left col-md-7">
					<?php include('lib/form1.php'); 
					
					?>
				</div>
				<div class="col-md-1"></div>
				<div class="right col-md-4">
					<?php include('lib/box-dados.php'); ?>
				</div>
			<?php } ?>

		</div>
	</div>
</section>