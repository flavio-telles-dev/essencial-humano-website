<? ob_start('ob_gzhandler'); header("Accept-Encoding: compress, gzip");?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8">
<?php $tipo_pagina=100; require_once("include.php"); ?>
<?php require_once("lib/head.php"); ?>
</head><?php flush(); ?>
<body>

<?php include("topo.php"); ?>
<?php include("lib/conteudo-livro.php"); ?>
<div class="clearfix"></div>
<?php include("rodape.php"); ?>
<?php require_once("lib/js.php"); ?>
<?php include_once("lib/analyticstracking.php") ?>

</body>
</html>
<?php mysqli_close($conn); ob_end_flush(); ?>