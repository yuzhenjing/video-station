<?php
error_reporting(0);
include "./inc/aik.config.php";
if (!$_GET["bt"]) {
	$tiao = $aik["pcdomain"];
?><meta http-equiv=refresh content='0; url=<?php echo $tiao;?>'><?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>《<?php echo $_GET["bt"];?>》-搜索结果-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/seacher.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="《<?php echo $_GET["bt"];?>》搜索结果">
<meta name="description" content="<?php echo $aik["title"];?>-《<?php echo $_GET["bt"];?>》搜索结果">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>.dw-box {
    background: #FFEA97;
    border: 1px solid #E1B400;
    color: #3A87AD;
    border-radius: 5px;
	padding:5px 0px;
}</style>
</head>
<?php
include "header.php";
?>
<base target='_blank'>
<section class="container">
<div class="am-container main" style="padding:0">       
<?php
$sourl = "http://www.hdwan.net/?s=" . $_GET["bt"];
$info = file_get_contents($sourl);
$vname = "#<a href=\"http://www.hdwan.net/(.*?).html\" class=\"zoom\" rel=\"bookmark\" target=\"_blank\" title=\"(.*?)\">#";
$vimg = "#<img src=\"(.*?)\" alt=\"(.*?)\" />                                                      <div class=\"zoomOverlay\"></div>#";
$array = array();
preg_match_all($vname, $info, $namearr);
preg_match_all($vimg, $info, $imgarr);
preg_match_all($fname, $info, $fnamearr);
$zname = $namearr[2];
$fname = $namearr[1];
?><strong class="single-strong">相关资源BT下载链接</strong><ul class="mvul"><?php
foreach ($fname as $key => $video) {
	$url = "http://www.hdwan.net/" . $fname[$key] . ".html";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
	curl_setopt($ch, CURLOPT_REFERER, "-");
	$response = curl_exec($ch);
	curl_close($ch);
	if ($x = strpos($response, "<div class=\"dw-box")) {
		$response = substr($response, $x);
	}
	if ($x = strpos($response, "</div>")) {
		$response = substr($response, 0, $x);
	}
	$response = str_replace("<p>", "", $response);
	$response = str_replace("</p>", "", $response);
	$response = str_replace("rel=\"external nofollow\" >", "rel=\"external nofollow\" >点击下载：", $response);
	$response = str_replace("rel=\"noopener\" target=\"_blank\">", "rel=\"noopener\" target=\"_blank\">点击下载：", $response);
?><li>片名：<?php echo $zname[$key];?></li><?php echo $response;?></div><?php
}
?></ul>
</div></div></div>
<div style="clear: both;"></div>
</section>
<?php
include "footer.php";
