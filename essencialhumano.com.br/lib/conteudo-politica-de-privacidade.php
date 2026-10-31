<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row">
		<?php 			
		$codigo_select = "select id, id_galeria, titulo, olho, descricao as texto, fonte, posicao_imagem, imagem, 
		fotografo, legenda, url, mapa, visitas, pasta, nome_galeria, hora, servicos, localizacao, DATE_FORMAT(data,'%d/%m/%Y') as data from geral 
		where id_tipo = $tipo_pagina order by  DATE_FORMAT(data,'%Y') asc,  DATE_FORMAT(data,'%m') asc, DATE_FORMAT(data,'%d') asc, id desc";
						
		$sql = mysqli_query($conn,$codigo_select);
		$num_total = @mysqli_num_rows($sql);
		if ($num_total != "0") { 
			$linha = mysqli_fetch_array($sql);
			$id = $linha["id"]; $titulo = $linha["titulo"]; $texto = $linha["texto"]; $olho = $linha["olho"];
			$data = $linha["data"]; $hora = $linha["hora"]; 
			$posicao_imagem = $linha["posicao_imagem"]; $foto = $linha["imagem"]; $thumbnail_foto = "thumbnail_"."$foto"; $legenda = $linha["legenda"];
			$fotografo = $linha["fotografo"]; $pasta = $linha["pasta"]; $tipo_categoria = "";
			 $url = $linha["url"]; $fonte = $linha["fonte"];
			$localizacao_portfolio = $linha["servicos"]; $servicos_portfolio = $linha["localizacao"]; $data = $linha["data"]; $hora = $linha["hora"];
			if ($data == "00/00/0000") { $data = ""; } if ($hora == "00:00:00") {$hora = ""; }else{ $hora = substr($hora, 0, 5); }?>
			<div class="col-sm-12">	<?			
			if($titulo != "") echo "<h3>$titulo</h3>"; echo "$texto";?>            
            </div><?
		}?>		
		</div>

	</div>
</section>