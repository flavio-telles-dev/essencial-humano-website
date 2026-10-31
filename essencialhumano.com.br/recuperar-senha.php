<? ob_start('ob_gzhandler'); header("Accept-Encoding: compress, gzip");?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
<?php $tipo_pagina=4; require_once("include.php"); ?>
<?php require_once("lib/head.php"); ?>
<?php require_once("lib/js.php"); ?>
</head><?php flush(); ?>
<body>

<?php include("topo.php"); ?>
<?php include("lib/conteudo-recuperar-senha.php"); ?>
<div class="clearfix"></div>
<?php include("rodape.php"); ?>
<?php include_once("lib/analyticstracking.php") ?>

</body>
</html>
<?php mysqli_close($conn); ob_end_flush(); ?>