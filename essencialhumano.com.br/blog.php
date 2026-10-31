<? ob_start('ob_gzhandler'); header("Accept-Encoding: compress, gzip");?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
<?php $tipo_pagina=11; require_once("include.php"); ?>
<?php require_once("lib/head.php"); ?>
	<script>
	if(!window.sendPost){
    	window.sendPost = function(url, obj){
			//Define o formulário
			var myForm = document.createElement("form");
			myForm.action = url;
			myForm.method = "post";
			for(var key in obj) {
				var input = document.createElement("input");
				input.type = "text";
				input.value = obj[key];
				input.name = key;
				myForm.appendChild(input);            
			}
			//Adiciona o form ao corpo do documento
			document.body.appendChild(myForm);
			//Envia o formulário
			myForm.submit();
        }    
  	}  
	</script>
</head><?php flush(); ?>
<body>

<?php include("topo.php"); ?>
<?php include("lib/conteudo-blog.php"); ?>
<div class="clearfix"></div>
<?php include("rodape.php"); ?>
<?php require_once("lib/js.php"); ?>
<?php include_once("lib/analyticstracking.php") ?>

</body>
</html>
<?php mysqli_close($conn); ob_end_flush(); ?>