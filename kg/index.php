<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");

//分割线内是可以修改的部分
//*******************************我是淫荡的分割线*******************************//

$bati = "微淘金音乐试听外链站源码开发请联系QQ号56146737";//网站标题
$lxfs = "QQ：56146737";//网站底部联系方式

//页面广告,注意修改单引号''内的数据！
$ad = '
<a href="https://dtmbw.com/" target="_blank"><img width="100%" src="http://wx3.sinaimg.cn/large/6b229b76gy1fisb8t9nhvg20qo02iwen.gif"></a>
';
//统计代码
$tjdm = '
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
';

//*******************************我是淫荡的分割线*******************************//

//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
$ururll = "//".$_SERVER["SERVER_NAME"].$_SERVER['PHP_SELF'];
$inurll = str_replace("index.php","",$ururll);
$nourll = substr($ururll,strpos($ururll,"php"));
$weburl = strstr($ururll,"index.php")?$inurll:$nourll;//主页地址
$error = "<script>alert('地址错误或者音乐不存在!');top.location.href='?home'</script>";
$no_img = "http://ww1.sinaimg.cn/images/default_d_large.gif";//mv未加载图片
if(isset($_GET['v'])){
//*******************************播放页面*******************************//
	$de64 = base64_decode($_GET['v']);
	$expl = explode('$',$de64);
	$le = $expl[0];
	$id = $expl[1];
	switch ($le) {
		case "kg":
		//*******************************音乐播放页面*******************************//
		$p3_url= "http://m.kugou.com/app/i/getSongInfo.php?hash=".$id."&cmd=playInfo";
		$kg_krc = "http://m.kugou.com/app/i/krc.php?cmd=100&timelength=243000&hash=".$id;
		$p3_data = curl_get($p3_url);
		$p3_json = json_decode($p3_data,true);
		$song_url = $p3_json['url'];
		$song_name = $p3_json['fileName'];
		$album_img = $p3_json['album_img'];
		$imgUrl = $p3_json['imgUrl'];
		if(empty($song_url)){exit($error);}
		if(empty($imgUrl)){$imgUrl = $no_img;}
		$song_img = str_replace("{size}","400",$imgUrl);
		$title = $song_name.",在线试听,".$bati;
		$krc_data = curl_get($kg_krc);
		if($krc_data){$krc = preg_replace("/\[.*?\]/","<br>",$krc_data);}else{$krc ="<br>暂无歌词！";}
		$main = "<div class=\"mt10\"><h1 class=\"ph1\">".$song_name."</h1><span class=\"img_border\"><i><img src=\"".$song_img."\" alt=\"".$song_name."\" class=\"z360z\"></i></span><p style=\"text-align:center;margin-bottom:10px;\"><audio controls=\"controls\" autoplay=\"autoplay\" loop=\"loop\"><source src=\"".$song_url."\" type=\"audio/mp3\"/><embed height=\"30\" src=\"".$song_url."\" /></embed></audio></p><div style=\"overflow-y:auto;height:180px;\"><h2>歌词</h2>".$krc."</div><li style=\"margin:5px 5px;\"><a href=\"".$song_url."\" target=\"_blank\" class=\"btn\">电信线路</a> <a href=\"".$song_url."\" target=\"_blank\" class=\"btn\">移动线路</a></li><li style=\"margin:5px 5px;\"><a href=\"".base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pLzE5Njg4ODUzNDk')."\" target=\"_blank\">".base64_decode('6ZmV6KW/54Wn6YeR6ZWH6Z2p5ZG96ICB5Yy657q455qu5qC45qGD77yB5ruhNeaWpOWMhemCru+8gQ')."</a></li><li style=\"text-align:center;margin:5px 5px;\"><a href=\"".base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pLzE5NjQ5NjQ3Mjk')."\" target=\"_blank\">".base64_decode('54m55Lu36ZmV6KW/57qi5a+M5aOr6Iu55p6c77yM5paw6bKc5rC05p6c6Iu55p6cMTDmlqTljIXpgq7vvIE')."</a></li>";
		break;
		case "mv":
		//*******************************视频播放页面*******************************//
		$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
		$data = curl_get($x_url);
		preg_match('/songname":"(.*?)",/is', $data, $nm2);
		preg_match('/singer":"(.*?)",/is', $data, $nm1);
		preg_match('/mvicon":"(.*?)",/is', $data, $img);
		preg_match_all('/downurl":"(.*?)",/is', $data, $mp4);
		preg_match_all('/backupdownurl":\["(.*?)"\]/is', $data, $bmp4);
		$song_name = $nm1[1]." - ".$nm2[1];
		$mv_url = stripslashes($mp4[1][0]);
		if(empty($mv_url)){exit($error);}
		$title = $song_name.",mv视频在线观看,".$bati;
		$song_img = stripslashes(str_replace("{size}","400",$img[1]));
		$a=array("流畅","标清","高清","超清");
		for($i = 0; $i < 3; $i++){
			$downurla = stripslashes($mp4[1][$i]);
			$downurlb = stripslashes($bmp4[1][$i]);
			if($downurla){
			$down .= "<li style=\"margin:5px 5px;\">".$a[$i]."： <a href=\"".$downurla."\" target=\"_blank\" class=\"btn\">电信线路</a> <a href=\"".$downurlb."\" target=\"_blank\" class=\"btn\">移动线路</a></li>";
			}
		}
		$main = "<script type=\"text/javascript\"> function player(url) { var frameid = Math.random(); window.webmvplayer = '<video width=\"100%\" height=\"100%\" controls=\"controls\" autoplay=\"autoplay\" poster=\"$song_img\" object-fit:fill><source src=\"'+url+'\" type=\"video/mp4\"><embed id=\"webmvplayer\" name=\"webmvplayer\" src=\"http://static.kgimg.com/common/swf/video/videoPlayer.swf\" height=\"100%\" width=\"100%\" allowscriptaccess=\"always\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"skinurl=http%3a%2f%2fstatic.kgimg.com%2fcommon%2fswf%2fvideo%2fskin.swf&amp;aspect=true&amp;url='+url+'&amp;autoplay=true&amp;fullscreen=true&amp;initfun=flashinit\" type=\"application/x-shockwave-flash\" wmode=\"Transparent\" allowfullscreen=\"true\"></embed></video><script>window.onload = function() { parent.document.getElementById(\''+frameid+'\').height = document.body.scrollWidth*0.565+\'px\'; }<'+'/script>';	document.write('<iframe id=\"'+frameid+'\" src=\"javascript:parent.webmvplayer;\" frameBorder=\"0\" scrolling=\"no\" width=\"100%\" frameborder=\"0\" vsspace=\"0\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe>'); } </script><div class=\"main\"><h2 style=\"margin-bottom:10px;width:100%;white-space:nowrap;overflow:hidden;\"><a href=\"?v=".$_GET['v']."\" title=\"".$song_name."\">".$song_name."</a></h2></div>
		<div style=\"text-align:center;\"><script type=\"text/javascript\">player('".$mv_url."');</script>		
		<li style=\"margin-top:25px;\"><li style=\"margin:5px 5px;\">电脑推荐使用2345浏览器下载视频，<a href=\"http://player.youku.com/embed/XMjk4MDE3MTIwMA?autoplay=true\" target=\"_blank\" style=\"color:red;\">观看教程</a></li>".$down."<li style=\"margin:5px 5px;\"><a href=\"".base64_decode('aHR0cHM6Ly9qaWZlbmRvd25sb2FkLjIzNDUuY24vamlmZW5fMjM0NS9wOF9raTZ4X3YyLjAuZXhl')."\" target=\"_blank\"><img src=\"".base64_decode('aHR0cDovL2llLjIzNDUuY2MvYXNzZXRzL3Y2L3BpYy9sb2dvLnBuZz92MjAxNjA3MDE')."\"></a></li><li style=\"margin:5px 5px;\"><a href=\"".base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pLzE5Njg4ODUzNDk')."\" target=\"_blank\">".base64_decode('6ZmV6KW/54Wn6YeR6ZWH6Z2p5ZG96ICB5Yy657q455qu5qC45qGD77yB5ruhNeaWpOWMhemCru+8gQ')."</a></li><li style=\"text-align:center;margin:5px 5px;\"><a href=\"".base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pLzE5NjQ5NjQ3Mjk')."\" target=\"_blank\">".base64_decode('54m55Lu36ZmV6KW/57qi5a+M5aOr6Iu55p6c77yM5paw6bKc5rC05p6c6Iu55p6cMTDmlqTljIXpgq7vvIE')."</a></li></div>";
		break;
		default:
		exit($error);
	}
	$main .= "<div style=\"text-align:center;\">".$ad."</div>".random().mv();
}elseif(isset($_GET['p'])){
//*******************************列表页面*******************************//
	$l=$_GET['p'];
	$web = '1';
	switch ($l){
		case "1":
		$peg = "网络红歌,最新最好听的网络歌曲，根据网络歌曲人气智能排序网络歌曲排行榜！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=23784&page=1";
		break;
		case "2":
		$peg = "TOP排行榜,平民化的音乐和歌手，让音乐更贴近你的生活！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=8888&page=1";
		break;
		case "3":
		$peg = "劲爆DJ舞曲,动感十足！经典劲爆歌曲，流行劲爆，英文劲爆，韩国劲爆歌曲全都有！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=70&page=1";
		break;
		case "4":
		$peg = "恋爱的歌,献给热恋中的你们，让爱情变得更加甜美！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=67&page=1";
		break;
		case "5":
		$peg = "洗脑神曲,神曲之所以被称为神曲，不仅仅是因为旋律，更多的是因为大众喜欢。";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=24574&page=1";
		break;
		case "6":
		$peg = "美拍视频";
		$web = 'meipai';
		break;
		default:
		exit($error);
	}
    if($web=='meipai'){
		$title = $peg." - ".$bati;
		$main = '<script type="text/javascript" src="http://mp34.butterfly.mopaasapp.com/meipai.php" charset="utf-8"></script>';
	}else{
	$data = curl_get($url,$web);
	$json = json_decode($data,true);
		$title = $peg." - ".$bati;
		$count_json = count($json['data']['info']);
		$main = "<div class=\"plr10\"><div class=\"h1\">".$peg."</div><div id=\"wlsong\"><ul>";
		for($i = 0; $i < $count_json; $i++){
			$k = $i + 1;
			$name = $json['data']['info'][$i]['filename'];
			$hash = $json['data']['info'][$i]['hash'];
			$href = str_replace("=","",base64_encode("kg$".$hash));
			$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"?v=".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"?v=".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
		}
		$main .= "</ul></div></div>";
	}
}elseif(isset($_GET['ac'])){
//*******************************搜索页面*******************************//
	$w = htmlspecialchars($_GET['ac']);
	$title = $w."的搜索结果,".$bati;
	$url ="http://songsearch.kugou.com/song_search_v2?keyword=".$w."&page=1&pagesize=30&platform=WebFilter";
	$mv_url = "http://mvsearch.kugou.com/mv_search?keyword=".urlencode($w)."&page=1&pagesize=30";
	$data = curl_get($url);
	$mv_data = curl_get($mv_url);
	preg_match_all('/"FileName":"(.*?)","/is',$data,$nm);
	preg_match_all('/"FileHash":"(.*?)","/is',$data,$ha);
	preg_match_all('/"FileName":"(.*?)","/is',$mv_data,$mv_nm);
	preg_match_all('/"MvHash":"(.*?)","/is',$mv_data,$mv_ha);
	preg_match_all('/"Pic":"(.*?)","/is',$mv_data,$mv_im);
	$count = count($ha['1']);
	$mv_count = count($mv_nm['1']);
	if(empty($count)){$main = "<div class=\"main\">没有找到关键词：【<font color='red'>".$w."</font>】的任何歌曲及MV，请换个关键词从新搜索！</div>".random().mv();}else{
	$main = "<div class=\"main\">关键词：【<font color='red'>".$w."</font>】的搜索结果</div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
	for($i = 0; $i < $count; $i++){
		$k = $i + 1;
		$nnmm = $nm['1'][$i];
		$name = str_ireplace($w,"<font color='red'>".$w."</font>",$nnmm);//关键字红色显示
		$hash = $ha['1'][$i];
		$href = str_replace("=","",base64_encode("kg$".$hash));
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"?v=".$href."\" target=\"_mp34\" title=\"".$nnmm."\">".$name."</a><a class=\"fr\" href=\"?v=".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
	}
	$main .= "</ul></div></div>";
	$main .= "<ul class=\"mv_list\">";
	if(empty($mv_count)){
		$main .= $ad;
	}else{
	for($c = 0; $c < 30; $c++){
		$gq = stripslashes($mv_nm[1][$c]);
		$name = str_ireplace($w,"<font color='red'>".$w."</font>",$gq);//关键字红色显示
		$mpic = "http://imge.kugou.com/mvhdpic/240/".substr($mv_im[1][$c],0,8)."/".$mv_im[1][$c];
		$hash = $mv_ha[1][$c];
		$href = str_replace("=","",base64_encode("mv$".$hash));
		if($gq){
			$main .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$gq."\"><img src=\"".$mpic."\"><span>".$name."</span></a></li>";
		}
	}
	}
	$main .= "</ul>";}
}elseif(isset($_GET['m'])){
//*******************************MV页面*******************************//
	$p=$_GET['m'];
	if(preg_match("/^\+?[1-9][0-9]*$/",$p)){
		$mvurl = "http://www.kugou.com/mvweb/html/index_9_".$p.".html";
		$data = curl_get($mvurl);
		preg_match('/id="mvNum">(.*?)<\/label>/is',$data,$total);
		preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
		$num = "20";
		$nums = $total[1];
		$pnum = ceil($nums/$num);
		if($p > $pnum){	exit($error); }
		$main = "<div class=\"main\"><div style=\"float:left;\">热舞MV大放送！</div><div style=\"float:right;\"><a class=\"btn\">共".$pnum."页</a>&nbsp;&nbsp;<select  onchange=\"javascript:location.href=this.options[this.selectedIndex].value\"><option disabled selected hidden>第".$p."页</option>";
		for($i = $p-4; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<option value=\"?m=".$i."\" >第".$i."页</option>";
			}
		}
		$main .= "</select></div></div>";
		$title = "热舞MV大放送 第".$p."页 - ".$bati;
		$main .= "<ul class=\"mv_list\">";
		preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
		preg_match_all('/src="(.*)"/', $mvlist[1], $img);
		for($i = 0; $i < 18; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = str_replace("=","",base64_encode("mv$".$hash));
			if($mpic){
				$main .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";
			}
		}
		$main .= "</ul></div></div>";
	}else{
		exit($error);
	}
}else{
	$title = $bati;
	$main = mv().bang();
}
function decode($str){
	$tsr = substr($str,0,4);
	$rts = substr($str,4);
	$res = "";
	for ($i = 1; $i <= strlen($tsr); $i++){
		$res .= substr($tsr, -$i, 1);
	}
	$s = hexdec($res);
	$k = str_split($s);
	$k1 = substr_replace($rts,"",$k[0],$k[1]);
	$k2 = substr_replace($k1,"",-($k[2]+$k[3]),-$k[2]);
	$k3 = base64_decode($k2);
	return $k3;
}
function mv(){
	global $no_img;
	$output = "<div class=\"main\"><div class=\"lr\">热门推荐</div><div class=\"fr\"><a href=\"?m=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><ul class=\"mv_list\">";
	$kbang = "http://www.kugou.com/mvweb/html/index_13_".rand(1,300).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/src="(.*)"/', $mvlist[1], $img);
	$su = rand(0,5);
	for($i = $su; $i < $su+15; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		$href = str_replace("=","",base64_encode("mv$".$hash));
		if($mpic){
			$output .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";
		}
	}
	$output .= "</ul></div></div>";
return $output;
}
function bang(){
	$kbang = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=500&rankid=6666&page=1";
	$data = curl_get($kbang);
	$json = json_decode($data,true);
	$num = $json['data']['total'];
	if($num%2 != 0){$num = $num-1;}
	$dd = rand(3,$num);
	$time = date('Y-m-d H:i:s',$json['data']['timestamp']);
	$main = "<div class=\"main\"><div class=\"lr\">网络歌曲飙升榜</div><div class=\"fr\"><a href=\"?p=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
	for($i = 0; $i < $num; $i++){
		$k = $i + 1;
		$hash = $json['data']['info'][$i]['hash'];
		if($i==$dd){
			$name = base64_decode('5YyF6YKuIC0g6ZmV6KW/57q455qu5qC45qGD');
			$href = base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pdGVtLmh0bWw/aXRlbUlEPTE5Njg4ODUzNDk');
		}elseif($hash){
			$name = $json['data']['info'][$i]['filename'];
			$href = "?v=".str_replace("=","",base64_encode("kg$".$hash));
		}
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
	}
	$main .= "</ul></div></div>";
return $main;
}
function random(){
	$kbang = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=500&rankid=23784&page=1";
	$data = curl_get($kbang);
	$json = json_decode($data,true);
	$num = $json['data']['total'] - 20;
	$su = rand(0,$num);
	$dd = rand(5,15);
	$main = "<div class=\"main\"><div class=\"lr\">猜你喜欢</div><div class=\"fr\"><a href=\"?p=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
	$k = 0;
	for($i = $su; $i < $su + 20; $i++){
		$k = $k + 1;
		$hash = $json['data']['info'][$i]['hash'];
		if($i==$su+$dd){
			$name = base64_decode('5YyF6YKuIC0g6ZmV6KW/57q455qu5qC45qGD');
			$href = base64_decode('aHR0cHM6Ly93ZWlkaWFuLmNvbS9pdGVtLmh0bWw/aXRlbUlEPTE5Njg4ODUzNDk');
		}elseif($hash){
			$name = $json['data']['info'][$i]['filename'];
			$href = "?v=".str_replace("=","",base64_encode("kg$".$hash));
		}
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
	}
	$main .= "</ul></div></div>";
return $main;
}
function curl_get($url,$web){
	$temp = parse_url($url);
	$header = array (
	"Host: {$temp['host']}",
	"Referer: http://{$temp['host']}/"
	);
	if($web=='1'){
		$Agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36";
		$Cookie = "";
	}else{
		$Agent = $_SERVER['HTTP_USER_AGENT'];
	}
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $Agent);
	curl_setopt($ch, CURLOPT_COOKIE,$Cookie);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $output = curl_exec($ch);
    curl_close($ch);
return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,maximum-scale=1,user-scalable=no">
<meta name="copyright" name="音乐试听外链站 v1.4"/>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title><?php echo $title?></title>
<meta name="keywords" content="<?php echo $title?>,QQ空间背景音乐,音乐外链,歌曲外链,mp3外链,视频外链,背景音乐链接,外链,音乐外链网" />
<meta name="description" itemprop="description" content="<?php echo $title?>,音乐试听外链站免费提供音频试听，你可以分享给你的好友。同时生成的音乐外链链接支持引用到各大博客，网站，还可免费设置QQ空间背景音乐，免去你寻找歌曲链接地址的苦恼。" />
<link rel="stylesheet" href="fonts/css.css">
<style type="text/css">
/* 公共部分 */
*{margin:0;border:0;list-style-type:none;}a{text-decoration:none;cursor:pointer;color:#333;}h1,h2,h3,h4,h5,h6,select{font-size:100%;}.fr{float:right;}.lr{float:left;}.mt10{margin-top:10px;text-align:center;}.br100{border-radius:100px}.plr10{padding-left:10px;padding-right:10px;}
/* 顶部 */
#header{top:0px;width:100%;z-index:800;position:fixed;}.new_top,.bottom{filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#0896fc',endColorStr='#077ddd',gradientType='0');background:-webkit-linear-gradient(top, rgba(8, 150, 252, 1), rgba(7, 126, 221, 1));}.new_top{height:45px;}.new_top img{height:45px;max-width:30%;float:left;margin-left:2%;}.sousuobox{float:right;margin-top:8px;}.sousuobox #keyword{float:left;width:70%;height: 25px;line-height:25px;text-indent:10px;border-radius:25px 0 0 25px;}.sousuobox #serch{float:left;height:27px;background:#0273c7;border-radius:0 26px 26px 0;cursor:pointer;color:#fff;}.n_nav{float:left;height:45px;line-height:30px;overflow:hidden;width:100%;background:#fff;border-bottom: solid 1px #EEE;text-align:center;}.n_nav ul li{ float:left; width:30%;height:45px;line-height:45px;}.n_nav ul li a{color:#000;}#menu_box{width:100%;overflow:hidden;background:#fff;text-align:center;padding-bottom:10px;}#menu_box ul li{width:30%;float:left;margin-top:10px;}
/* 内容 */
.main{background:#f3f3f3;height:60px;line-height:60px;text-align:left;padding:0 15px;border-bottom:solid 2px #fff;}#wlsong ul{color:#0763BF;padding:0;}#wlsong ul li{border-bottom: 1px solid #F2F2F2;height:60px;line-height:60px;overflow:hidden}#wlsong ul li img{margin:10px;margin-top:20px;float:left;width:41px;height:41px;}.numb{float:left;display:inline-block;text-align:left;height:60px;overflow:hidden;text-indent: 0.5em;width:40px;color:#FA3B00;}.gname{width:65%;display:inline-block;text-align:left;height:60px;overflow:hidden;color: #044CB8;float:left;}#wlsong ul li i{line-height:60px;color:#5888D0;margin-right:10px;}a:hover.gname{color:#ff0000;}.h1{border-bottom:1px solid #D9DEE1;color:#FA3B00;padding:10px;}
/* MV */
.mv_list{overflow:hidden;clear:both;margin:10px auto;padding:0;text-align:center;}.mv_list a:hover{color:#ff0000;}.mv_list li{display:inline-block;width:29%;margin:10px 2%;}.mv_list span{float:left;overflow:hidden;width:100%;text-overflow: ellipsis;white-space:nowrap;height:24px;line-height:28px;}.mv_list img{width:100%;border-radius:10px;}.btn{padding:1px 5px;border-radius:5px;background-color:#0795FA;color:#fff;height:23px;}.btn:hover{background-color:#0795FA;color:#fff;cursor:pointer;}select{height:23px;border-radius:5px;background-color:#0795FA;color:#fff;}@media(max-width:500px){.mv_list img{height:70px;}}@media(min-width:510px){.mv_list img{height:160px;}}
/* 列表 */
.ph1{width:100%;height:40px;overflow:hidden;line-height:40px;font-weight:700;display:inline-block;}.img_border{display: inline-block;width:155px;height:155px;margin:10px auto;}.img_border i{border:10px solid #2A2B2D;border-radius:100px;display:inline-block;height:130px;}.img_border img{width:130px;height:130px;}.z360z{border-radius:120px;-webkit-animation:rotating 5s linear infinite;animation:rotating 5s linear infinite}@-webkit-keyframes rotating{from{-webkit-transform:rotate(0);-moz-transform:rotate(0);-ms-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotating{from{-webkit-transform:rotate(0);-moz-transform:rotate(0);-ms-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}
/* 底部 */
.bottom{clear:both;margin-top:10px;color:#fff;text-align:center;padding:20px;font: small 'Microsoft Yahei';}.bottom a{color:#fff;text-decoration:none;}
</style>
</head>
<body>
<!-- 顶部菜单 Start -->
<div id="header">
<!--[if IE]><div style="background:rgb(255,255,225);text-align:center;color:#333;padding:2px 20px;font-size:14px;overflow:hidden;height:40px;line-height:40px;">温馨提示：您的浏览器版本过低，请您升级至更快速安全的Chrome内核浏览器！<a style="text-decoration:none;color:#f00;" href="https://jifendownload.2345.cn/jifen_2345/p8_ki6x_v2.0.exe">点击下载最新版安全浏览器</a></div><![endif]-->
    <div class="new_top">
        <a href="<?php echo $weburl;?>" title="<?php echo $bati;?>"><img src="http://ww1.sinaimg.cn/small/6b229b76jw1fb0zomp6k1g203z014t8h.gif"/></a>
        <div class="sousuobox">
			<form method="get" name="get_key" onsubmit="return getkey();"> 
			<input type="text" name="ac" id="keyword" placeholder="输入关键字搜索"/>
			<input type="submit" id="serch" value="搜索"></input>
			</form>
        </div>
    </div>
	<div class="n_nav">
	    <ul id="nnav">
		<li><a href="<?php echo $weburl;?>"><i class="fa fa-home"></i>&nbsp;首页</a></li>
		<li><a href="javascript:void(0)" onClick="btn()"><i class="fa fa-music"></i>&nbsp;榜单</a></li>
		<li><a href="?m=1"><i class="fa fa-film"></i>&nbsp;高清MV</a></li>
		</ul>
	</div>
	<div id="menu_box" style="display:none;">
	   	<ul>
    	<li><a href="?p=1">网络红歌</a></li>
        <li><a href="?p=2">TOP排行榜</a></li>
        <li><a href="?p=3">DJ舞曲</a></li>
        <li><a href="?p=4">恋爱的歌</a></li>
        <li><a href="?p=5">洗脑神曲</a></li>
        <li><a href="?p=6" style="color: #ff0000;">美拍视频</a></li>
        <li><a target="_blank" href="http://m.155.la">资源论坛</a></li>
        <li><a target="_blank" href="https://dtmbw.com/">更多资源</a></li>
        <li><a target="_blank" href="http://www.sztxcargo.com/a/zw/dsp/ysa.php?v=1">在线影视</a></li>
        <li><a target="_blank" href="http://www.sztxcargo.com/a/zw/">聚合直播</a></li>

		</ul>
	</div>
</div>
<div style="margin-top:90px;"></div>

<?php echo $main;?>

</div>
<script type="text/javascript">
function getkey(){
	if(get_key.keyword.value==""){
		alert("请输入歌曲名称!");
		get_key.keyword.focus();
		return false;
	}
}
function btn(){
	if(showdiv = document.getElementById('menu_box').style.display=='none'){
		document.getElementById('menu_box').style.display='block';
	}else{
		document.getElementById('menu_box').style.display='none';
	}
}
</script>
<!-- 底部 Start -->
<div class="bottom"> 
<p>声明：<?php echo $bati;?>不存储任何音频及视频数据，站内歌曲 音乐 MP3 mp4来自搜索引擎，如有侵犯版权请及时联系我们！<?php echo $lxfs;?></p>
<p><script type="text/javascript">var datatime=new Date(); document.write("&copy; 2010-"+datatime.getFullYear()+".");</script>   <a target="_blank" href="https://dtmbw.com/">下载本站源码</a></p>
<p style='display:none'><?php echo $tjdm;?></p>
</div>
<!-- 底部 End -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>
