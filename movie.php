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
<title>看电影-最新好看的最新电影电视-<?php echo $aik["title"];?></title>
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

<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">

<a href='?m=list.php?cat=all&year=all&area=all&act=all&rank=createtime&pageno=1' target='_self'>全部</a>
<?php
include "list.php";
foreach ($mcat as $kcat => $vcat) {
	$flname = $mname[$kcat];
	if ($vcat == 00 || $flname == "无") {
		echo "";
	} else {
		$flid = "http://www.360kan.com/dianying/list.php?cat=" . $vcat . "&pageno=1";
?><a href='?m=list.php?cat=<?php echo $vcat;?>&pageno=1' target='_self'><?php echo $flname;?></a><?php
	}
}
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
if (empty($_GET['m'])) {
	$html = "http://www.360kan.com/dianying/list?cat=all&year=all&area=all&act=all&rank=createtime&pageno=1";
} else {
	$html = "http://www.360kan.com/dianying/" . $_GET["m"] . "&pageno=" . $_GET["pageno"];
}
$rurl = file_get_contents($html);
$vname = "#<span class=\"s1\">(.*?)</span>#";
$fname = "#<span class=\"s2\">(.*?)</span>#";
$vlist = "#<a class=\"js-tongjic\" href=\"(.*?)\">#";
$vstar = "# <p class=\"star\">(.*?)</p>#";
$vimg = "#<div class=\"cover g-playicon\">\r\n                                <img src=\"(.*?)\">\r\n#";
$bflist = "#<a data-daochu(.*?) href=\"(.*?)\" class=\"js-site-btn btn btn-play\"></a>#";
$jishu = "#<span class=\"hint\">(.*?)</span> #";
$fufei = "#<span class=\"pay\">(.*?)</span>#";
$yuming = "http://www.360kan.com";
preg_match_all($vname, $rurl, $xarr);
preg_match_all($fname, $rurl, $xarrf);
preg_match_all($vlist, $rurl, $xarr1);
preg_match_all($vstar, $rurl, $xarr2);
preg_match_all($vimg, $rurl, $xarr3);
preg_match_all($bflist, $rurl, $xarr4);
preg_match_all($jishu, $rurl, $xarr5);
preg_match_all($fufei, $rurl, $xarrff);
preg_match_all($zong, $rurl, $xarrzz);
$xname = $xarr[1];
$lname = $xarrf[1];
$xlist = $xarr1[1];
$xstar = $xarr2[1];
$ximg = $xarr3[1];
$xbflist = $xarr4[1];
$xjishu = $xarr5[1];
$xfufei = $xarrff[1];
$quanbu = $xarrzz[2];
foreach ($xname as $key => $xvau) {
	$ccb = "./play.php?play=" . $xlist[$key];
?><li class='item'>
    <a class='js-tongjic' href='<?php echo $ccb;?>' title='<?php echo $xvau;?>' target='_blank'>
<div class='cover g-playicon'>
<img  src='<?php echo $ximg[$key];?>' alt='<?php echo $xvau;?>'/>
</div>
<div class='detail'>
<p class='title g-clear'>
 <span class='s1'><?php echo $xvau;?></span>
 <span class='s2'><?php echo $lname[$key];?></span></p>
<p class='star'><?php echo $xstar[$key];?></p>
 </div>
</a>
</li><?php
}
?>
        </ul>
                </div>


    </div>
</div> 

<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $html);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);
$response = strstr($response, "<div monitor-desc=");
$response = strstr($response, "<div style='margin-top:30px'>", true);
$response = str_replace("http://www.360kan.com/dianying/", "movie.php?m=", $response);
echo $response;
?></div></div>
<div class="asst asst-list-footer"><?php echo $aik["movie_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
