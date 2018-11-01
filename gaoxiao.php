<?php
include "./inc/aik.config.php";
include "./inc/init.php";
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title>搞笑列表-<?php echo $aik["title"];?></title>
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/gaoxiao.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="搞笑排行">
<meta name="description" content="<?php echo $aik["title"];?>-搞笑排行">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
include "header.php";
?><section class="container"><div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">
<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<a href="?m=c_94_g__d_1_s_1_p_1">全部</a>
<a href="?m=c_94_g_235_d_1_s_1_p_1">恶搞短片</a>
<a href="?m=c_94_g_236_d_1_s_1_p_1">搞笑自拍</a>
 <a href="?m=c_94_g_3072_d_1_s_1_p_1">搞笑达人</a>
</dd>
</dl>
</div>
</div>
<div class="m-g">
<div class="b-listtab-main">
<div class="box-bd">
<ul class="mod-pic">	
<?php
if (empty($_GET['m'])) {
	$html = "http://list.youku.com/category/video/c_94_d_1_s_1_p_1";
} else {
	$html = "http://list.youku.com/category/video/" . $_GET["m"];
}
$rurl = file_get_contents($html);
$vname = "#<div class=\"yk-col4 \"><div class=\"yk-pack p-list\" taglog=\"\"><div class=\"p-thumb\"><a href=\"(.*?)\" target=\"_blank\" title=\"(.*?)\"></a><i class=\"bg\"></i><img class=\"quic\"  src=\"(.*?)\" alt=\"(.*?)\"/></div><ul class=\"p-info pos-bottom\"><li class=\"status\"><span class=\"p-time hover-hide\"><i class=\"ibg\"></i><span>(.*?)</span></span></li></ul><ul class=\"info-list\"><li class=\"title\"><a href=\"(.*?)\" target=\"_blank\" title=\"(.*?)\">(.*?)</a></li><li class=\" \">(.*?)</li></ul></div></div>#";
preg_match_all($vname, $rurl, $xarr);
$xbflist = $xarr[1];
$xname = $xarr[2];
$ximg = $xarr[3];
$shijian = $xarr[5];
foreach ($xname as $key => $xvau) {
	$do = $xbflist[$key];
	$do1 = base64_encode($do);
	$cc = "./splay.php?xiao=";
	$ccb = $cc . $do1;
?>
	<li>							
<a class='hele-text' href='<?php echo $cc;?><?php echo $do1;?>' target='_blank'><?php echo $xname[$key];?></a>
<a href='<?php echo $cc;?><?php echo $do1;?>' target='_blank'><img src='<?php echo $ximg[$key];?>' border='0' width='120' height='120' alt='<?php echo $xname[$key];?>'></a><span><?php echo $shijian[$key];?></span>								
								</li>
<?php
}
?>  </ul>
      </div>


    </div>
</div> <div class="paging">
<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $html);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
$response = strstr($response, "<div class=\"yk-pager\">");
$response = strstr($response, "<div class=\"vault-banner", true);
$response = str_replace("<ul class=\"yk-pages\">", "", $response);
$response = str_replace("</ul>", "", $response);
$response = str_replace("//list.youku.com/category/video/", "gaoxiao.php?m=", $response);
$response = str_replace("<li>", "", $response);
$response = str_replace("</li>", "", $response);
$response = str_replace("<li", "<a", $response);
$response = str_replace("<a class=\"next\" title=\"下一页\">", "", $response);
echo $response;
?></div>

<div class="asst asst-list-footer"><?php echo $aik["movie_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
