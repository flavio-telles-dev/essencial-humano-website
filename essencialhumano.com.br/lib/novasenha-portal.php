<section class="fd-body">
	<?php $nome_pagina = "Redefinir nova senha"; include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row"> 
        	<div class="col-md-12 text-center">
            
				<?php
		if(isset($_GET['id_senha'])) { //CNPJ/CPF					
			$codigo_cliente = $_GET['id_senha'];					
			$result = mysqli_query($conn, "select * from curriculo where id_curriculo='$codigo_cliente';") or die(mysqli_error($conn));					
			$num_rows = mysqli_num_rows($result);					
			if  ($num_rows>0) {						
				$linha_result = mysqli_fetch_array($result);		
				$cpf = $linha_result['cpf'];		 $nome = $linha_result['nome'];			
			}
			if (isset($_POST['cadastrar'])) { $erro = 0;					
				//Senha	
				$senha1 = $_POST['senha1']; if ( ($erro==0) and ($senha1==""))  {$erro=1; $descricaoErro="Informe a Senha corretamente!";}		
				//Senha2	
				$senha2 = $_POST['senha2']; if ( ($erro==0) and ($senha2==""))  {$erro=1; $descricaoErro="Informe a Confirmação da Senha corretamente!";}		
				//Validação Senha	
				if ($senha1!=$senha2)  {$erro=1; $descricaoErro="A Confirmação da Senha não confere!";}
				if ($erro==0) {
					$key ="essencial_";
					//Criptografia da Senha
					$senha1=md5($senha1.'key'); 
					$sql=mysqli_query($conn, "UPDATE curriculo SET senha='$senha1' where id_curriculo=$codigo_cliente") or die(mysqli_error($conn));
					echo "<div class=\"alert alert-success\"><i class=\"fa fa-check fa-2x\"></i> 
					A nova senha foi criada com sucesso!<br> </div>";
					$date_home = date("h:i:s");
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"/enviar-cv\";}";
					echo "setTimeout(\"Window()\", 5500);</script>";
				}else{
					echo "<div class=\"alert alert-danger\"><i class=\"fa fa-times fa-2x\"></i> $descricaoErro </div>";			
					echo "<script Language=\"JavaScript\">function Window(){";
					echo "window.location=\"javascript:window.history.back()\";}";
					echo "setTimeout(\"Window()\", 5500);</script>";	
				}
			
			}else{
			?>
			<div class="col-sm-4"></div>
			<div class="col-sm-4  text-left">
			<form id="cadastrocliente" name="cadastrocliente" method="post" action="<?php echo $url_padrao ?>/novasenha-curriculo/<?php echo $codigo_cliente ?>/<?php echo $_GET['key_senha'] ?>" class="form">
			<div class="form-group text-left">           		        
			<label for="cpf">CPF: </label>     
			<input name="cpf" type="text" class="form-control" id="cpf" maxlength="30" value="<?php echo $cpf ?>" disabled="disabled" style="width:200px"/>
			</div>
			<div class="form-group text-left">      
			<label for="nome">Nome Completo: <span style="color:#F00;">*</span> </label>                		           
			<input name="nome" type="text" class="form-control" id="nome" size="80" maxlength="30" required value="<?php echo $nome ?>" disabled="disabled" style="width:200px"/>
			</div>		
			<div class="form-group text-left">
			<label for="senha1">Nova Senha: <span style="color:#F00;">*</span></label>
			<input name="senha1" type="password"class="form-control" id="senha1" size="30" maxlength="10" required style="width:200px"/>
			<div class="text-warning text-left text-tam"><i class="fa fa-info-circle fa-fw"></i>  Entre 8 a 10 caracteres entre n&uacute;meros e letras</div>
			</div>
			<div class="form-group text-left">
			<label for="senha2">Confirme Senha: <span style="color:#F00;">*</span> </label>
			<input name="senha2" type="password" class="form-control" id="senha2" size="30" maxlength="10" required style="width:200px"/>
			<div class="text-warning text-left text-tam"><i class="fa fa-info-circle fa-fw"></i>  Repetir a senha</div>
			</div>
			<p><input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="pur_button link-branco" /></p>
			</form>
			</div>
			<div class="col-sm-4"></div>
		<?php } } ?>





			 
                
            </div>
		</div>

	</div>
</section>