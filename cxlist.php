<?php
?>﻿<?php
error_reporting(0);
include "./inc/aik.config.php";
include "./inc/init.php";
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
<title>看电影-最新好看的最新电影-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/movie.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="看电影-2017最新好看的最新电影">
<meta name="description" content="<?php echo $aik["title"];?>-看电影-2017最新好看的最新电影">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
include "header.php";
?><section class="container"><div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">
<style>
#noall{
	background-color: #ff6651;
    color: #fff;
}
#pagemax {color: #ff6651;     padding:0px;}
</style>
<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">

<?php
$link = $aik["zhanwai"];
$a = $link . "/index.php/whole/index/1~~%E5%8A%A8%E4%BD%9C~~~~~0~addtime~~1";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $a);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
$response = strstr($response, "<div class=\"header-tag\">");
$response = strstr($response, "</ul>", true);
$response = str_replace("<li class=\"on\">", "", $response);
$response = str_replace("<div class=\"header-tag\">", "", $response);
$response = str_replace("<ul>", "", $response);
$response = str_replace("<li>", "", $response);
$response = str_replace("</li>", "", $response);
$response = str_replace("/index.php/whole/index/", "?cx=", $response);
$response = str_replace("\">", "\"  target=\"_self\">", $response);
echo $response;
?>       


</dd>
</dl>
</div>
</div>
<div class="m-g">
<div class="b-listtab-main">
<div>
<div>
<div class="s-tab-main">
                    <ul class="list g-clear">
<?php
$flid1 = $_GET["cx"];
$flid2 = $link . "/index.php/whole/index/" . $flid1;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $flid2);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
$response = strstr($response, "</h3>\r\n<ul>\r\n");
$response = strstr($response, "</ul>", true);
$response = str_replace("<ul>", "", $response);
$response = str_replace("</h3>", "", $response);
$response = str_replace("高清", "", $response);
$response = str_replace("超清", "", $response);
$response = str_replace("<b></b>", "<b></b><div class='cover g-playicon'>", $response);
$response = str_replace("<span>", "</div><div class='detail'><p class='title g-clear'><span class='s1'>", $response);
$response = str_replace("</span></a>", "</span><span class='s2'></span> </p></div></a>", $response);
$response = str_replace("/attachment", $link . "/attachment", $response);
$response = str_replace("<li class=\"on\">", "", $response);
$response = str_replace("<li>", "<li class='item'>", $response);
$response = str_replace("/index.php/show/index/", "mplay.php?mso=", $response);
echo $response;
include "./data/yhq1.php";
?>        </ul>
                </div>


    </div>
</div> 

 <div class="paging">
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $flid2);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
$response = strstr($response, "<div class=\"page-list\">");
$response = strstr($response, "</ul>", true);
$response = str_replace("<li", "<a", $response);
$response = str_replace("</li>", "</a>", $response);
$response = str_replace("/index.php/whole/index/", "?cx=", $response);
echo $response;
?>       
</div>
</div></div>
<div class="asst asst-list-footer"><?php echo $aik["movie_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
