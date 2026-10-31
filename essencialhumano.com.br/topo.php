<header>
	<div id="header_top1">
		<div class="menu">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 hidden-sm hidden-xs">
						<a href="<?php echo URL1 ?>" class="logo"><img src="<?php echo URL1 ?>/imagens/logo/logo.png" class="img-responsive" alt="<?php echo EMP1 ?>"/></a>
					</div>
					<div class="col-md-9">
						
						<div class="fd-dados2">						
								<div class="row">								
									
									<div class="hidden-xs hidden-sm text-right col-md-4">
										<div class="button"><a href="https://api.whatsapp.com/send?phone=55<?php echo preg_replace("/[^0-9]/", "", TEL1) ?>" class="wa_button" role="button"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php if(TEL1!="") echo TEL1; ?></a></div>
									</div>
									<div class="hidden-xs hidden-sm text-right col-md-4">
										<div class="button"><a href="contato" class="ga_button" role="button">Solicite atendimento</a></div>
									</div>
									<div class="hidden-xs hidden-sm col-md-4">						
										<div class="button"><a href="<?php echo URL1 ?>/enviar-cv" class="ga_button" role="button">Cadastre o seu Curriculo</a></div>
									</div>
								</div>
						</div>
					
						<nav class="navbar navbar-default navbar-sticky bootsnav" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
						  <div class="container">
							  <div class="navbar-header">
								  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									  <i class="fa fa-bars"></i>
								  </button>
								  <a class="navbar-brand" href="<?php echo URL1 ?>"><img src="<?php echo URL1 ?>/imagens/logo/logo-mobile.png" class="logo" alt=""></a>
							  </div>
							  <div class="collapse navbar-collapse" id="myNavbar">              
								<ul class="nav navbar-nav navbar-mobile">
									<li><a href="<?php echo URL1 ?>">HOME</a></li>
									<li><a href="<?php echo URL1 ?>/sobrenos">SOBRE NÓS</a></li>
									<li><a href="<?php echo URL1 ?>/blog">BLOG</a></li>
									<li><a href="<?php echo URL1 ?>/equipe">NOSSA EQUIPE</a></li>
									<li><a href="<?php echo URL1 ?>/vagas">VAGAS</a></li>
									<li><a href="<?php echo URL1 ?>/servicos">SERVIÇOS</a></li>
									<li><a href="<?php echo URL1 ?>/clientes">CLIENTES</a></li>
									<li class="visible-xs"><a href="<?php echo URL1 ?>/enviar-cv">CADASTRO DE CURR&Iacute;CULO</a></li>
									
									<li><a href="<?php echo URL1 ?>/contato">CONTATO</a></li>
								  </ul>
							  </div>
						  </div> 
						</nav>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</header>