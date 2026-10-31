<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

$seo_imagem = "";$seo_titulo = "";$seo_descricao = "";$seo_keywords = "";$seo_paginacao = ""; $seo_link="";

//**** ARQUIVOS ANEXADOS.
include_once "classes/confdb/config.php";
include_once "classes/verifica_email.php";
require_once("classes/dados_conta.php");
?>
<?php
$select_pag = mysqli_query($conn,"select * from categoria where id_tipo = $tipo_pagina");
$num_total_pag = mysqli_num_rows($select_pag);
if ($num_total_pag != "0") {
	$linha_pag = mysqli_fetch_array($select_pag);
	$nome_pagina = $linha_pag['categoria']; //nome da página
	$icon_pagina = $linha_pag['arquivo'];//icone
	$submone_pagina = $linha_pag['subcategoria'];// subnome pagina  
	$msn_pagina = nl2br($linha_pag['mensagem']);//mensagem extra	
	$html_pagina = $linha_pag['pagina'];// link pagina
}
if (isset ($_GET['nome_cod'])){
	$cod = addslashes(trim($_GET['nome_cod']));	
	$sql_meta = mysqli_query($conn,"select * from geral where id_tipo=$tipo_pagina and link_pagina='$cod' limit 0,1") or die("<b>Um erro ocorreu no acesso ao site</b>.\n<br /><br />Ocorreu um erro inesperado, tente novamente mais tarde.<br /><br />");	
	$num_total_meta = mysqli_num_rows($sql_meta);
	if ($num_total_meta != "0") {
		$linha_meta = mysqli_fetch_array($sql_meta);
		$seo_titulo = $linha_meta["seo_titulo"]; 
		if($seo_titulo == "") $seo_titulo = $linha_meta["titulo"]; 
		$seo_descricao = $linha_meta["seo_descricao"]; 
		if($seo_descricao == "") $seo_descricao=$linha_meta["resumo_pagina"];
		$seo_imagem = $linha_meta["imagem"];
	}
}elseif (isset($_GET['pagina'])){
	$seo_paginacao = $_GET['pagina'];	
	$sql_meta = mysqli_query($conn,"select * from seo where id_tipo=$tipo_pagina limit 0,1");	
	$num_total_meta = @mysqli_num_rows($sql_meta);
	$linha_meta = @mysqli_fetch_array($sql_meta);
	$seo_titulo = $linha_meta["seo_titulo"] ?? null; $seo_titulo = $seo_titulo." - Pag: $seo_paginacao";	
	$seo_descricao = $linha_meta["seo_descricao"] ?? null; $seo_descricao = "Pag: $seo_paginacao - ".$seo_descricao;
	
	$seo_imagem = $linha_meta["seo_imagem"] ?? null;
}else{	
	$sql_meta = mysqli_query($conn,"select * from seo where id_tipo=$tipo_pagina limit 0,1");	
	$num_total_meta = @mysqli_num_rows($sql_meta);
	$linha_meta = @mysqli_fetch_array($sql_meta);
	$seo_titulo = $linha_meta["seo_titulo"] ?? null;
	$seo_descricao = $linha_meta["seo_descricao"] ?? null;
	$seo_imagem = $linha_meta["seo_imagem"] ?? null;
}
?>
