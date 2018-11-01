<?php

//decode by 微淘金/
error_reporting(0);
include "./inc/aik.config.php";
$wd = $_GET["sousuo"];
$link = $aik["cilis"];
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
<title><?php echo $wd;?>磁力搜索-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/cili.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $wd;?>-磁力搜索-<?php echo $aik["title"];?>">
<meta name="description" content="<?php echo $wd;?>-磁力搜索-<?php echo $aik["title"];?>">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>
.mlist li {list-style-type:none;
border-bottom:1px dashed #666;}
.flag_pg{ margin:10px;border:1px solid #666; padding:5px 15px; }
.current{ margin:10px;}
.cili{color:#ff5c5c;}
.flist li{color:#8d8d8d;}
</style>
</head>
<body>
<?php
include "header.php";
?><section class="container">
<?php
if ($_GET["sousuo"]) {
?><strong class="single-strong"></h1>【<?php echo $wd;?>】</h1>的磁力搜索结果：</strong><?php
	$url = $link . "search/" . $_GET["sousuo"] . "_ctime_" . $_GET["qiehuan"] . ".html";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
	curl_setopt($ch, CURLOPT_REFERER, "-");
	$response = curl_exec($ch);
	curl_close($ch);
	if ($x = strpos($response, "<ul class=\"mlist\">")) {
		$response = substr($response, $x);
	}
	if ($x = strpos($response, "<div id=\"footer\">")) {
		$response = substr($response, 0, $x);
	}
	$response = str_replace("/search/", "cili.php?sousuo=", $response);
	$response = str_replace("_ctime_", "&qiehuan=", $response);
	$response = str_replace(".html", "", $response);
	$response = str_replace("href=\"/", "href=\"cili.php?main=", $response);
	echo $response;
} else {
	if ($_GET["main"]) {
		$url = $link . $_GET["main"] . ".html";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
		curl_setopt($ch, CURLOPT_REFERER, "-");
		$response = curl_exec($ch);
		curl_close($ch);
		if ($x = strpos($response, "<div class=\"main\">")) {
			$response = substr($response, $x);
		}
		if ($x = strpos($response, "<div class=\"rightadbox\" style=\"\">")) {
			$response = substr($response, 0, $x);
		}
		$response = str_replace("<a href", "<a class=\"cili\" href", $response);
		$response = str_replace("<a rel=\"nofollow\"", "<a class=\"cili\" rel=\"nofollow\"\" href", $response);
		print_r($response);
	} else {
?><div id="homeso">
<form method="get" id="homeso" style="text-align: center;float: none" action="" >
<img src="images/cili.png"><br/><br/>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="输入你要搜索的资源名称" value="">
<input type="hidden" name="qiehuan" value="1" />
<button id="button" tabindex="3" class="homesobtn" type="submit">磁力搜索</button>
</form>
<script>
	var a = document.getElementById('sos');
	var btn = document.getElementById('button');
btn.onclick = function(){
if(!a.value){
	alert('不能为空');
	return false;    
	 }
}
</script>
</div><?php
	}
}
?>
</section>
<?php
include "footer.php";
