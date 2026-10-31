<? ob_start('ob_gzhandler'); header("Accept-Encoding: compress, gzip");?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
<?php $tipo_pagina=19; require_once("include.php"); ?>
<?php require_once("lib/head.php"); ?>
<?php require_once("lib/js.php"); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#salario").maskMoney({decimal:",", thousands:"."});
    });
</script>

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</head><?php flush(); ?>
<body>

<?php include("topo.php"); ?>
<?php include("lib/conteudo_alteracao_de_vagas.php"); ?>
<div class="clearfix"></div>
<?php include("rodape.php"); ?>
<?php include_once("lib/analyticstracking.php") ?>

</body>
</html>
<?php mysqli_close($conn); ob_end_flush(); ?>