<?php
error_reporting(0);
include "./inc/aik.config.php";
$link = "http://www.yy.com/shenqu/clist/" . $_GET["list"];
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
<link rel='stylesheet' id='main-css'  href='css/yy.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='css/play.css' type='text/css' media='all' />
<script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content="<?php echo $timu;?>-美女-热舞-神曲-YY-在线观看">
<title>美女-热舞-神曲-YY-在线观看-<?php echo $aik["sitename"];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php
include "header.php";
if ($_GET["list"]) {
?><section class="container">
<div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">
<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<li  class="theme-hover-color-1  "><a class="theme-a" href="/yy.php?list=t10027.html">热舞</a></li>
<li  class="theme-hover-color-1  "><a class="theme-a" href="/yy.php?list=t10025.html">动听</a></li>
<li  class="theme-hover-color-1  "><a class="theme-a" href="/yy.php?list=t10026.html">说唱</a></li>
<li  class="theme-hover-color-1  "><a class="theme-a" href="/yy.php?list=t10028.html">乐器</a></li> 
<li  class="theme-hover-color-1  "><a class="theme-a" href="/yy.php?list=t10029.html">另类</a></li>             
</dd>
</dl>
</div>
</div>
 <ul class="clearfix">
<?php
	$link0 = file_get_contents($link);
	$szz2 = "#<img  src=\"(.*?)\"   alt=#";
	$szz3 = "#</i><span>(.*?)</span></p>#";
	$szz5 = "#<a href=\"/shenqu/play/id_(.*?).html\" title=#";
	$szz6 = "#<p class=\"title\">(.*?)</p>#";
	$szz7 = "#<p class=\"text\">(.*?)</p>#";
	preg_match_all($szz2, $link0, $sarr2);
	preg_match_all($szz3, $link0, $sarr3);
	preg_match_all($szz5, $link0, $sarr5);
	preg_match_all($szz6, $link0, $sarr6);
	preg_match_all($szz7, $link0, $sarr7);
	$one = $sarr2[1];
	$three = $sarr3[1];
	$five = $sarr5[1];
	$six = $sarr6[1];
	$seven = $sarr7[1];
	foreach ($five as $ni => $cs) {
?>
<li class='g_over'>
			<a  target='_blank' href='yy.php?id=<?php echo $cs;?>'>
			<span class='rjia'>点击：<?php echo $three[$ni];?></span>
			<img src='<?php echo $one[$ni];?>' onload='if (this.width<180) this.height=100; else this.height=180;'>
			<div class='mains'>
			<p class='sptitle'><?php echo $six[$ni];?></p>
			<p style='color: #aaa'><?php echo $seven[$ni];?></p>
			
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
	$response = strstr($response, "<div id=\"page\" class=\"page\">");
	$response = strstr($response, "<script type=\"text/javascript\"", true);
	$response = str_replace("<div id=\"page\" class=\"page\">", "<div id=\"yw0\" class=\"paging\">", $response);
	$response = str_replace("<ul class=\"pagination clf\">", "", $response);
	$response = str_replace("</ul> \r\n    </div>", "", $response);
	$response = str_replace("<li>", "", $response);
	$response = str_replace("</li>", "", $response);
	$response = str_replace("<a href", "<a class=\"item\" href", $response);
	$response = str_replace("/shenqu/clist/", "/yy.php?list=", $response);
	$response = str_replace("上一页", "<", $response);
	$response = str_replace("下一页", ">", $response);
	echo $response;
?>  
</section>
<?php
} else {
	$id = $_GET["id"];
	$play = "http://www.yy.com/shenqu/play/id_" . $id . ".html";
	$player = $aik["jiekouyy"] . $play;
?><div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<div class="asst asst-post_header"><?php echo $aik["bofang_ad"];?></div>
<div class="sptitle"><h1><?php echo $timu;?></h1></div>
<div id="bof">
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">

<div class="bofangdiv">
<iframe id="video" src="<?php echo $player;?>" style="width: 100%; border: none; display: block;"></iframe>
<a style="display:none" id="videourlgo" href="<?php echo $play;?>"></a>
</div>

<div style="clear: both;"></div> 
<br><?php echo $aik["tishi_ad"];?><div style="clear: both;"></div>
 <?php echo $aik["changyan"];?><div style="clear: both;"></div>
</div>
</div>
   
<div class="article-actions clearfix">
 <div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="<?php echo $aik["pcdomain"];?>" class="share-weixin" title="分享到微信"><i class="fa"></i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa"></i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa"></i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa"></i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa"></i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa"></i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa"></i></a>
    </div>   
 <a href="javascript:;" class="action-rewards" etap="rewards">打赏</a>
    </div> 
</div>
    	</div>
<?php
	include "sidebar.php";
?></section>
</div>
<?php
}
include "footer.php";
?></body>
</html>
