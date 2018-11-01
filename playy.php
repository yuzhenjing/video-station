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

$link = $_GET["play"];
$url_array = explode("/", $link);
$player = "http://www.360kan.com" . $link;
$tvinfo = file_get_contents($player);
$tvzz = "#<div class=\"num-tab-main g-clear\\s*js-tab\"\\s*(style=\"display:none;\")?>[\\s\\S]+?<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">[\\s\\S]+?</div>#";
$tvzz1 = "#<a data-num=\"(.*?)\" data-daochu=\"to=(.*?)\" href=\"(.*?)\">#";
$bflist = "#<a data-daochu=\"to=(.*?)\" class=\"btn js-site ea-site ea-site-(.*?)\" href=\"(.*?)\">(.*?)</a>#";
$jianjie = "#<p class=\"item-desc js-open-wrap\">(.*?)</p>#";
$biaoti = "#<h1>(.*?)</h1>#";
$zytimu = "#<ul class=\"list w-newfigure-list g-clear js-year-page\" style=\"display:block;\">\r\n                (.*?)\r\n            </ul>#";
$bofang = "#<a data-daochu=\"(.*?)\" class=\"btn js-site ea-site (.*?)\" href=\"(.*?)\">(.*?)</a>\r\n#";
preg_match_all($jianjie, $tvinfo, $jjarr);
preg_match_all($tvzz, $tvinfo, $tvarr);
preg_match_all($pan, $tvinfo, $ptvarr);
preg_match_all($pan1, $tvinfo, $ptvarr1);
preg_match_all($bflist, $tvinfo, $tvlist);
preg_match_all($biaoti, $tvinfo, $btarr);
preg_match_all($zytimu, $tvinfo, $zybtarr);
preg_match_all($bofang, $tvinfo, $bfarr);
$mvsrc = $tvlist[3];
$bflu = $tvlist[1];
$bfyuan = $tvlist[4];
$jian = $jjarr[1][0];
$timu = $btarr[1][0];
$zybiaoti = $zybtarr[1][0];
$mvsrc1 = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=", "", $mvsrc);
$zcf = implode($glue, $tvarr[0]);
preg_match_all($tvzz1, $zcf, $tvarr1);
$jishu = $tvarr1[1];
$b = $tvarr1[3];
$much = 1;
if ($url_array[1] == "tv") {
	$url = $player;
	$array = explode("/", $url);
	$dsjid = $array[4];
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
	curl_setopt($ch, CURLOPT_REFERER, "-");
	$html = curl_exec($ch);
	curl_close($ch);
	$str = $html;
}
?>
<?php
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
<script>
	
$(function(){
		
			var $li = $('#mytab li');
			var $ul = $('#mycontent ul');
						
			$li.click(function(){
				var $this = $(this);
				var $t = $this.index();
				$li.removeClass();
				$this.addClass('current');
				$ul.css('display','none');
				$ul.eq($t).css('display','block');
			})
		
});

</script>
<meta name="keywords" content="<?php echo $timu;?>-播放页">
<title>正在播放-<?php echo $timu;?>-<?php echo $aik["sitename"];?></title>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>  <style>
* { padding:0px;}					
#myouter {width:100%;}
#mytab { height: 40px; width:100%; }
#mytab  li { list-style-type:none; width:13%; float:left; text-align:center;}
#mytab li {float:left;height:40px;	cursor:pointer;	line-height:40px; font-size:0.8em;font-weight:bold;border:1px solid #ff6651;-moz-border-radius: 15px; 
-webkit-border-radius: 15px; 
border-radius:15px  }
#mytab li.current { color:#fff; background:#ff6651; font-weight:bold; border:2px solid #ff6651; -moz-border-radius: 15px; 
-webkit-border-radius: 15px; 
border-radius:15px  }
#mycontent { height: auto; }
#mycontent ul {line-height:25px;display:none;}						
.w-newfigure{list-style:none; float:left;}
</style>
<body>
<?php
include "header.php";
?><div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content"><!--删掉可全屏-->
<div class="asst asst-post_header"><?php echo $aik["bofang_ad"];?></div>
<div class="sptitle"><h1><?php echo $timu;?></h1></div>
<div id="bof">
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">

<div class="bofangdiv">
<img id="addid" src="images/1280jiazai.png" style="display: none;width:100%;border: 2px solid #ff6651">
<?php
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');

$arta= file_get_contents('http://www.yy.com/shenqu/show/info.do?resid=' .$_GET['post']. '');

$uu1 = '#"resurl":"(.*?)"#';

preg_match_all($uu1,$arta, $lj);

$bf = $lj[1];

foreach ($bf as $gg => $qz1){
?>

<iframe id="video" allowFullScreen=ture src="http://m.153cn.com/zw/zq/jx/index.php?id=<?php echo $qz1;?>" style="width:100%;border:none"></iframe>
<?php
}
?>	
	

</div>
<div id="xlu">
<button onclick="xldata('<?php echo $aik["jiekou1"];?>')">线路一</button>
<button onclick="xldata('<?php echo $aik["jiekou2"];?>')">线路二</button>
<button onclick="xldata('<?php echo $aik["jiekou3"];?>')">线路三</button>
<button onclick="xldata('<?php echo $aik["jiekou4"];?>')">线路四</button>
<button onclick="xldata('<?php echo $aik["jiekou5"];?>')">线路五</button>
<button onclick="xldata('<?php echo $aik["jiekou6"];?>')">线路六</button>
<button onclick="xldata('<?php echo $aik["jiekou7"];?>')">线路七</button>
<button onclick="xldata('<?php echo $aik["jiekou8"];?>')">线路八</button>
<button onclick="xldata('<?php echo $aik["jiekou9"];?>')">线路九</button>
<button onclick="xldata('<?php echo $aik["jiekou10"];?>')">线路十</button>
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
<?php echo $aik["tishi_ad"];?><div id="fade" class="black_overlay"> 
</div> 
<div class="video-list view-font">
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
<h3 class="single-strong">无需安装任何插件<font color="#ff6651"><?php echo $aik["dbts"];?></font></h3> 
<div class="top-list-ji">
    <h2 class="title g-clear"><em class="a-bigsite a-bigsite-leshi"></em></h2>
    <div class="ji-tab-content js-tab-content" style="opacity:1;">

<?php
$art = file_get_contents(''.$aik["zhanwai1"].''.$_GET['post']. '');
$xx = '#<input type="checkbox" name="copy_sel" value="(.*?)" checked="" />#';
preg_match_all($xx,$art, $vv);
$ad = $vv[1];
foreach ($ad  as $c => $zlzl)
{
?>
<a href="<?php echo $zlzl;?>">点击这里播放,不用选择解析接口！</a>

<?php
}
?>

<?php
if ($url_array[1] == "m") {
	foreach ($bflu as $key0 => $xianlu) {
?><a href='<?php echo $mvsrc[$key0];?>' target='ajax'><?php echo $bfyuan[$key0];?></a><?php
	}
} else {
	if ($url_array[1] == "tv") {
?><div id="myouter"><ul id="mytab"><?php
		$pindao = $html;
		if ($x = strpos($pindao, "playsite:[")) {
			$pindao = substr($pindao, $x);
		}
		if ($x = strpos($pindao, "}]")) {
			$pindao = substr($pindao, 0, $x);
		}
		$pattern = "#\"ensite\":\"(.*?)\"#";
		preg_match_all($pattern, $pindao, $matches);
		$changdu = count($matches[1]);
		$htmlid = $dsjid;
		$htmlid = str_replace(".html", "", $htmlid);
		$bfqq = file_get_contents("http://www.360kan.com/cover/switchsite?site=" . $matches[1][0] . "&id=" . $htmlid . "&category=2", false);
		$bfqq = json_decode($bfqq, true);
		$bfqq = str_replace("<a target=\"_self\" class=\"all js-show-init\" href=\"#\" title=\"收起\">收起</a>", "", $bfqq);
		$bfqq = str_replace("opacity:0", "opacity:1", $bfqq);
		$bfqq = str_replace("全部剧集", "", $bfqq);
		$bfqq = str_replace("data-num", "id", $bfqq);
?><li class="current"><?php echo $matches[1][0];?></li><?php
		$xh = 1;
		while ($xh < $changdu) {
			$bfqq = file_get_contents("http://www.360kan.com/cover/switchsite?site=" . $matches[1][$xh] . "&id=" . $htmlid . "&category=2", false);
			$bfqq = json_decode($bfqq, true);
			$bfqq = str_replace("<a target=\"_self\" class=\"all js-show-init\" href=\"#\" title=\"收起\">收起</a>", "", $bfqq);
			$bfqq = str_replace("opacity:0", "opacity:1", $bfqq);
			$bfqq = str_replace("全部剧集", "", $bfqq);
			$bfqq = str_replace("data-num", "id", $bfqq);
?><li><?php echo $matches[1][$xh];?></li><?php
			$xh = $xh + 1;
		}
?></ul><div id="mycontent"><?php
		$bfqq = file_get_contents("http://www.360kan.com/cover/switchsite?site=" . $matches[1][0] . "&id=" . $htmlid . "&category=2", false);
		$bfqq = json_decode($bfqq, true);
		$bfqq = str_replace("<a target=\"_self\" class=\"all js-show-init\" href=\"#\" title=\"收起\">收起</a>", "", $bfqq);
		$bfqq = str_replace("opacity:0", "opacity:1", $bfqq);
		$bfqq = str_replace("全部剧集", "", $bfqq);
		$bfqq = str_replace("data-num", "id", $bfqq);
?><ul style="display:block;"><?php echo $bfqq["data"];?></ul><?php
		$xh = 1;
		while ($xh < $changdu) {
			$bfqq = file_get_contents("http://www.360kan.com/cover/switchsite?site=" . $matches[1][$xh] . "&id=" . $htmlid . "&category=2", false);
			$bfqq = json_decode($bfqq, true);
			$bfqq = str_replace("<a target=\"_self\" class=\"all js-show-init\" href=\"#\" title=\"收起\">收起</a>", "", $bfqq);
			$bfqq = str_replace("opacity:0", "opacity:1", $bfqq);
			$bfqq = str_replace("全部剧集", "", $bfqq);
			$bfqq = str_replace("data-num", "id", $bfqq);
?><ul ><?php echo $bfqq["data"];?></ul><?php
			$xh = $xh + 1;
		}
?></div></div><?php
	} else {
		if ($url_array[1] == "va") {
?><ul class='list' style='display:block;'><?php echo $zybiaoti;?></ul><?php
		} else {
			if ($url_array[1] == "ct") {
				foreach ($b as $key => $video) {
					$mmm = ($much = $much + 1) + -1;
					$vd = $video;
					$kanji = "第'+jiid+'集";
?>
<a id='<?php echo $jishu[$key];?>' href='<?php echo $vd;?>' target='ajax'><?php echo $jishu[$key];?></a>
<?php
				}
			}
		}
	}
}
?>


</div>     
</div>
</div></div>


<div style="clear: both;"></div>
<?php
if ($url_array[1] == "m") {
?><h3 class="single-strong">BT磁力链接</h3> 
<a  href="btdown.php?bt=<?php echo $timu;?>" class="am-btn am-btn-default lipbtn">点击查看</a><?php
}
?>
<p class="jianjie"><h3 class="single-strong">简介</h3><p class="item-desc js-close-wrap" ><?php echo $jian;?></p>
<div style="clear: both;"></div>
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
<?php
if ($url_array[1] == "tv") {
?><script type="text/javascript">
	function bofang(mp4url,jiid){
		var tishi = ('正在为您播放《<?php echo $timu;?>》 第'+jiid+'集,如不能播放请更换线路！');
		document.getElementById('videourlgo').href=mp4url;
		document.getElementById('xuji').innerHTML = tishi;
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
<?php
} else {
?><script type="text/javascript">
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
<?php
}
?>
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
