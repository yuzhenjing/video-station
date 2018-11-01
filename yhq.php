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

if ($_GET["page"]) {
	$page = $_GET["page"];
} else {
	$page = 1;
}
if ($_GET["sousuo"]) {
	$link = "http://demo.dataoke.com/index.php?r=l&kw=" . $_GET["sousuo"] . "&page=" . $page;
} else {
	if ($_GET["r"] != "l") {
		$link = "http://demo.dataoke.com/index.php?r=nine&cid=" . $_GET["cid"] . "&u=1&page=" . $page;
	} else {
		$link = "http://demo.dataoke.com/index.php?r=l&cid=" . $_GET["cid"] . "&u=" . $_GET["u"] . "&page=" . $page;
	}
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<link rel='stylesheet' id='main-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/yhq.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/index.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $timu;?>-优惠券免费领！不领优惠券就网购！你吃大亏了">
<title>优惠券免费领！不领优惠券就网购！你吃大亏了-<?php echo $aik["sitename"];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<script>
if (top.location != location) {
document.write("<style>.header,.footer,#more,.sidebar,#homeso img,.action-rewards,.article-wechats{display: none!important}.content{width:100%}::-webkit-scrollbar-thumb{background-color:#fff;height:50px;outline-offset:-2px;outline:2px solid #fff;-webkit-border-radius:4px;border:2px solid #fff}::-webkit-scrollbar-thumb:hover{background-color:#FB4446;height:50px;-webkit-border-radius:4px}::-webkit-scrollbar{width:8px;height:18px}::-webkit-scrollbar-track-piece{background-color:#fff;-webkit-border-radius:0}body,.single-post .content{padding-top: 0px;}</style>");
}
</script>
<body class="page-template page-template-pages page-template-posts-taoke page-template-pagesposts-taoke-php page page-id-65">
<?php
include "header.php";
?><section class="container">
<?php
if (empty($_GET['sousuo']) && empty($_GET['r'])) {
?><div id="homeso">
<form method="get" id="homeso" style="text-align: center;float: none" action="" >
<img src="images/yhq.png"><br/><br/>
<input tabindex="2" class="homesoin" id="sos" name="sousuo" type="text" placeholder="输入你要搜索的宝贝名称" value="">
<input type="hidden" name="qiehuan" value="1" />
<button id="button" tabindex="3" class="homesobtn" type="submit">优惠券搜索</button>
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
</div><div class="single-strong">精品推荐<span class="chak"><a href="../yhq.php?r=l&u=1">查看更多</a></span></div>
<div class="b-listtab-main">
<div class="s-tab-main">
<ul class="list g-clear">
<?php
	include "./data/yhq.php";
?></ul>
</div>
</div>
<?php
} else {
?><div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">
<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">

<?php
	if ($_GET["sousuo"]) {
?>您要购买的【<?php echo $_GET["sousuo"];?>】为您查找到以下宝贝：<?php
	} else {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $link);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($curl);
		curl_close($curl);
		if ($_GET["r"] != "l") {
			$response = strstr($response, "<li  class=\"theme-hover-color-1");
			$response = strstr($response, "<div class=\"goods-list main-container\">", true);
		} else {
			$response = strstr($response, "<li class=\"theme-hover-color-1");
			$response = strstr($response, "<div class=\"cat-list sale-type clearfix\">", true);
		}
		$response = str_replace("</ul>", "", $response);
		$response = str_replace("index", "yhq", $response);
		$response = str_replace("</div>", "", $response);
		echo $response;
	}
?>                          
</dd>
</dl>
</div>
</div>
 <ul class="clearfix">
<?php
	if ($_GET["sousuo"]) {
		$link0 = file_get_contents($link);
		$szz2 = "#<img src=\"(.*?)jpg\" alt=\"\">#";
		$szz3 = "#</i>(.*?)</b>券后价</span>#";
		$szz4 = "#<i>￥</i>(.*?)</b></span>#";
		$szz5 = "#<a data-gid=\"(.*?)\" target=\"_blank\" href=\"(.*?)\">#";
		$szz6 = "#                                (.*?)                            </a>#";
		$szz7 = "#<span class=\"old-price\"><i>￥</i>(.*?)</span>#";
		preg_match_all($szz1, $link0, $sarr1);
		preg_match_all($szz2, $link0, $sarr2);
		preg_match_all($szz3, $link0, $sarr3);
		preg_match_all($szz4, $link0, $sarr4);
		preg_match_all($szz5, $link0, $sarr5);
		preg_match_all($szz6, $link0, $sarr6);
		preg_match_all($szz7, $link0, $sarr7);
		$one = $sarr2[1];
		$two = $sarr3[1];
		$three = $sarr4[1];
		$four = $sarr5[2];
		$five = $sarr5[1];
		$six = $sarr6[1];
		$seven = $sarr7[1];
	} else {
		if ($_GET["r"] != "l") {
			$link0 = file_get_contents($link);
			$szz2 = "#<img src=\"(.*?)jpg\" alt=\"\">#";
			$szz3 = "#</i>(.*?)</b>券后价</span>#";
			$szz4 = "#<i>￥</i>(.*?)</b></span>#";
			$szz5 = "#<a target=\"_blank\" data-gid=\"(.*?)\" href=\"(.*?)\">#";
			$szz6 = "#                            (.*?)                        </a>#";
			$szz7 = "#<span class=\"old-price\"><i>￥</i>(.*?)</span>#";
			preg_match_all($szz1, $link0, $sarr1);
			preg_match_all($szz2, $link0, $sarr2);
			preg_match_all($szz3, $link0, $sarr3);
			preg_match_all($szz4, $link0, $sarr4);
			preg_match_all($szz5, $link0, $sarr5);
			preg_match_all($szz6, $link0, $sarr6);
			preg_match_all($szz7, $link0, $sarr7);
			$one = $sarr2[1];
			$two = $sarr3[1];
			$three = $sarr4[1];
			$four = $sarr5[2];
			$five = $sarr5[1];
			$six = $sarr6[1];
			$seven = $sarr7[1];
		} else {
			$link0 = file_get_contents($link);
			$szz2 = "#<img src=\"(.*?)jpg\" alt=\"\">#";
			$szz3 = "#</i>(.*?)</b>券后价</span>#";
			$szz4 = "#<i>￥</i>(.*?)</b></span>#";
			$szz5 = "#<a target=\"_blank\" href=\"(.*?)\" data-gid=\"(.*?)\">#";
			$szz6 = "#                                (.*?)                            </a>#";
			$szz7 = "#<span class=\"old-price\"><i>￥</i>(.*?)</span>#";
			preg_match_all($szz1, $link0, $sarr1);
			preg_match_all($szz2, $link0, $sarr2);
			preg_match_all($szz3, $link0, $sarr3);
			preg_match_all($szz4, $link0, $sarr4);
			preg_match_all($szz5, $link0, $sarr5);
			preg_match_all($szz6, $link0, $sarr6);
			preg_match_all($szz7, $link0, $sarr7);
			$one = $sarr2[1];
			$two = $sarr3[1];
			$three = $sarr4[1];
			$four = $sarr5[1];
			$five = $sarr5[2];
			$six = $sarr6[1];
			$seven = $sarr7[1];
		}
	}
	foreach ($five as $ni => $cs) {
		$link1 = $aik["dtk_ad"] . "/index.php?r=l/d&id=" . $five[$ni] . "&nav_wrap=nine&u=" . $aik["dtk_id"];
?>
<li class='g_over'>
			<a  target='_blank' href='<?php echo $link1;?>'>
			<span class='rjia'>券￥<?php echo $three[$ni];?></span>
			<img src='<?php echo $one[$ni];?>jpg'>
			<div class='mains'>
			<p style='margin: 3px'><span class='ljia'>￥<?php echo $two[$ni];?><i class='ljiai'>券后价</i></span> <i class='old-price'>原价￥<?php echo $seven[$ni];?></i> </p>
			<p class='sptitle'><?php echo $six[$ni];?></p>
			</div>
			</a>
			</li>	<?php
	}
?>  

		</ul>
<?php
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $link);
	curl_setopt($curl, CURLOPT_HEADER, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($curl);
	curl_close($curl);
	$response = strstr($response, "<div id=\"yw0\" class=\"pager\">");
	$response = strstr($response, "</div>", true);
	$response = str_replace("pager", "paging", $response);
	$response = str_replace("index", "yhq", $response);
	$response = str_replace("kw", "sousuo", $response);
	$response = str_replace("cur", "current", $response);
	$response = str_replace("上一页", "<", $response);
	$response = str_replace("下一页", ">", $response);
	echo $response;
?>  
<?php
}
?></section>
<?php
include "footer.php";
?></body>
</html>
