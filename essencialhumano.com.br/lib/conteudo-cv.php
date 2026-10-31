<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row"> 
        	<div class="col-sm-12 text-center">
            <h3>Promovendo o encontro de<br><b>TALENTOS</b> com <b>OPORTUNIDADES!</b></h3>
            
        	<?php if(isset($_GET['vaga'])) { $ativar_vagas = "?vaga=".$_GET['vaga']; ?>
        	<div class="alert alert-danger hidden-xs" role="alert">
  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Aviso:</span>
  			Para voc&ecirc; se candidatar a vaga espec&iacute;fica, dever&aacute; fazer o login ou cadastrar o seu curr&iacute;culo. Depois &eacute; s&oacute; escolher o <strong>Cargo pretendido</strong> e se candidatar. Voc&ecirc; poder&aacute; se candidatar a todos os cargos que tiver interesse!
 			</div>
			<?php } ?>
            </div>
  			<div class="col-sm-12 col-md-6">
            	<div class="fltlft dest-esq1 bloco bloco-tam">
                <p><b>J&aacute; tenho cadastro</b></p>
  					<p>Para acessar, preencha os campos abaixo: </p>
                 
                        
                        <?php 
						if(isset($_GET['erropag'])) {
							$tipoErro=$_GET['erropag'];
							if ($tipoErro==1) {
								$msg=" Senha inv&aacute;lida! Tente novamente.";
							} else { //erropag==2
								$msg=" O usu&aacute;rio informado n&atilde;o foi encontrado. Cadastre-se ao lado.";
							}
						 ?>
								<div class="alert alert-danger alert-dismissable">
					  			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  			<strong>Aten&ccedil;&atilde;o!</strong><?php echo $msg; ?> 
								</div>
							<?  
						} ?>
                        
                        <form method="post"  id="logincliente" autocomplete="off" nome="logincliente" action="<?php echo $url_padrao ?>/editacurriculo<?php if(isset($_GET['vaga'])) { echo $ativar_vagas; }?>" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="cpf1" class="col-sm-3 control-label">Usu&aacute;rio (CPF):</label>
                            <div class="col-sm-9">
                              <input name="cpf1" type="text" id="cpf1" size="10" maxlength="100" class="form-control" required="required" autofocus="autofocus" autocomplete="off" autocorrect="off" spellcheck="false"/>
                            </div>
                      	</div>
                        <div class="form-group">
                            <label for="senha" class="col-sm-3 control-label">Senha:</label>
                            <div class="col-sm-9">
                               <input name="senha" type="password" id="senha" value="" size="10" maxlength="10" class="form-control" required="required" autocomplete="off" autocorrect="off" spellcheck="false"/>
                            </div>
                      	</div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" name="enviar" id="enviar" class="pur_button link-branco">Acessar o Sistema</button>
                            </div>
                            <div class="col-sm-offset-3 col-sm-9">
                           		<div  class="text-warning text-left text-tam"><i class="fa fa-info-circle fa-fw"></i>
                                Esqueceu sua senha? <a href="<?php echo $url_padrao ?>/recuperar-senha"> Clique aqui.</a></div>
                            	</div>
                            </div> 

                	   	</form>  
                       
                </div>
				
            </div>
  			<div class="col-sm-12 col-md-6">
            
            	<div class="fltrt dest-dir1 bloco bloco-tam">        		   
                    <p><b>N&atilde;o tenho cadastro</b></p>
                    <p>&Eacute; o seu 1&deg; acesso? Ent&atilde;o cadastre-se aqui.<br>
					Informe o CPF e clique em <i>Cadastrar</i>.</p>
                    <form id="cadastrocliente1" nome="cadastrocliente1" autocomplete="off" method="post" action="<?php echo $url_padrao ?>/cadastrocurriculo<?php if(isset($_GET['vaga'])) { echo $ativar_vagas; }?>" class="form-horizontal form" role="form">
                    	<div class="form-group">
                            <label for="cpf1" class="col-sm-3 control-label">Usu&aacute;rio (CPF):</label>
                            <div class="col-sm-9">                              
                              <input name="cpf1" type="text" id="cpf" size="10" maxlength="30" class="form-control" required="required" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="Digite seu CPF"/>
                            </div>
                      	</div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" name="enviar" id="enviar" class="pur_button link-branco">Cadastrar</button>
                            </div>
                      	</div><p>&nbsp;</p>
                    
                    </form>
                </div>
                
            </div>
		</div>

	</div>
</section>