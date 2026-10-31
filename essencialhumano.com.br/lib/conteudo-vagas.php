<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row">
		<?php 			
        $codigo_select = "select id, id_galeria, tipo_categoria, titulo, olho, descricao as texto, fonte, posicao_imagem, imagem, 
        fotografo, legenda, url, mapa, visitas, pasta, nome_galeria, hora, link_pagina, localizacao, servicos, DATE_FORMAT(data,'%d/%m/%Y') as data from geral 
        where id_tipo = $tipo_pagina and titulo != '' 
        order by  DATE_FORMAT(data,'%Y') asc,  DATE_FORMAT(data,'%m') asc, DATE_FORMAT(data,'%d') asc, id desc";
            
        $sql = mysqli_query($conn, $codigo_select);
        ?>
			<div class="col-md-12 text-center">
				<h2>Veja abaixo oportunidades procurando talentos!</h2>
            </div>	
            	
            <div class="col-md-12">
				<div class="row">
					<?php 
					$num_total = @mysqli_num_rows($sql); $num_total = $num_total/3;
        			if ($num_total != "0") {
        			for($y = 0; $y<$num_total; $y++) {
                		$linha = mysqli_fetch_array($sql);
                		$id = $linha["id"] ?? null; $titulo = $linha["titulo"] ?? null; $texto = $linha["texto"] ?? null; $olho = $linha["olho"] ?? null; $data = $linha["data"] ?? null; $hora = $linha["hora"] ?? null; $posicao_imagem = $linha["posicao_imagem"] ?? null; $foto = $linha["imagem"] ?? null; $thumbnail_foto = "thumbnail_"."$foto" ?? null; $legenda = $linha["legenda"] ?? null; $fotografo = $linha["fotografo"] ?? null; $pasta = $linha["pasta"] ?? null; $tipo_categoria = $linha["tipo_categoria"] ?? null; $visitas = $linha["visitas"] ?? null; $mapa = $linha["mapa"] ?? null; $url = $linha["url"] ?? null; $fonte = $linha["fonte"] ?? null;$link_pagina = $linha["link_pagina"] ?? null; $servicos_portfolio = $linha["localizacao"] ?? null;$servicos = $linha["servicos"] ?? null;

                		$linha = mysqli_fetch_array($sql);
                		$id2 = $linha["id"] ?? null; $titulo2 = $linha["titulo"] ?? null; $texto2 = $linha["texto"] ?? null; $olho2 = $linha["olho"] ?? null; $data2 = $linha["data"] ?? null; $hora2 = $linha["hora"] ?? null; $posicao_imagem2 = $linha["posicao_imagem"] ?? null; $foto2 = $linha["imagem"] ?? null; $thumbnail_foto2 = "thumbnail_"."$foto" ?? null; $legenda2 = $linha["legenda"] ?? null; $fotografo2 = $linha["fotografo"] ?? null; $pasta2 = $linha["pasta"] ?? null; $tipo_categoria2 = $linha["tipo_categoria"] ?? null; $visitas2 = $linha["visitas"] ?? null; $mapa2 = $linha["mapa"] ?? null; $url2 = $linha["url"] ?? null; $fonte2 = $linha["fonte"] ?? null;$link_pagina2 = $linha["link_pagina"] ?? null; $servicos_portfolio2 = $linha["localizacao"] ?? null;$servicos2 = $linha["servicos"] ?? null;

                		$linha = mysqli_fetch_array($sql);
                		$id3 = $linha["id"] ?? null; $titulo3 = $linha["titulo"] ?? null; $texto3 = $linha["texto"] ?? null; $olho3 = $linha["olho"] ?? null; $data3 = $linha["data"] ?? null; $hora3 = $linha["hora"] ?? null; $posicao_imagem3 = $linha["posicao_imagem"] ?? null; $foto3 = $linha["imagem"] ?? null; $thumbnail_foto3 = "thumbnail_"."$foto" ?? null; $legenda3 = $linha["legenda"] ?? null; $fotografo3 = $linha["fotografo"] ?? null; $pasta3 = $linha["pasta"] ?? null; $tipo_categoria3 = $linha["tipo_categoria"] ?? null; $visitas3 = $linha["visitas"] ?? null; $mapa3 = $linha["mapa"] ?? null; $url3 = $linha["url"] ?? null; $fonte3 = $linha["fonte"] ?? null;$link_pagina3 = $linha["link_pagina"] ?? null; $servicos_portfolio3 = $linha["localizacao"] ?? null;$servicos3 = $linha["servicos"] ?? null;?>

                		<div class="col-md-4 vagas text-center"><?php
							if($id != "") {?>
			                	<a href="#" class="list-group-item" data-toggle="modal" data-target=".<?php echo $link_pagina; ?>">
			                	
			                	<?php if($olho != "") echo "<h3 class=\"titulo\">$olho</h3>"; ?>			                	
			                    <?php if($titulo != "") echo "<br/><p class=\"texto\"><strong>$titulo</strong></p>"; ?>
			                    <?php if($servicos_portfolio != "") echo "<p class=\"texto\">$servicos_portfolio</p>"; ?>	
			                    <?php if($servicos != "") echo "<p class=\"texto\">$servicos</p>"; ?>
			                    <p class="texto"><span>Mais Informa&ccedil;&otilde;es</span></p>
			                                                            
			                    </a>     	   

			                  	<div class="modal fade <?php echo $link_pagina; ?>" tabindex="-1" role="dialog">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">
										<? if($titulo != "") echo "<h2>$titulo <small>$fonte</small></h2>"; ?>
										</h4>
									  </div>
									  <div class="modal-body">
										<p><?php echo $texto ?></p>
									  </div>
									  <div class="modal-footer"><div class="text-center">							
										<a href="/enviar-cv?vaga=<?php echo $id ?>" class="pur_button link-branco" role="button">Candidatar-se para essa vaga</a>
									  </div></div>
									</div>
								  </div>
								</div><?php 
							}?>
						</div>

						<div class="col-md-4 vagas text-center"><?php
							if($id2 != "") {?>
			                	<a href="#" class="list-group-item" data-toggle="modal" data-target=".<?php echo $link_pagina2; ?>">
			                    <?php if($olho2 != "") echo "<h3 class=\"titulo\">$olho2</h3>"; ?>			                	
			                    <?php if($titulo2 != "") echo "<br/><p class=\"texto\"><strong>$titulo2</strong></p>"; ?>
			                    <?php if($servicos_portfolio2 != "") echo "<p class=\"texto\">$servicos_portfolio2</p>"; ?>	
			                    <?php if($servicos2 != "") echo "<p class=\"texto\">$servicos2</p>"; ?>
			                    <p class="texto"><span>Mais Informa&ccedil;&otilde;es</span></p>                                     
			                    </a>     	   

			                  	<div class="modal fade <?php echo $link_pagina2; ?>" tabindex="-1" role="dialog">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">
										<? if($titulo2 != "") echo "<h2>$titulo2 <small>$fonte2</small></h2>"; ?>
										</h4>
									  </div>
									  <div class="modal-body">
										<p><?php echo $texto2 ?></p>
									  </div>
									  <div class="modal-footer"><div class="text-center">							
										<a href="/enviar-cv?vaga=<?php echo $id2 ?>" class="pur_button link-branco" role="button">Candidatar-se para essa vaga</a>
									  </div></div>
									</div>
								  </div>
								</div><?php 
							}?>
						</div>

						<div class="col-md-4 vagas text-center"><?php
							if($id3 != "") {?>
			                	<a href="#" class="list-group-item" data-toggle="modal" data-target=".<?php echo $link_pagina3; ?>">
			                    <?php if($olho3 != "") echo "<h3 class=\"titulo\">$olho3</h3>"; ?>			                	
			                    <?php if($titulo3 != "") echo "<br/><p class=\"texto\"><strong>$titulo3</strong></p>"; ?>
			                    <?php if($servicos_portfolio3 != "") echo "<p class=\"texto\">$servicos_portfolio3</p>"; ?>	
			                    <?php if($servicos3 != "") echo "<p class=\"texto\">$servicos3</p>"; ?>
			                    <p class="texto"><span>Mais Informa&ccedil;&otilde;es</span></p>                                         
			                    </a>     	   

			                  	<div class="modal fade <?php echo $link_pagina3; ?>" tabindex="-1" role="dialog">
								  <div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">
										<? if($titulo3 != "") echo "<h2>$titulo3 <small>$fonte3</small></h2>"; ?>
										</h4>
									  </div>
									  <div class="modal-body">
										<p><?php echo $texto3 ?></p>
									  </div>
									  <div class="modal-footer"><div class="text-center">							
										<a href="/enviar-cv?vaga=<?php echo $id3 ?>" class="pur_button link-branco" role="button">Candidatar-se para essa vaga</a>
									  </div></div>
									</div>
								  </div>
								</div><?php 
							}?>
						</div>
						<div class="col-md-12"><br/></div>
					<?
					}
			        }else{ 
						echo "<br><h2>Em breve mais oportunidades ser&atilde;o anunciadas!</h2>
						<h1>Fa&ccedil;a o <a href=\"$url_padrao/enviar-cv\">Cadastro do seu Curr&iacute;culo</a> em nosso site!</h1>"; 
					}?>

				</div>
			</div>
			
          					
		</div>

	</div>
</section>