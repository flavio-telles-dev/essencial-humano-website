<?php if($tipo_pagina!=0){?>
<div class="container breadcrumb1">
	<h1><?php 
	if(isset($dobradosite)) {
		if($dobradosite!="") { 
			echo $dobradosite; 
		}else{ 
			echo $nome_pagina; 
		}
	}else{ 
		echo $nome_pagina; 
	} ?></h1>
	<div class="hr1"><img src="/imagens/layout/linha_breadcrumbs.jpg" width="738" height="24" border="0" alt=""></div>
</div>
<?php }?>