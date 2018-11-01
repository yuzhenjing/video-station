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

if ($_GET["url"]) {
	$link = base64_decode($_GET["url"]);
	$idd = $_GET["id"];
	$timu = $_GET["name"];
	if ($idd == 2) {
		$fang = $link;
	} else {
		if ($idd == 1) {
			$play = $link;
			$fang = $aik["jiekou1"] . $play;
		} else {
			$mso = substr(strrchr($link, "="), 1);
			$link = file_get_contents($zhan . "/index.php/show/index/" . $mso);

			$name = "#<h3>&nbsp;&nbsp;(.*?)</h3>#";
			$jishu = "#<li><a id=\"(.*?)\" href=\"/index.php/play/index/(.*?)\">(.*?)</a></li>\r\n#";
			$bobo = "#<iframe src=\"(.*?)\" marginwidth=\"0\" marginheight=\"0\" border=\"0\" scrolling=\"no\" frameborder=\"0\" topmargin=\"0\" width=\"100%\" height=\"100%\"></iframe>#";
			preg_match_all($name, $link, $nmarr);
			preg_match_all($jishu, $link, $jjarr);
			preg_match_all($bobo, $link, $bfarr);
			$timu = $nmarr[1][0];
			$iidd = $jjarr[1];
			$ljie = $jjarr[2];
			$jjshu = $jjarr[3];
			$bofang = $bfarr[1][0];
			$b = strpos($bofang, "/y");
			$c = strpos($bofang, "e/");
			$ye = substr($bofang, $b + 2, $c - 1);
			if ($ye == "unparse") {
				$fang = $zhan . $bofang;
			} else {
				$fang = $bofang;
			}
		}
	}
} else {
	$mso = $_GET["mso"];
	$link = file_get_contents($zhan . "/index.php/play/index/" . $mso);
	$name = "#<h3>&nbsp;&nbsp;(.*?)</h3>#";
	$jishu = "#<li><a id=\"(.*?)\" href=\"/index.php/play/index/(.*?)\">(.*?)</a></li>\r\n#";
	$bobo = "#<iframe src=\"(.*?)\" marginwidth=\"0\" marginheight=\"0\" border=\"0\" scrolling=\"no\" frameborder=\"0\" topmargin=\"0\" width=\"100%\" height=\"100%\"></iframe>#";
	preg_match_all($name, $link, $nmarr);
	preg_match_all($jishu, $link, $jjarr);
	preg_match_all($bobo, $link, $bfarr);
	$timu = $nmarr[1][0];
	$iidd = $jjarr[1];
	$ljie = $jjarr[2];
	$jjshu = $jjarr[3];
	$bofang = $bfarr[1][0];
	$b = strpos($bofang, "/y");
	$c = strpos($bofang, "e/");
	$ye = substr($bofang, $b + 2, $c - 1);
	if ($ye == "unparse") {
		$fang = $zhan . $bofang;
	} else {
		$fang = $bofang;
	}
}
$pizza = $aik["qq_name"];
$pieces = explode("#", $pizza);
if (!empty($pizza) && in_array($timu, $pieces)) {
?><meta http-equiv=refresh content='0; url=404.php'><?php
	exit(0);
} else {
	echo "";
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
<link rel='stylesheet' id='main-css'  href='css/play.css' type='text/css' media='all' />
<script type='text/javascript' src='//apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>

<meta name="keywords" content="<?php echo $timu;?>-播放页">
<title><?php echo $timu;?>-正在播放-<?php echo $aik["sitename"];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>

<style>
  .single-strong {color: #606060;font-size: 14px;font-weight: 700;border-left: 3px #ff5c5c solid;padding-left: 10px;display: block;line-height: 32px;margin: 10px 0;}
.html5play iframe{
	    height: 600px;
}

@media only screen and (max-width:420px){
.html5play iframe{
	    height: 260px;
}
}
.html5play iframe{
	background:url(images/1280jiazai.png) no-repeat;
    background-size: 100%;
}
</style>

<body class="page-template page-template-pages page-template-posts-play page-template-pagesposts-play-php page page-id-16">
<?php
include "header.php";
?><div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<div class="asst asst-post_header"><?php echo $aik["bofang_ad"];?></div>
<div class="sptitle"><h1>
<?php echo $timu;?></h1></div>
<div id="bof">
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">
<div class="html5play">
<iframe src="<?php echo $fang;?>" marginwidth="0" marginheight="0" border="0" scrolling="no" frameborder="0" topmargin="0" width="100%" height="600px"></iframe>
</div><?php echo $aik["tishi_ad"];?><div class="dianshijua" id="dianshijuid">
<?php
if ($_GET["cx"]) {
	echo "";
} else {
?><h3 class='single-strong'>无需安装任何插件<font color='#ff6651'><?php echo $aik["dbts"];?></font></h3><?php
}
?><div class="top-list-ji">
    <h2 class="title g-clear"><em class="a-bigsite a-bigsite-leshi"></em></h2>
    <div class="ji-tab-content js-tab-content" style="opacity:1;">
<?php
foreach ($iidd as $key => $iddd) {
	$lianjie = "mplay.php?mso=" . $ljie[$key];
?><a class='am-btn am-btn-default lipbtn' href='<?php echo $lianjie;?>'><?php echo $jjshu[$key];?></a><?php
}
?></div>
</div>          
</div>
<div style="clear: both;"></div> 
<h3 class="single-strong">BT磁力链接</h3> 
<a  href="btdown.php?bt=<?php echo $timu;?>" class="am-btn am-btn-default lipbtn">点击查看</a>
<?php echo $jjjie;?><div style="clear: both;"></div> 
</div>
</div>
<!--PC和WAP自适应版-->
<?php echo $aik["changyan"];?><div class="article-actions clearfix">
 <div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="<?php echo $aik["pcdomain"];?>" class="share-weixin" title="分享到微信"><i class="fa"></i></a><a etap="share" data-share="qzone" class="share-qzone" title="分享到QQ空间"><i class="fa"></i></a><a etap="share" data-share="weibo" class="share-tsina" title="分享到新浪微博"><i class="fa"></i></a><a etap="share" data-share="tqq" class="share-tqq" title="分享到腾讯微博"><i class="fa"></i></a><a etap="share" data-share="qq" class="share-sqq" title="分享到QQ好友"><i class="fa"></i></a><a etap="share" data-share="renren" class="share-renren" title="分享到人人网"><i class="fa"></i></a><a etap="share" data-share="douban" class="share-douban" title="分享到豆瓣网"><i class="fa"></i></a>
    </div>   
 <a href="javascript:;" class="action-rewards" etap="rewards">打赏</a>
    </div> 
</div>
<script type='text/javascript' src='js/view-history.js'></script>        
<script>
var store = $.AMUI.store;var lishi = $('#xuji1').html();store.set('site','<?php echo $timu;?>');      	 store.set('siteurl','<?php echo $_SERVER["REQUEST_URI"];?>');store.set('li',viewji)</script>
<script type="text/javascript">
 var temp = {type: "video", name: "<?php echo $timu;?>",url: "<?php echo $_SERVER["REQUEST_URI"];?>"};			
var histemp = store.get('history')? store.get('history'): [];
       for(var i=0; i<histemp.length; i++) {
            if(histemp[i].type == "video" && histemp[i].url == "<?php echo $_SERVER["REQUEST_URI"];?>") {
                histemp.splice(i, 1); 
                break;
            }
        }
histemp.unshift(temp); 
store.set('history', histemp);
//alert(JSON.stringify(store.get("history")));
var doo = store.get("history");
//$("#sc").html('"+store.get('history')+"');
function qc () {
	store.clear();
		
}
		</script>
    	</div>
<?php
include "sidebar.php";
?></section>
</div>
<?php
include "footer.php";
?></body>
</html>
