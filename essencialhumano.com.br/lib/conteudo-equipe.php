<style type="text/css">

/* Largura do modal */
.modal-perfil {
    max-width: 900px;
    width: 90%;
}

/* Cabeçalho */
.modal-perfil .modal-header {
    padding: 15px 20px;
    text-align: left;
}

.modal-perfil .modal-title {
    font-size: 20px;
    line-height: 1.4;
    font-weight: 600;
    margin: 0;
    padding-right: 25px;
    overflow-wrap: break-word;
}

/* Fonte ou subtítulo */
.modal-perfil .modal-fonte {
    font-size: 13px;
    color: #777;
    margin: 5px 0 0;
    text-align: left;
}

/* Conteúdo */
.modal-perfil .modal-body {
    padding: 20px;
    text-align: left;
}

/* Imagem à esquerda */
.modal-perfil .perfil-imagem img {
    width: 100%;
    max-width: 260px;
    height: auto;
    display: block;
    margin: 0 auto;
}

/* Texto à direita */
.modal-perfil .perfil-texto {
    text-align: left;
    font-size: 14px;
    line-height: 1.7;
    overflow-wrap: break-word;
}

/* Evita margens excessivas nos parágrafos */
.modal-perfil .perfil-texto p {
    margin: 0 0 12px;
    text-align: left;
}

/* Rodapé */
.modal-perfil .modal-footer {
    padding: 12px 20px;
    text-align: center;
}

/* Ajustes para telemóveis */
@media (max-width: 767px) {
    .modal-perfil {
        width: auto;
        margin: 10px;
    }

    .modal-perfil .modal-title {
        font-size: 17px;
    }

    .modal-perfil .perfil-imagem {
        margin-bottom: 20px;
    }

    .modal-perfil .perfil-imagem img {
        max-width: 220px;
    }
}

</style>


<section class="fd-body">
	<?php $dobradosite ="Comprometida com o desenvolvimento Humano";include("lib/breadcrumbs.php"); ?>
	<div class="container txt-body">

		<div class="row">
			
            	
				<?php 			
                $codigo_select = "select id, titulo, descricao as texto, fonte, imagem, link_pagina from geral 
                where id_tipo = $tipo_pagina and ativo=0
                order by  id asc";
            
                $sql = mysqli_query($conn,$codigo_select);
                $num_total = @mysqli_num_rows($sql); $num_total = $num_total/3;
                if ($num_total != "0") {
                    
                for($y = 0; $y<$num_total; $y++) {
                $linha = mysqli_fetch_array($sql);
                $id = $linha["id"] ?? null; $titulo = $linha["titulo"] ?? null; $texto = $linha["texto"] ?? null;  $foto = $linha["imagem"] ?? null; $thumbnail_foto = "thumbnail_"."$foto" ?? null; $fonte = $linha["fonte"] ?? null;
                $link_pagina = $linha["link_pagina"] ?? null;
				
				$linha = mysqli_fetch_array($sql);
                $id1 = $linha["id"] ?? null; $titulo1 = $linha["titulo"] ?? null; $texto1 = $linha["texto"] ?? null; $foto1 = $linha["imagem"] ?? null;$thumbnail_foto1="thumbnail_"."$foto1" ?? null; $fonte1=$linha["fonte"] ?? null; $link_pagina1 = $linha["link_pagina"] ?? null;
				
				$linha = mysqli_fetch_array($sql);
                $id2 = $linha["id"] ?? null; $titulo2 = $linha["titulo"] ?? null; $texto2=$linha["texto"] ?? null;  $foto2=$linha["imagem"] ?? null; $thumbnail_foto2="thumbnail_"."$foto2" ?? null; $fonte2=$linha["fonte"] ?? null;$link_pagina2 = $linha["link_pagina"] ?? null;
				?>    
                
			
  			<div class="col-xs-12 col-sm-4 text-center">
            	<?php if($id != "") {?>
                	<p><a href="#" data-toggle="modal" data-target=".<?php echo $link_pagina; ?>">
					<?php echo "<img src=\"/imagens/geral/$thumbnail_foto\" class=\"img-responsive\"  alt=\"$titulo\" title=\"$titulo\" 
					border=\"0\" class=\"img-responsive\">"; ?></a>
					<div class="well-equipe"><p><?=$titulo;?></p></div></p>
                
                	
					<div class="modal fade <?php echo $link_pagina; ?>"
					     tabindex="-1"
					     role="dialog"
					     aria-labelledby="myModalLabel"
					     aria-hidden="true">

					    <div class="modal-dialog modal-lg modal-perfil">
					        <div class="modal-content">

					            <div class="modal-header">
					                <button type="button"
					                        class="close"
					                        data-dismiss="modal"
					                        aria-hidden="true">
					                    &times;
					                </button>

					                <h4 class="modal-title" id="myModalLabel">
					                    <?php if ($titulo != "") echo $titulo; ?>
					                </h4>

					                <?php if (!empty($fonte)) { ?>
					                    <p class="modal-fonte">
					                        <?php echo $fonte; ?>
					                    </p>
					                <?php } ?>
					            </div>

					            <div class="modal-body">
					                <div class="row">

					                    <div class="col-sm-4 perfil-imagem">
					                        <img
					                            src="/imagens/geral/<?php echo $thumbnail_foto; ?>"
					                            alt="<?php echo htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?>"
					                            title="<?php echo htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?>"
					                            class="img-responsive"
					                        >
					                    </div>

					                    <div class="col-sm-8 perfil-texto">
					                        <?php echo $texto; ?>
					                    </div>

					                </div>
					            </div>

					            <div class="modal-footer">
					                <button type="button"
					                        class="pur_button link-branco"
					                        data-dismiss="modal">
					                    Fechar
					                </button>
					            </div>

					        </div>
					    </div>
					</div>

				 <?php } ?>
        	</div> 

            <div class="col-xs-12 col-sm-4 text-center">
            	<?php if($id1 != "") {?>
                	<p class="text-center"><a href="#" data-toggle="modal" data-target=".<?php echo $link_pagina1; ?>" >
					<?php echo "<img src=\"/imagens/geral/$thumbnail_foto1\" class=\"img-responsive\" alt=\"$titulo1\" title=\"$titulo1\" border=\"0\" 						  
					class=\"img-responsive\">"; ?></a>
					<div class="well-equipe"><p><?=$titulo1;?></p></div></p>
                    

					<div class="modal fade <?php echo $link_pagina1; ?>"
					     tabindex="-1"
					     role="dialog"
					     aria-labelledby="myModalLabel"
					     aria-hidden="true">

					    <div class="modal-dialog modal-lg modal-perfil">
					        <div class="modal-content">

					            <div class="modal-header">
					                <button type="button"
					                        class="close"
					                        data-dismiss="modal"
					                        aria-hidden="true">
					                    &times;
					                </button>

					                <h4 class="modal-title" id="myModalLabel">
					                    <?php if ($titulo1 != "") echo $titulo1; ?>
					                </h4>

					                <?php if (!empty($fonte1)) { ?>
					                    <p class="modal-fonte">
					                        <?php echo $fonte1; ?>
					                    </p>
					                <?php } ?>
					            </div>

					            <div class="modal-body">
					                <div class="row">

					                    <div class="col-sm-4 perfil-imagem">
					                        <img
					                            src="/imagens/geral/<?php echo $thumbnail_foto1; ?>"
					                            alt="<?php echo htmlspecialchars($titulo1, ENT_QUOTES, 'UTF-8'); ?>"
					                            title="<?php echo htmlspecialchars($titulo1, ENT_QUOTES, 'UTF-8'); ?>"
					                            class="img-responsive"
					                        >
					                    </div>

					                    <div class="col-sm-8 perfil-texto">
					                        <?php echo $texto1; ?>
					                    </div>

					                </div>
					            </div>

					            <div class="modal-footer">
					                <button type="button"
					                        class="pur_button link-branco"
					                        data-dismiss="modal">
					                    Fechar
					                </button>
					            </div>

					        </div>
					    </div>
					</div>

                <?php } ?>
            </div>

            <div class="col-xs-12 col-sm-4 text-center">
                    	<?php if($id2 != "") {?>
                    	<p><a href="#" data-toggle="modal" data-target=".<?php echo $link_pagina2; ?>" >
						<?php echo "<img src=\"/imagens/geral/$thumbnail_foto2\" class=\"img-responsive\" alt=\"$titulo2\" title=\"$titulo2\" border=\"0\" 						  class=\"img-responsive\">"; ?></a>
						<div class="well-equipe"><p><?=$titulo2;?></p></div></p>


						<div class="modal fade <?php echo $link_pagina2; ?>"
					     tabindex="-1"
					     role="dialog"
					     aria-labelledby="myModalLabel"
					     aria-hidden="true">

					    <div class="modal-dialog modal-lg modal-perfil">
					        <div class="modal-content">

					            <div class="modal-header">
					                <button type="button"
					                        class="close"
					                        data-dismiss="modal"
					                        aria-hidden="true">
					                    &times;
					                </button>

					                <h4 class="modal-title" id="myModalLabel">
					                    <?php if ($titulo2 != "") echo $titulo2; ?>
					                </h4>

					                <?php if (!empty($fonte2)) { ?>
					                    <p class="modal-fonte">
					                        <?php echo $fonte2; ?>
					                    </p>
					                <?php } ?>
					            </div>

					            <div class="modal-body">
					                <div class="row">

					                    <div class="col-sm-4 perfil-imagem">
					                        <img
					                            src="/imagens/geral/<?php echo $thumbnail_foto2; ?>"
					                            alt="<?php echo htmlspecialchars($titulo2, ENT_QUOTES, 'UTF-8'); ?>"
					                            title="<?php echo htmlspecialchars($titulo2, ENT_QUOTES, 'UTF-8'); ?>"
					                            class="img-responsive"
					                        >
					                    </div>

					                    <div class="col-sm-8 perfil-texto">
					                        <?php echo $texto2; ?>
					                    </div>

					                </div>
					            </div>

					            <div class="modal-footer">
					                <button type="button"
					                        class="pur_button link-branco"
					                        data-dismiss="modal">
					                    Fechar
					                </button>
					            </div>

					        </div>
					    </div>
					</div>

                    	
                    	<?php } ?>
             </div>               

				<?php	
                }  }
                ?>
		</div>

	</div>
	<div class="container txt-body">
		<div class="list-items">
			<div class="row">
			<div class="col-xs-12 text-center"><h2>Empresas Parceiras</h2></div>
				<?php
				$sql_select = mysqli_query($conn,"select * from geral where id_tipo=10 and ativo=0   
				order by date_format(data, '%Y') desc, date_format(data, '%m') desc, date_format(data, '%d') desc, id asc");				
				$num_totalx = mysqli_num_rows($sql_select);            
				if ($num_totalx != "0") {           
					for($x=0; $x<$num_totalx; $x++):            
						$linhas = mysqli_fetch_array($sql_select);            
						$id_select1 = $linhas['id'];            
						if($linhas['imagem'] != "") $img_select1="/imagens/geral/thumbnail_".$linhas['imagem']; else $img_select1 = ""; $nome_cliente = strip_tags($linhas['titulo']);            
						$link_cliente = $linhas['url']; 
						?>
						<div class="item col-xs-6 col-sm-4 col-md-3">
							<? if ($link_cliente !="") {?><a href="<?=$link_cliente?>" target="_blank">
							<? }else{ ?><a href="#"><? }?>
								<img src="<?=$img_select1?>" alt="<?=$nome_cliente?>" class="img-responsive"/>
							</a>
						</div>			
					<?php endfor; 
				}?>
			</div>
		</div>
	</div>
</section>