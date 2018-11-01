<?php
error_reporting(0);
include "./inc/aik.config.php";
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>百度网盘搜索结果跳转页面-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/tv.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="百度网盘搜索结果跳转页面">
<meta name="description" content="<?php echo $aik["title"];?>-百度网盘搜索结果跳转页面">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>

<body>
<?php
include "header.php";
?>
<section class="container"><div style="height:400px; width:100%;"><p style="font-size:20px; line-height:400px; text-align:center;">【<?php echo $aik["sitename"];?>】提醒您：正在跳转至百度网盘，请稍后。。。</p></div>
<br/>

<?php
if ($_GET["uk"]) {
	$url = "http://pan.here325.com/ln?" . $_SERVER["QUERY_STRING"];
	$link = file_get_contents($url);
	$szz2 = "#<iframe src=\"(.*?)\" frameborder=\"0\" scrolling=\"yes\" width=\"100%;\" style=\"border: 0px;\" height=\"800px;\">#";
	preg_match_all($szz2, $link, $sarr2);
	$one = $sarr2[1];
?><meta http-equiv=refresh content='0; url=<?php echo $one["0"];?>'><?php
} else {
?>你在找啥？<?php
}
?>
</section>
<?php
include "footer.php";
