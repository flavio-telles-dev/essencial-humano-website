<section id="slide">
		<div class="owl-carousel slide">
			<?php
			$sql_slide = mysqli_query($conn, "select * from geral where id_tipo=15 and ativo=0 
			order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id desc");
			$num_slide = mysqli_num_rows($sql_slide);            
			if ($num_slide != "0") {           
				for($d = 0; $d<$num_slide; $d++) {							
					$ln_slide = mysqli_fetch_array($sql_slide);            
					if($ln_slide['arquivo_link'] != "") $img_slide = $ln_slide['arquivo_link']; else $img_slide = ""; 					
					$tit1_slide = $ln_slide['titulo'];
					$tit2_slide = $ln_slide['fonte'];
					$desc_slide = $ln_slide['fotografo'];
					$bot_slide = $ln_slide['tipo_nome'];
					$url_slide = $ln_slide['url'];
				?>
			
			<div class="item">
				<?php if ($url_slide !=""){?><a href="<?=$url_slide?>"><?php }?>
				<img src="<?=URL1;?>/imagens/slides/<?=$img_slide?>" width="1280" height="466" alt="<?=$tit1_slide?>" class="img-responsive">				
				<?php if ($url_slide !=""){?></a><?php }?>
			</div>
			
			<?php
				}
			}
			?>

		</div>
	</section>
		