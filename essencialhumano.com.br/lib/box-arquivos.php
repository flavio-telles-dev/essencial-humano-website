<?php
  $sql_cat = mysqli_query($conn,"select date_format(data, '%m') as data from geral where id_tipo=$tipo_pagina and ativo=0 and date_format(data, '%m')!='00' group by date_format(data, '%m') order by date_format(data, '%m') asc"); $lk_html="noticias";
 
  $num_cat = mysqli_num_rows($sql_cat);            
  if ($num_cat != "0") {  ?>
	<div class="panel panel-default">
	<div class="panel-heading txt-tam14 txt-preto"><strong>Arquivos</strong></div>
	<table class="table"><?         
  	for($c = 0; $c<$num_cat; $c++) {            
    	$ln_cat = mysqli_fetch_array($sql_cat);            
        $data_arq = $ln_cat['data'];$id_cat = $data_arq;
		
		switch ($data_arq) {            
							case "01": $data_arq = "Jan"; break; 
							case "02": $data_arq = "Fev"; break; 
							case "03": $data_arq = "Mar"; break; 
							case "04": $data_arq = "Abr"; break; 
							case "05": $data_arq = "Mai"; break; 
							case "06": $data_arq = "Jun"; break; 
							case "07": $data_arq = "Jul"; break; 
							case "08": $data_arq = "Ago"; break;            
							case "09": $data_arq = "Set"; break; 
							case "10": $data_arq = "Out"; break; 
							case "11": $data_arq = "Nov"; break; 
							case "12": $data_arq = "Dez"; break;
							} 
		?>
  		<tr><td>
        &nbsp;&nbsp;<a href="#" onclick="sendPost('<?php echo URL1 ?>/<?php echo $html_pagina ?>', {C:'<?php echo $id_cat ?>'});"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data_arq ?></a>
        </td></tr>	
		<? $data_arq = "";
	}?></table></div><?
  }?>

  <div class="panel panel-default">
	<div class="panel-heading txt-tam14 txt-preto"><strong>Tags</strong></div>
	</div>