<?php
$codigo_blog = "select * from geral where id_tipo=$tipo_pagina and id!=$id and ativo=0 order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc limit 0,8";
$sql_blog = mysqli_query($conn,$codigo_blog); $num_blog = mysqli_num_rows($sql_blog);
if ($num_blog != "0") { ?><div class="well"><div class="txt-tam14 espc-height3"><b>Veja Também</b></div><?
	for($bg = 0; $bg<$num_blog; $bg++) {
		$ln_blog = mysqli_fetch_array($sql_blog); $link_blog = $ln_blog['link_pagina']; $titulo_blog  = $ln_blog["titulo"];$foto_blog  = $ln_blog["imagem"]; 		
		if($titulo_blog!="") { ?>
			<div class="espc-height1">
			<?php
			echo "<a href=\"".URL1."/$html_pagina/$link_blog\" class=\"link-azul\">";
			if ($foto_blog != "") {echo "<img src=\"". URL1 ."/imagens/geral/thumbnail_$foto_blog\" alt=\"$titulo_blog\" class=\"img-responsive\">";}			
			echo "<h2 class=\"txt-tam10\">$titulo_blog</h2>";
			echo "</a>"; ?> 
			</div><hr class="style11"/><?php 
		}
	}?>
	<a class="pur_button btn-block link-branco" href="<?php echo URL1 ?>/<?php echo $html_pagina ?>" role="button">Veja mais</a></div><?
}?>