<?php
error_reporting(0);
include "./inc/aik.config.php";
$idd = $_GET["vod"];
$a = $aik["zhanwai5"];
$link0 = $a . "/?m=vod-detail-id-" . $idd . ".html";
$tvinfo = file_get_contents($link0);
$bofang = "#<li><input type=\"checkbox\" name=\"copy_sel\" value=\"(.*?)\" checked=\"\" />(.*?)</li>#";
$jianjie = "#<div class=\"vodplayinfo\">(.*?)</div> #";
$biaoti = "#<h2>(.*?)</h2>#";
preg_match_all($bofang, $tvinfo, $bfarr);
preg_match_all($jianjie, $tvinfo, $jjarr);
preg_match_all($biaoti, $tvinfo, $btarr);
$link = $bfarr[1];
$jishu = $bfarr[2];
$jian = $jjarr[1][0];
$timu = $btarr[1][0];
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

<meta name="keywords" content="资源网电影播放页-<?php echo $aik["sitename"];?>">
<title>正在播放-<?php echo $timu;?>-<?php echo $aik["sitename"];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<style>
.w-newfigure{list-style:none; float:left;}
.list{ margin-left:-40px;}
</style>
<body class="page-template page-template-pages page-template-posts-play page-template-pagesposts-play-php page page-id-16">
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
<img id="addid" src="images/1280jiazai.png" style="display: none;width:100%;border: 2px solid #ff6651">
<iframe id="video" src="jiazai.php" style="width:100%;border:none"></iframe>
<a style="display:none" id="videourlgo" href=""></a>
</div>
<div id="xlu">
</div>
	<script type="text/javascript">
function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
}
</script>

<div style="clear: both;"></div> 
<div id="xuji"></div>
<?php echo $aik["tishi_ad"];?><div class="video-list view-font">
<script type="text/javascript">
	var al = $('.num-tab-main a');
	al.attr('class','am-btn am-btn-default lipbtn');
	var ji= new Array();
	var btnji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		btnji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
	};
	 if($("div").hasClass("js-tab-main")){ 
	var taba = $('.js-tab-main a');
	for(var g=0;g<taba.length;g++){
		taba.eq(g).attr('onclick','tabqh(\''+[g]+'\')');
	};
	var numtba = $('.num-tab .num-tab-main');
	for(var g=0;g<numtba.length;g++){
		numtba.eq(g).attr('id','num'+[g]);
	};
	document.getElementById('num1').style.display = 'block';
	function tabqh(ylen){
		var idylen = parseInt(ylen);
		var tabalen = $('.js-tab-main a').length;
		for (var xcyh=0;xcyh<tabalen;xcyh++) {
			document.getElementById('num'+xcyh).style.display = 'none';
		}
		document.getElementById('num'+idylen).style.display = 'block';
	}
	 }
</script>


<div class="dianshijua" id="dianshijuid">
<h3 class="single-strong">无需安装任何插件<font color="#ff6651">【点击选择下面的剧集或片名才会播放哦！部分视频需加载一会才可以观看】</font></h3> 
<div class="top-list-ji">
    <h2 class="title g-clear"><em class="a-bigsite a-bigsite-leshi"></em></h2>
    <div class="ji-tab-content js-tab-content" style="opacity:1;">
	
<?php
foreach ($link as $key => $link0) {
	$jiji = strtok($jishu[$key], "\$");
	$link1 = substr(strrchr($jishu[$key], "\$"), 1);
	$a = substr($link1, 0 - 4, 6);
	if ($a == "m3u8") {
		echo "";
	} else {
?><a href='<?php echo $link1;?>' target='ajax'><?php echo $jiji;?></a><?php
	}
}
?></ul></div>
</div>          
</div>
 </div>
<div style="clear: both;"></div>
<h3 class="single-strong">BT磁力链接</h3> 
<a  href="cili.php?sousuo=<?php echo $timu;?>" class="am-btn am-btn-default lipbtn">点击查看</a>
<p class="jianjie"><h3 class="single-strong">简介</h3><p class="item-desc js-close-wrap" ><span style="font-family:Georgia, 'Times New Roman', Times, serif"><?php echo $jian;?></span></p>
<div style="clear: both;"></div>
<!--PC和WAP自适应版-->
<?php echo $aik["changyan"];?><div style="clear: both;"></div>
</div>
<script type="text/javascript">
	var al = $('.dianshijua a');
	al.attr('class','am-btn am-btn-default lipbtn');
	var ji= new Array();
	var btnji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		btnji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
	};
</script>
<script type="text/javascript">
	function bofang(mp4url,jiid){
		var tishi = ('正在为您播放《<?php echo $timu;?>》！');
				document.getElementById('videourlgo').href=mp4url;
		document.getElementById('xuji').innerHTML = tishi;
		if(mp4url.indexOf('iqiyi')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('qq')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('sohu')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('youku')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('tudou')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('le')>=0){
			document.getElementById('video').src=''+mp4url;
		}else if(mp4url.indexOf('58')>=0 && mp4url.indexOf('58')<5 ){
			document.getElementById('video').src=''+mp4url;
		}else{
			document.getElementById('video').src=' '+mp4url;
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
	<script src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
         

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
</html>
