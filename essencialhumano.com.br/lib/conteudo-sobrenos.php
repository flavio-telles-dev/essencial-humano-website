<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row">
		<?php 			
		$codigo_select = "select id, id_galeria, tipo_categoria, titulo, olho, descricao as texto, fonte, posicao_imagem, imagem, 
		fotografo, legenda, url, mapa, visitas, pasta, nome_galeria, hora, servicos, localizacao, DATE_FORMAT(data,'%d/%m/%Y') as data from geral 
		where id_tipo = $tipo_pagina order by  DATE_FORMAT(data,'%Y') asc,  DATE_FORMAT(data,'%m') asc, DATE_FORMAT(data,'%d') asc, id desc limit 0,1";
						
		$sql = mysqli_query($conn, $codigo_select);
		$num_total = @mysqli_num_rows($sql);
		if ($num_total != "0") { 
			$linha = mysqli_fetch_array($sql);
			$id = $linha["id"]; $titulo = $linha["titulo"]; $texto = $linha["texto"]; $olho = $linha["olho"];
			$data = $linha["data"]; $hora = $linha["hora"]; 
			$posicao_imagem = $linha["posicao_imagem"]; $foto = $linha["imagem"]; $thumbnail_foto = "thumbnail_"."$foto"; $legenda = $linha["legenda"];
			$fotografo = $linha["fotografo"]; $pasta = $linha["pasta"]; $tipo_categoria = $linha["tipo_categoria"];
			$visitas = $linha["visitas"]; $mapa = $linha["mapa"]; $url = $linha["url"]; $fonte = $linha["fonte"];
			$localizacao_portfolio = $linha["servicos"]; $servicos_portfolio = $linha["localizacao"]; $data = $linha["data"]; $hora = $linha["hora"];
			if ($data == "00/00/0000") { $data = ""; } if ($hora == "00:00:00") {$hora = ""; }else{ $hora = substr($hora, 0, 5); }?>
			<div class="col-sm-12">	<?			
			if($titulo != "") echo "<h3>$titulo</h3>"; echo "$texto";?>            
            </div><?
		}?>
		<div class="col-md-6"><?	
		$codigo_select = "select id, id_galeria, tipo_categoria,titulo, olho, descricao as texto, fonte, posicao_imagem, imagem, 
		fotografo, legenda, url, mapa, visitas, pasta, nome_galeria, hora, servicos, localizacao, DATE_FORMAT(data,'%d/%m/%Y') as data from geral 
		where id_tipo = $tipo_pagina order by  DATE_FORMAT(data,'%Y') asc,  DATE_FORMAT(data,'%m') asc, DATE_FORMAT(data,'%d') asc, id desc limit 1, 10";
						
		$sql = mysqli_query($conn,$codigo_select);
		$num_total = @mysqli_num_rows($sql);
		if ($num_total != "0") {
			for($y = 0; $y<$num_total; $y++) {
				$linha = mysqli_fetch_array($sql);
				$id = $linha["id"]; $titulo = $linha["titulo"]; $texto = utf8_encode($linha["texto"]); $olho = utf8_encode($linha["olho"]);
				$data = $linha["data"]; $hora = $linha["hora"]; 
				$posicao_imagem = $linha["posicao_imagem"]; $foto = $linha["imagem"]; $thumbnail_foto = "thumbnail_"."$foto"; $legenda = utf8_encode($linha["legenda"]);
				$fotografo = utf8_encode($linha["fotografo"]); $pasta = $linha["pasta"]; $tipo_categoria = utf8_encode($linha["tipo_categoria"]);
				$visitas = $linha["visitas"]; $mapa = $linha["mapa"]; $url = $linha["url"]; $fonte = utf8_encode($linha["fonte"]);
				$localizacao_portfolio = $linha["servicos"]; $servicos_portfolio = $linha["localizacao"]; $data = $linha["data"]; $hora = $linha["hora"];
				if ($data == "00/00/0000") { $data = ""; } if ($hora == "00:00:00") {$hora = ""; }else{ $hora = substr($hora, 0, 5); }
				if($titulo != "") echo "<h3>$titulo</h3>"; echo "$texto";
			} 
		}?>
		</div>
		<div class="col-md-6"><?
        $codigo_select = "select id, titulo, descricao as texto from geral 
		where id_tipo = 9 order by  DATE_FORMAT(data,'%Y') asc,  DATE_FORMAT(data,'%m') asc, DATE_FORMAT(data,'%d') asc, id desc limit 0,1";						
		$sql = mysqli_query($conn,$codigo_select);
		$num_total = @mysqli_num_rows($sql);
		if ($num_total != "0") { 
			$linha = mysqli_fetch_array($sql);
			$id = $linha["id"]; $titulo = $linha["titulo"]; $texto = utf8_encode($linha["texto"]);	
			if($titulo != "") echo "<h3>$titulo</h3>"; echo "<div class=\"embed-responsive embed-responsive-4by3\">$texto</div>";
		}?>
		</div>
		</div>

	</div>
</section>