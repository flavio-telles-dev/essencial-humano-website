<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	
	<div class="container txt-body">
		<div class="list-items">
			
				<?php
				$sql_select = mysqli_query($conn,"select * from geral where id_tipo=$tipo_pagina and ativo=0   
				order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc");				
				$num_totalx = mysqli_num_rows($sql_select);            
				if ($num_totalx != "0") {           
					for($x=0; $x<$num_totalx; $x++):            
						$linhas = mysqli_fetch_array($sql_select);            
						$id_select1 = $linhas['id'] ?? null;            
						if(isset($linhas['imagem']) != "") 
							$img_select1="/imagens/geral/thumbnail_".$linhas['imagem'] ?? null; 
						else 
							$img_select1 = ""; $nome_cliente = strip_tags($linhas['titulo'] ?? null);            
						$link_cliente = $linhas['url'] ?? null; 

						$linhas = mysqli_fetch_array($sql_select);            
						$id_select2 = $linhas['id'] ?? null;            
						if(isset($linhas['imagem']) != "") 
							$img_select2="/imagens/geral/thumbnail_".$linhas['imagem'] ?? null; 
						else 
							$img_select2 = ""; $nome_cliente2 = strip_tags($linhas['titulo'] ?? null);            
						$link_cliente2 = $linhas['url'] ?? null;

						$linhas = mysqli_fetch_array($sql_select);            
						$id_select3 = $linhas['id'] ?? null;            
						if(isset($linhas['imagem']) != "") 
							$img_select3="/imagens/geral/thumbnail_".$linhas['imagem'] ?? null; 
						else 
							$img_select3 = ""; $nome_cliente3 = strip_tags($linhas['titulo'] ?? null);            
						$link_cliente3 = $linhas['url'] ?? null;

						$linhas = mysqli_fetch_array($sql_select);            
						$id_select4 = $linhas['id'] ?? null;            
						if(isset($linhas['imagem']) != "") 
							$img_select4="/imagens/geral/thumbnail_".$linhas['imagem'] ?? null; 
						else 
							$img_select4 = ""; $nome_cliente4 = strip_tags($linhas['titulo'] ?? null);            
						$link_cliente4 = $linhas['url'] ?? null;
						?>
						<div class="row">
						<? if ($nome_cliente !="") {?>
						<div class="item col-xs-6 col-sm-3">
							<? if ($link_cliente !="") {?><a href="<?=$link_cliente?>" target="_blank">
							<? }else{ ?><a href="#"><? }?>
								<img src="<?=$img_select1?>" alt="<?=$nome_cliente?>" class="img-responsive"/>
							</a>
						</div>
						<? }?>
						<? if ($nome_cliente2 !="") {?>
						<div class="item col-xs-6 col-sm-3">
							<? if ($link_cliente2 !="") {?><a href="<?=$link_cliente2?>" target="_blank">
							<? }else{ ?><a href="#"><? }?>
								<img src="<?=$img_select2?>" alt="<?=$nome_cliente2?>" class="img-responsive"/>
							</a>
						</div>
						<? }?>
						<? if ($nome_cliente3 !="") {?>
						<div class="item col-xs-6 col-sm-3">
							<? if ($link_cliente3 !="") {?><a href="<?=$link_cliente3?>" target="_blank">
							<? }else{ ?><a href="#"><? }?>
								<img src="<?=$img_select3?>" alt="<?=$nome_cliente3?>" class="img-responsive"/>
							</a>
						</div>
						<? }?>
						<? if ($nome_cliente4 !="") {?>
						<div class="item col-xs-6 col-sm-3">
							<? if ($link_cliente4 !="") {?><a href="<?=$link_cliente4?>" target="_blank">
							<? }else{ ?><a href="#"><? }?>
								<img src="<?=$img_select4?>" alt="<?=$nome_cliente4?>" class="img-responsive"/>
							</a>
						</div>
						<? }?>
						</div>
					<?php endfor; 
				}?>
			</div>
		</div>
	</div>
</section>