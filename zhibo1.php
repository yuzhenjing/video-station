<?php

error_reporting(0);
include "./inc/aik.config.php";
$zhan = $aik["zhanwai"];
$url = $_SERVER["HTTP_HOST"];
$jiejie = substr($url, 0 - 7, 7);
$jia0 = base64_encode($jiejie);
$jia = md5($jia0);
$b = strpos($jia, "a");
$c = strpos($jia, "z");
$ye = substr($jia, $b, $b - $c - 1);
$jia1 = md5($jia);
$d = strpos($jia1, "s");
$e = strpos($jia1, "0");
$ye1 = substr($jia1, $d, $d - $e - 3);
$jia3 = base64_encode($ye1);
$jia2 = md5($jia3);
$f = strpos($jia2, "W");
$g = strpos($jia2, "5");
$ye2 = substr($jia2, $f, $f - $g - 5);
$jiami0 = $ye1 . $ye2 . $ye;
$jiami = base64_encode($jiami0);

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>电视直播-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/seacher.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $aik["title"];?>-电视直播">
<meta name="description" content="<?php echo $aik["title"];?>-电视直播">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>
#a1{
    padding: 0;
    margin: 0;
    width: 100%;
    height:800px;
    psotion: relative;
}
.mvul{width: 100%;margin: 0 auto;padding: 0;}
.mvul li{width: 48%;list-style: none;border: 1px solid #eee;padding: 9px;margin: 8px 0;border-radius: 2px;float:left; margin-right:2%;}
.mvul li:hover{background:#ff6651; color:#fff;}
</style>
</head>
<body>
<?php
include "header.php";
if ($_GET["channel"]) {
	$link1 = "http://tv.bbbbbb.me/player.php?channel=" . $_GET["channel"];
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $link1);
	curl_setopt($curl, CURLOPT_HEADER, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);
	curl_close($curl);
	$response = strstr($response, "<div id=\"a1\" style=\"psotion:relative;\">");
	$response = strstr($response, "</body>", true);
	$response = str_replace("/ckplayer/", "http://tv.bbbbbb.me/ckplayer/", $response);
	echo $response;
?>  
<?php
} else {
	if ($_GET["url"]) {
		$link1 = "http://tv.bbbbbb.me/player.php?url=" . $_GET["url"];
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $link1);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		curl_close($curl);
		$response = strstr($response, "<div id=\"a1\" style=\"psotion:relative;\">");
		$response = strstr($response, "</body>", true);
		$response = str_replace("/ckplayer/", "http://tv.bbbbbb.me/ckplayer/", $response);
		echo $response;
	} else {
?>
<base target='_blank'>
<section class="container">
<div class="am-container main" style="padding:0">       
<?php
		$sourl = "http://tv.bbbbbb.me/index.php";
		$info = file_get_contents($sourl);
		$vname = "#<p>(.*?)</p>#";
		$vimg = "#<a class=\"icon1\" href=\"/player.php?(.*?)target=\"_blank\"#";
		$array = array();
		preg_match_all($vname, $info, $namearr);
		preg_match_all($vimg, $info, $imgarr);
		preg_match_all($fname, $info, $fnamearr);
		$zname = $namearr[1];
		$link = $imgarr[1];
		$fname = $namearr[1];
?><strong class="single-strong">电视直播</strong><ul class="mvul"><?php
		foreach ($fname as $key => $video) {
?><a href="<?php echo $link[$key];?>><li><?php echo $zname[$key];?></li></a><?php
		}
?></ul>
</div><div style="clear: both;"></div></section>
<?php
	}
}
include "footer.php";
