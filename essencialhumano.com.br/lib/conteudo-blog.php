<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row linha-content">
					<div class="col-md-7"> 
					<?php 
					$pastaimg = "geral"; $qtd = 10;	$where="";	       
					$sql_total = mysqli_query($conn,"select * from geral where id_tipo=$tipo_pagina and ativo=0 $where");            
					if (@mysqli_num_rows($sql_total)!=0) {            
						$numero_total = mysqli_num_rows($sql_total);            
						$total_reg = $numero_total; $numero_total = $numero_total/$qtd; $numero_total = explode(".", $numero_total);            
						if (isset($numero_total[1])) { $num_tot = $numero_total[0] + 1; }else{ $num_tot= $numero_total[0]; }             
						if (isset($_GET['pagina'])){ $pagina = addslashes(trim($_GET['pagina'])); }else{ $pagina=1; }           
						$fim = $qtd*$pagina;             
						if($pagina != 1) { $inicio = $pagina-1;  $inicio = $qtd*$inicio; }else{ $inicio = 0;}                              
						$limit_sql = "limit $inicio, $qtd"; // saber qual o controle do registro                  
						
						$sql_select = mysqli_query($conn,"select * from geral where id_tipo=$tipo_pagina and ativo=0 $where  
						order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id desc $limit_sql");
						
						$num_totalx = mysqli_num_rows($sql_select);            
						if ($num_totalx != "0") {           
							for($x = 0; $x<$num_totalx; $x++) {            
								$linhas = mysqli_fetch_array($sql_select);            
								$id_select1 = $linhas['id'];            
								if($linhas['imagem'] != "") $img_select1 = $linhas['imagem']; else $img_select1 = "";            
								$data_select1 = $linhas['data']; $data_select2 = explode("-", $data_select1); $mes = $data_select2[1]; $diax = $data_select2[2]; $anox = $data_select2[0];
								$data_select2 = $data_select2[2]."/".$data_select2[1]."/".$data_select2[0]; $nome_select1 = strip_tags($linhas['titulo']);            
								$link_pagina = $linhas['link_pagina']; $descricao_select1 = "";
								
								if($linhas['resumo_pagina']!="") {            
									$descricao_select1 = strip_tags($linhas['resumo_pagina']);
									$str = strlen($descricao_select1);
									if($str>=230) $descricao_select1 = substr($descricao_select1, 0, 230)." <i class=\"fa fa-sort-amount-desc\"></i>";   
								}	     
								switch ($mes) {            
							case "01": $mes = "Janeiro"; break; 
							case "02": $mes = "Fevereiro"; break; 
							case "03": $mes = "Março"; break; 
							case "04": $mes = "Abril"; break; 
							case "05": $mes = "Maio"; break; 
							case "06": $mes = "Junho"; break; 
							case "07": $mes = "Julho"; break; 
							case "08": $mes = "Agosto"; break;            
							case "09": $mes = "Setembro"; break; 
							case "10": $mes = "Outubro"; break; 
							case "11": $mes = "Novembro"; break; 
							case "12": $mes = "Dezembro"; break;
							} ?>
								
								<div class="well"><?php
								if($img_select1 != "") { ?>									
									<div class="well-img"><a href="<?php echo URL1."/$html_pagina/$link_pagina"; ?>"><img class="img-responsive movborda" src="<?php echo URL1 ?>/imagens/geral/thumbnail_<?php echo $img_select1; ?>" alt="<?php echo $nome_select1 ?>"></a></div>
									<div class="well-data"><? if($data_select1 != "0000-00-00") { 
									echo "<p class=\"hidden-xs\">Publicado em $diax de ".utf8_encode($mes)." de $anox</p>"; } ?></div><?php									
								}else{ ?>
									<div class="well-text"><? if($data_select1 != "0000-00-00") { echo "<p class=\"hidden-xs txt-tam10\">Publicado em $diax de ".utf8_encode($mes)." de $anox</p>"; } ?></div><? 
								} ?>
									<div class="well-text"><?
									echo "<h2 class=\"txt-tam20\"><strong>$nome_select1</strong></h2>"; 
									echo "<p class=\"hidden-xs\">$descricao_select1</p>";?>                                     
									<a class="btn btn-default" href="<?php echo URL1."/$html_pagina/$link_pagina"; ?>" role="button">Continue Lendo...</a>
									</div>
								</div><hr class="style11"/><? 
							} //FOR
							/********************* MOSTRAR NUMERO DE PAGINAS *******************/
							if ($total_reg > $qtd){
								$total_regxxx = ceil ($total_reg/$qtd);                
								if($pagina >= 6) { $num_tot = $pagina+6; $i_x = $num_tot-6; }else{  $i_x = 0; $num_tot = 6; } ?>
								<div class="col-xs-12 col-sm-12 col-md-12 espc-height2 text-center">
								<ul class="pagination"><?
								if($pagina != 1) { 
									$numpagx = $pagina-1;
									if($numpagx != 1) {
										if(isset($link_paginacao))
										echo "<li><a class=\"pg\" href=\"#\" onclick=\"sendPost('".URL1."/$html_pagina/$numpagx', {".$link_paginacao."});\" aria-label=\"Previous\" title=\"Pag: $numpagx\">
										<span aria-hidden=\"true\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
										else
										echo "<li><a class=\"pg\" href=\"".URL1."/$html_pagina/$numpagx\" aria-label=\"Previous\" title=\"Pag: $numpagx\">
										<span aria-hidden=\"true\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
									}else{
										if(isset($link_paginacao))
										echo "<li><a class=\"pg\" href=\"#\" onclick=\"sendPost('".URL1."/$html_pagina', {".$link_paginacao."});\" aria-label=\"Previous\" title=\"Pag: $numpagx\">
										<span aria-hidden=\"true\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
										else
										echo "<li><a class=\"pg\" href=\"".URL1."/$html_pagina\" aria-label=\"Previous\" title=\"Pag: $numpagx\">
										<span aria-hidden=\"true\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
									}
								}else{
									echo "<li class=\"disabled\"><a href=\"#\" aria-label=\"Previous\"><span aria-hidden=\"true\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
								}
								for($p = $i_x; $p<$num_tot; $p++) {
									if (isset($numpag)) { $numpag += 1; }else{ if ($p != 0){ $numpag = $p; }else{ $numpag = 1; } }                  
									if ($pagina == $numpag) {
										echo "<li class=\"active\"><a class=\"pg\" href=\"#\">$numpag <span class=\"sr-only\">(current)</span></a></li>";
									}else{
										if($total_regxxx>=$numpag) {
											if($numpag != 1) {
												if(isset($link_paginacao))
												echo "<li><a class=\"pg\" href=\"#\" onclick=\"sendPost('".URL1."/$html_pagina/$numpag', {".$link_paginacao."});\" role=\"pagination\" title=\"Pag: $numpag\">$numpag</a></li>";
												else
												echo "<li><a class=\"pg\" href=\"".URL1."/$html_pagina/$numpag\" role=\"pagination\" title=\"Pag: $numpag\">$numpag</a></li>";
											}else{
												if(isset($link_paginacao))
												echo "<li><a class=\"pg\" href=\"#\" onclick=\"sendPost('".URL1."/$html_pagina', {".$link_paginacao."});\" role=\"pagination\" title=\"Pag: $numpag\">$numpag</a>
												</li>";
												else
												echo "<li><a class=\"pg\" href=\"".URL1."/$html_pagina\" role=\"pagination\" title=\"Pag: $numpag\">$numpag</a></li>";            					
											}
										}
									}
								} 
								$numpagy = $pagina+1;
								if($total_regxxx !=$pagina) {
									if(isset($link_paginacao))
									echo "<li><a href=\"#\" class=\"pg\" onclick=\"sendPost('".URL1."/$html_pagina/$numpagy', {".$link_paginacao."});\" aria-label=\"Next\"><span aria-hidden=\"true\">
									<i class=\"fa fa-angle-right\"></i></span></a></li>";
									else
									echo "<li><a class=\"pg\" href=\"".URL1."/$html_pagina/$numpagy\" aria-label=\"Next\"><span aria-hidden=\"true\"><i class=\"fa fa-angle-right\"></i></span></a></li>";
								}else{
									echo "<li class=\"disabled\"><a href=\"#\" aria-label=\"Next\"><span aria-hidden=\"true\"><i class=\"fa fa-angle-right\"></i></span></a></li>";
								}?>
								</ul></div><?						
							}
						}     
					}else{ echo "<div class=\"alert alert-warning text-center txt-tam14\" role=\"alert\"><i class=\"fa fa-exclamation-triangle fa-3x\" aria-hidden=\"true\"></i>
					<br />Nenhuma informa&ccedil;&atilde;o encontrado.<br /></div>";
					}?> 
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-4">
							<div class="txt-tam12"><strong><i class="fa fa-search"></i> Pesquisa</strong></div>
							<form class="form-inline" method="post" name="form_busca" id="form_busca" action="<?php echo URL1."/$html_pagina"; ?>" >					
								<div class="form-group">
								<label class="sr-only" for="P">busca</label>
								<input name="P" type="text" class="form-control" id="P" placeholder="">
								 </div>           
								<button type="submit" class="pur_button"> <i class="fa fa-search"></i> Buscar </button>
							</form><br><br>
						
						<?php include("lib/box-arquivos.php"); ?>
					</div>
				</div>

	</div>
</section>