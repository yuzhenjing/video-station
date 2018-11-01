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

$gaoxiao = $_GET["xiao"];
if (empty($gaoxiao)) {
	$play = $_GET["play"];
	$player = $aik["jiekouyk"] . $play;
} else {
	$play = base64_decode($gaoxiao);
	$player = $aik["jiekouyk"] . $play;
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

<meta name="keywords" content="VIP视频在线看">
<title>在线播放-<?php echo $aik["sitename"];?></title>
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
	background:url(images/jiazai.png) no-repeat;
    background-size: 100%;
}
</style>

<body>
<?php
include "header.php";
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
<p style="background:#000;margin: 0;"><font color="red"><b><marquee scrolldelay="120"></marquee></b></font></p>
<div id="xlu" style="display: block;">
<button onclick="xldata('<?php echo $aik["jiekou1"];?>')">线路一</button>
<button onclick="xldata('<?php echo $aik["jiekou2"];?>')">线路二</button>
<button onclick="xldata('<?php echo $aik["jiekou3"];?>')">线路三</button>
<button onclick="xldata('<?php echo $aik["jiekou4"];?>')">线路四</button>
<button onclick="xldata('<?php echo $aik["jiekou5"];?>')">线路五</button>
</div>
	<script type="text/javascript">
function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
}
</script>

<div style="clear: both;"></div> 
<br><?php echo $aik["tishi_ad"];?>
<div style="clear: both;"></div>
 <?php echo $aik["changyan"];?><div style="clear: both;"></div>

</div>
<script type="text/javascript">
	function bofang(mp4url){
		document.getElementById('videourlgo').href=mp4url;
		if(mp4url.indexOf('iqiyi')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('qq')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('sohu')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('youku')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('tudou')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('le')>=0){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else if(mp4url.indexOf('58')>=0 && mp4url.indexOf('58')<5 ){
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		}else{
			document.getElementById('video').src='<?php echo $aik["jiekou1"];?>'+mp4url;
		};
		//点击之后
		document.getElementById('xuji').style.display='block';
		document.getElementById('video').style.display='none';
		document.getElementById('addid').style.display = 'block';
		document.getElementById('xlu').style.display = 'block';
		function test() {
			document.getElementById('video').style.display='block';
			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);
	};
</script>

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
include "footer.php";
?></body>
</body>
</html>
