<section class="fd-body listagem-servicos">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container">
		

		<div class="list-items"> 
		<?php
		$sql_select = mysqli_query($conn,"select * from geral where id_tipo=5 and ativo=0   
		order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc limit 0,6");
			
		$num_totalx = mysqli_num_rows($sql_select);            
		if ($num_totalx != "0") {           
			for($x=0; $x<$num_totalx; $x++):            
				$linhas = mysqli_fetch_array($sql_select);            
				$id_select1 = $linhas['id'];            
				if($linhas['imagem'] != "") $img_select1 = "/imagens/geral/thumbnail_".$linhas['imagem']; else $img_select1 = ""; $nome_select1 = strip_tags($linhas['titulo']);            
				$link_pagina = URL1."/servicos/".$linhas['link_pagina']; 
				$descricao_select1 = "";
				if($linhas['resumo_pagina']!="") {            
					$descricao_select1 = strip_tags($linhas['resumo_pagina']);
					$str = strlen($descricao_select1);
					if($str>=230) $descricao_select1 = substr($descricao_select1, 0, 230)."";   
				}?>

				<div class="item">
					<div class="item-inner">
						<figure>
							<a href="<?=$link_pagina?>">
							<img src="<?=$img_select1?>" alt="<?=$nome_select1?>" class="img-responsive" />
							</a>
						</figure>
						<div class="content">
							<h3><?=$nome_select1?></h3>
							<p><?=$descricao_select1?></p>
							<a href="<?=$link_pagina?>">Leia mais</a>
						</div>
					</div>
				</div><?php
				
			endfor; 
		}?>
		</div>


	</div>
</section>