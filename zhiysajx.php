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
	$link1 = "http://ivi.bupt.edu.cn/player.html?channel=" . $_GET["channel"];
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $link1);
	curl_setopt($curl, CURLOPT_HEADER, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);
	curl_close($curl);
	$response = strstr($response, "<div id=\"a1\" style=\"psotion:relative;\">");
	$response = strstr($response, "</body>", true);
	$response = str_replace("/ckplayer/", "http://ivi.bupt.edu.cn/ckplayer/", $response);
	echo $response;
?>  
<?php
} else {
	if ($_GET["url"]) {
		$link1 = "http://ivi.bupt.edu.cn/player.php?url=" . $_GET["url"];
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $link1);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		curl_close($curl);
		$response = strstr($response, "<div id=\"a1\" style=\"psotion:relative;\">");
		$response = strstr($response, "</body>", true);
		$response = str_replace("/ckplayer/", "http://ivi.bupt.edu.cn/ckplayer/", $response);
		echo $response;
	} else {
?>
<base target='_blank'>
<section class="container">
<div class="am-container main" style="padding:0">
<marquee id="madiv" behavior="scroll" direction="left"  align="Middle"  scrollamount="5"  onmouseover="this.stop();" onmouseout="this.start();">                   	<img id="Lba" /><a class="link_list">★公告提示：<strong>部分视频需要缓存一会自动播放</strong>↔视频缓存有问题请刷新页面重新加载观看！<strong>有问题请联系官方★</strong></a></marquee>
 </div>
 <style>
#video{width:100%;height:587px;border:none;}
._list{
	margin: 10px 0;
    padding: 0;
}
._list li{
float: left;
list-style: none;
margin: 0 10px;
}
@media only screen and (max-width:500px){
#video{width:100%;height:300px;}
}
.lipbtn {
    background: #fff;
    padding: 5px 8px;
    font-size: 10px;
    border-radius: 10px;
    margin-bottom: 8px;
    border: 1px solid #FF7562;
    clear: both;
    display: inline-block;
    color: #FF7562;
}
</style>
<?php

ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
$aa = 'http://www.yunyouguo.com/zw/dsp/' .$_GET['v']. '';
$aaa = file_get_contents($aa);
$q1 = '#<li><a href="(.*?)">(.*?)</a></li>#';



preg_match($q1, $aaa, $a2);

$z3 = $a2[1];
$imga = str_replace('\/','/',$z3);
?>

<iframe id="video" src="<?php echo $imga;?>" style="width:100%;border:none;"></iframe>	

</ul>
</div><div style="clear: both;"></div></section>
<?php
	}
}
include "footer.php";
