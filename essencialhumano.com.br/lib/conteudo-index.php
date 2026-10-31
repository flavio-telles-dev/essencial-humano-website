<?php include('box-slider.php'); ?>

<section class="fd-home listagem-servicos">
	<div class="container">
		<div class="text-center">
			<h2>SERVI&Ccedil;OS</h2>
			<div class="ln-home"></div>
		</div>
		<div class="list-items"> 
		<?php
		$sql_select = mysqli_query($conn, "select * from geral where id_tipo=5 and ativo=0   
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
							<img src="<?=$img_select1?>" loading=lazy width="765" height="574" title="<?=$nome_select1?>" alt="<?=$nome_select1?>" class="img-responsive" />
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



<section class="fd-home" id="institucional">
	<div class="container">
		<div class="text-center">
			<h2>QUEM SOMOS</h2>
			<span>Foco no essencial: o humano.</span>
			<div class="ln-home"></div>
		</div>
		<div class="row">
			<div class="col-sm-7">
			<h3>Consultoria Essencial Humano</h3>
			<p>Somos uma consultoria de Recursos Humanos, oferecemos servi&ccedil;os diferenciados de Recrutamento e Sele&ccedil;&atilde;o, Treinamento/ Palestras e Coaching de Carreira/Executivo.</p> <p>Estes servi&ccedil;os tem como base a metodologia DEA (Diagn&oacute;stico, Execu&ccedil;&atilde;o e Acompanhamento), m&eacute;todo de trabalho desenvolvido na pr&oacute;pria Essencial Humano e que fundamenta todos os nossos servi&ccedil;os.</p>
			<a href="sobrenos">Leia mais</a>
			</div>
			<div class="col-sm-5">
			<div class="embed-responsive embed-responsive-4by3">
			<iframe allowfullscreen frameborder="0" height="360" src="//www.youtube.com/embed/67oAuynFM2o?rel=0&showinfo=0" width="100%"></iframe>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="fd-livro">
<a class="hidden-xs hidden-sm" href="https://www.essencialhumano.com.br/gestao-das-emocoes-no-ambiente-corporativo/#livro">
		<img src="<?=URL1;?>/imagens/slides/banner.jpg" loading=lazy width="1920" height="700" class="img-responsive" alt="">
	</a>
	<a class="visible-xs visible-sm" href="https://www.essencialhumano.com.br/gestao-das-emocoes-no-ambiente-corporativo/#livro">
		<img src="<?=URL1;?>/imagens/slides/banner1.jpg" loading=lazy width="1217" height="668" class="img-responsive" alt="">
	</a>
	</section>

<section class="fd-home" id="depoimento">
	<div class="container">
		<div class="text-center">
			<h2>DEPOIMENTOS</h2>
			<span>Resultados sustent&aacute;veis e grandes parceiros</span>
			<div class="ln-home"></div>
			
			<div class="owl-carousel depoimento">
				<?php
				$sql_cliente = mysqli_query($conn, "select * from geral where id_tipo=6 and ativo=0   
				order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc limit 0,9");
				$num_cliente = mysqli_num_rows($sql_cliente);            
				if ($num_cliente != "0") {           
					for($c=0; $c<$num_cliente; $c++):            
						$ln_cliente = mysqli_fetch_array($sql_cliente);
						$titulo = $ln_cliente["titulo"]; 
						$texto = $ln_cliente["descricao"]; 
						$fonte = $ln_cliente["fonte"];
						
						?>
						<div class="item">
							<div class="det">
							<?=$texto?>
							<h4><?=$titulo?></h4>
							<p class="txt"><?=$fonte?></p>
							</div>
						</div><?php 
					endfor;
				}?>
			</div>

		</div>
	</div>
</section>
<div class="text-center">
<img src="/imagens/layout/linha_breadcrumbs.jpg" loading=lazy width="738" height="24" border="0" alt="linha">
</div>
<section class="fd-home" id="clientes">
	<div class="container">
		<div class="text-center">
			<h2>CLIENTES</h2>
			<div class="ln-home"></div>

			<div class="owl-carousel clientes">
				<?php
				$sql_cliente = mysqli_query($conn, "select * from geral where id_tipo=8 and ativo=0   
				order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc limit 0,16");
				$num_cliente = mysqli_num_rows($sql_cliente);            
				if ($num_cliente != "0") {           
					for($c=0; $c<$num_cliente; $c++):            
						$ln_cliente = mysqli_fetch_array($sql_cliente);            
						if($ln_cliente['imagem'] != "") 
							$img_cliente = "/imagens/geral/thumbnail_".$ln_cliente['imagem']; 
						else 
							$img_cliente = "/imagens/geral/semimagem.jpg"; 
						$nome_cliente = strip_tags($ln_cliente['titulo']);
						?>
						<div class="item">
							<span>
								<img src="<?=$img_cliente?>" loading=lazy alt="Clientes <?=$nome_cliente?>" title="Clientes <?=$nome_cliente?>" class="img-responsive"/>
							</span>
						</div><?php 
					endfor;
				}?>
			</div>

			<br><br><a class="btn btn-default" href="<?php echo URL1."/clientes"; ?>" role="button">VEJA TODOS</a>

		</div>
	</div>
</section>
<HR/>
<section class="fd-home">
	<div class="container">
		<div class="text-center">
			<h2>BLOG</h2>
			<div class="ln-home"></div>

			<div class="row">
				<?php
				$sql_noticia = mysqli_query($conn, "select * from geral where id_tipo=11 and ativo=0   
				order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc limit 0,3");
				$num_noticia = mysqli_num_rows($sql_noticia);            
				if ($num_noticia != "0") {           
					for($n=0; $n<$num_noticia; $n++):            
						$ln_noticia = mysqli_fetch_array($sql_noticia);            
						if($ln_noticia['imagem'] != "") 
							$img_noticia = "/imagens/geral/thumbnail_".$ln_noticia['imagem']; 
						else 
							$img_noticia = "/imagens/geral/semimagem.jpg"; 
						$nome_noticia = strip_tags($ln_noticia['titulo']);
						$link_pagina = $ln_noticia['link_pagina'];
						?>
						<div class="col-sm-4"><div class="well">
							<div class="well-img"><a href="<?php echo URL1."/blog/$link_pagina"; ?>"><img loading=lazy src="<?=$img_noticia?>" alt="<?=$nome_noticia?>" title=" <?=$nome_noticia?>" class="img-responsive"/></a></div>
							<div class="well-text"><h2 class="txt-tam20"><?=$nome_noticia?></h2>
							<a class="btn btn-default" href="<?php echo URL1."/blog/$link_pagina"; ?>" role="button">Continue Lendo...</a>
							</div>
						</div></div><?php 
					endfor;
				}?>
				
			</div>

			<br><br><a class="btn btn-default" href="<?php echo URL1."/blog"; ?>" role="button">VEJA TODOS</a>
		
		</div>
	</div>
</section>