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
<title>YY舞曲音乐-最新好看的最新电影电视-<?php echo $aik["title"];?></title>
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
?>
<style>
.b-listfilter{padding:0 20px;background-color:#fff;border:1px solid #e6e6e6;font-size:12px;line-height:16px}.b-listfilter-item{position:relative;overflow:hidden;height:40px;zoom:1;padding-left:36px;padding-right:50px;border-bottom:1px dashed #e6e6e6}.b-listfilter-item:last-child{border-bottom:0}.b-listfilter-item .type{position:absolute;left:0;top:10px;color:#999;padding:2px 0}.b-listfilter-item .item{padding:5px 0}.b-listfilter-item .item a{float:left;margin:5px 0 5px 16px;padding:2px 6px;zoom:1;height:20px;white-space:nowrap;word-wrap:break-word}.b-listfilter-item .on:hover,.b-listfilter-item .on{background-color:#FF6651;color:#fff}.b-listfilter-item .act{position:absolute;right:0;top:12px;height:16px;line-height:16px}.b-listfilter-item .act a{padding:0 13px 0 0;display:none}.b-listfilter-item .open{background:url(http://p6.qhmsg.com/t0187f8287120a671ea.png) right center no-repeat}.b-listfilter-item .close{background:url(http://p6.qhmsg.com/t018dad77370f0fe67d.png) right center no-repeat}.b-listtab{margin-top:20px;color:#222;font-size:12px;*margin-bottom:20px}.b-listtab .tab-line{width:100%;height:39px;background:#fff;border:1px solid #e6e6e6;border-bottom:2px solid #FF6651}.b-listtab .tab{float:left;z-index:1}.b-listtab .tab-item{position:relative;float:left;display:inline;height:39px;line-height:39px;width:83px}.b-listtab .tab-item a{float:left;height:39px;width:83px;text-align:center;overflow:hidden;border-left:1px solid #fff;border-right:1px solid #fff;background:#fff;white-space:nowrap}.b-listtab .tab-cur a{position:absolute;border-left:1px solid #FF6651;border-right:1px solid #FF6651;border-top:3px solid #FF6651;top:-1px;left:-1px;height:39px;text-indent:1px;z-index:2;background:#f4f4f4;*width:82px}.b-listtab .tab-item span{position:absolute;width:1px;background:#d8d8d8;overflow:hidden;height:17px;top:10px;right:0}.b-listtab .tab-cur span{display:none}.b-listtab .app{float:right;line-height:39px}.b-listtab .app span{color:#cb0000;padding:0 2px}.b-listtab .app a{display:inline-block;width:80px;height:31px;line-height:31px;text-align:center;color:#fff;background:#FF6651;border-radius:2px;margin:5px 6px}.b-listtab .app a:hover{color:#fff;background:#189a83}.b-listtab-main{margin-top:0px;overflow:hidden}.b-listtab-main .list{margin-left:-20px}.b-listtab-main .item{float:left;width:191px;height:210px;border-bottom:1px solid #e9e9e9;margin:0 0 20px 20px}.b-listtab-main .cover{width:100%;height:156px;overflow:hidden;position:relative;font-size:12px}.b-listtab-main .cover img{width:100%;height:100%}.b-listtab-main .pay{position:absolute;top:4px;left:4px;display:block;width:39px;height:19px;line-height:19px;background:#cd1919;color:#fff;text-align:center;border-radius:2px}.b-listtab-main .hint{position:absolute;right:4px;bottom:4px;padding:2px 6px;background:rgba(0,0,0,0.8);color:#fff;border-radius:2px}.b-listtab-main .detail{width:100%;background:#fff}.b-listtab-main .title{font-size:14px;padding:7px 5px 3px 5px}.b-listtab-main .title .s1{display:inline-block;float:left;width:144px;height:20px;line-height:20px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;color:#222}.b-listtab-main .title .s2{float:right;color:#ff7b00;font-size:16px}.b-listtab-main .star{font-size:12px;color:#999;margin:0 5px;width:170px;height:18px;line-height:18px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.ew-page{color:#222;font-size:12px;text-align:center}.ew-page a{border:1px solid #e6e6e6;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#fff;text-align:center;margin:0 4px;color:#222}.ew-page span{display:inline-block;width:38px;color:#222}.ew-page .btn{width:72px}.ew-page a:hover{color:#FF6651;border:1px solid #FF6651}.ew-page .on:hover,.ew-page .on{cursor:default;border:1px solid #FF6651;color:#fff;display:inline-block;width:36px;height:36px;line-height:36px;background-color:#FF6651;text-align:center;margin:0 4px}.eb-mediav-500{float:left;width:498px;height:88px;border:1px solid #b0dbd4;overflow:hidden}.eb-mediav-500 .logo{display:block;float:left;width:50px;height:90px}.eb-mediav-500 .list{padding:0 3px;z-index:1}.eb-mediav-500 .list li{float:left;width:85px;height:88px;overflow:hidden;margin-left:3px}.eb-mediav-500 .item{display:block;width:100%;height:100%;position:relative}.eb-mediav-500 .item img{width:100%;height:100%}.eb-mediav-500 .item .hint{position:absolute;left:0;bottom:0;width:86px;height:20px;background:#fff;opacity:.9}.eb-mediav-500 .item:hover .hint{height:100%}.eb-mediav-500 .item .price{position:absolute;left:0;bottom:0;width:100%;height:20px;line-height:20px;text-align:center;color:#ff1313;font-size:14px}.eb-mediav-500 .item .desc{position:absolute;top:5px;left:5px;width:76px;height:48px;line-height:16px;overflow:hidden;font-size:12px;color:#333;display:none}.eb-mediav-500 .item:hover .desc{display:block}.eb-mediav-500 .item-360video .hint,.eb-mediav-500 .item-360video .price,.eb-mediav-500 .item-360video .desc,.eb-mediav-500 .item-360video:hover .desc{display:none}.eb-mediav-500 .appdown{display:block;width:100%;height:100%}.eb-mediav-500 .appdown img{width:100%;height:100%}.eb-mediav-500 .list-wrapper{width:448px;height:100%;position:relative;overflow:hidden;float:left}.eb-mediav-500 .list-wrapper b{z-index:2;position:absolute;top:15px;width:20px;height:45px;cursor:pointer;background-image:url(http://p0.qhimg.com/t01776acc478f788c42.png);background-repeat:no-repeat}.eb-mediav-500 .list-wrapper .btn-l{background-position:0 0;left:0}.eb-mediav-500 .list-wrapper .btn-l:hover{background-position:0 -45px}.eb-mediav-500 .list-wrapper .btn-r{background-position:0 -90px;right:0}.eb-mediav-500 .list-wrapper .btn-r:hover{background-position:0 -135px}.eb-mediav{width:100%}.eb-mediav-wide{width:1180px;margin:0 auto;position:relative;text-align:center;display:none;margin-top:40px}.eb-mediav-950{display:block;width:950px;height:90px;overflow:hidden;margin:0 auto;margin-top:40px}.eb-mediav-660{float:left;width:660px;height:90px;margin-right:19px}.g-wide .eb-mediav-950{display:none}.g-wide .eb-mediav-wide{display:block}.g-wide .eb-mediav-small .eb-mediav-950{display:block}.p-body .eb-mediav-500 .list{width:448px}.g-slide{position:relative;overflow:hidden}.g-slide-item{position:absolute;top:0;left:0;display:none}.g-slide-item:first-child{display:block}.eb-signin-signup{overflow:hidden;*zoom:1;background-color:#fff;height:390px}.eb-signin input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#dadada;font-size:14px}.eb-signin input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#dadada;font-size:14px}.eb-registe-nav-topline{background-color:#e5e8e9;width:596px}.eb-signin{width:598px;background-color:#fff}.eb-signin-top{width:596px;background-color:#475e5e}.eb-signin-nav{background-color:#a6b1b1}.eb-signin-topline{background-color:#909e9e;width:594px}.eb-signin-topline-in{background-color:#bac2c3;width:592px}.eb-signin-topline p{background-color:#bac2c3}.b-line{margin:0 auto;height:1px;font-size:0}.eb-signin-nav-topline{background-color:#e5e8e9;width:594px}.eb-signin-nav-bomline{background-color:#eff1f1}.eb-signin-nav-bomline p{background-color:#e5e8e9;width:596px}.pingfen{position:absolute;bottom:52px;right:6px;}.am-container {max-width: 1220px;}.g-playicon:after,.g-playicon-mask,.g-playicon-icon{visibility:hidden;position:absolute;overflow:hidden;cursor:pointer}.g-playicon:after{z-index:2;top:0;left:0;width:100%;height:100%;content:'';background:rgba(0,0,0,.3) url(http://p9.qhimg.com/t01925d53c7bd381a67.png) no-repeat center;cursor:pointer;opacity:0;-webkit-transition:opacity 300ms linear;-moz-transition:opacity 300ms linear;-o-transition:opacity 300ms linear;-ms-transition:opacity 300ms linear;transition:opacity 300ms linear}.g-playicon:hover{border-color:#fefefe}.g-playicon:hover:after{opacity:1}.g-playicon-mask,.g-playicon-icon{top:0;left:0;width:100%!important;height:100%!important}.g-playicon-mask{z-index:2;background:#000;opacity:.3;filter:alpha(opacity=30)}.g-playicon-icon{z-index:3;background:url(http://p9.qhimg.com/t01925d53c7bd381a67.png) center no-repeat}.g-playicon:hover:after,.g-playicon:hover .g-playicon-mask,.g-playicon:hover .g-playicon-icon{visibility:visible}.videolis{width:100%;border-radius:6px;border:solid #dedede 1px;float:left;margin-bottom:10px;background:#fff;margin-right:22px;}.videolis img{width:100%;}.videolis a{color:#666;}.bbbt{font-weight:400;font-size:16px;padding:8px;margin-bottom:0;margin-top:0;}.am-g{background: #f8f8f8;}.m-g{background:#fff;border-radius:2px}.b-listtab-main {margin-top:0px;padding-top: 0px;overflow: hidden;}.b-listtab-main .list {margin-left: -56px;}
.paging{text-align:center;margin:24px 0;clear:both}.paging a{margin:0 4px;width:36px;height:36px;line-height:36px;display:inline-block;cursor:pointer}.paging a{color:#FF6651;background:#fff;transition:background ease .4s;-webkit-transition:background ease .4s;-moz-transition:background ease .4s;-o-transition:background ease .4s;-ms-transition:background ease .4s}.paging a:hover{background-color:#FF6651;color:#fff;border-radius:10px}.paging .current{background-color:#FF6651;color:#fff}#text-indent:hover{-webkit-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{-moz-animation:text-indent 1s ease 0s alternate none infinite}#text-indent:hover{animation:text-indent 1s ease 0s alternate none infinite}@-webkit-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@-moz-keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}@keyframes text-indent{from{text-indent:0}50%{text-indent:20px}to{text-indent:-20px}}.fenlei{margin-top:10px}
@media only screen and (width:1024px){.b-listtab-main .item {width: 181px;}};
@media only screen and (width:768px){.b-listtab-main .item{width:230px}};
@media only screen and (max-width:700px){
.b-listtab-main .item {width: 44%;}
.pingfen{display:none}
.bbbt{font-size:12px;overflow:hidden;height:29px;}
}
@media only screen and (max-width:420px){
.b-listfilter-item .item a{margin: 5px 0 5px 12px;}
.b-listtab-main .item {width: 44%;}
.b-listtab-main .cover{height: 108px;}
.b-listtab-main .title .s1 {width: 82px;}
.b-listtab-main .detail {overflow: hidden;}
.b-listtab-main .item{height:156px;}
}
@media only screen and (max-width:320px){
.b-listfilter-item .item a{margin: 5px 0 5px 5px;}
.b-listtab-main .item {
    margin: 0 0 20px 18px;
}
}
.eb-foot,#js-eb-feedback2,#js-eb-sidefeedback2{display:none}

.paging a {
    margin: 0 4px;
    width: 100px;
    border-radius: 2px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    cursor: pointer;
}
</style>

<section class="container">
<div class="fenlei">
<div class="b-listfilter" style="padding: 0px;">

<dl class="b-listfilter-item js-listfilter" style="padding-left: 0px;height:auto;padding-right:0px;">
<dd class="item g-clear js-listfilter-content" style="margin: 0;">
<a class="theme-a" href="yy.php?list=27_p1">热舞</a>
<a class="theme-a" href="yy.php?list=25_p1">动听</a>
<a class="theme-a" href="yy.php?list=26_p1">说唱</a>
<a class="theme-a" href="yy.php?list=28_p1">乐器</a>
<a class="theme-a" href="yy.php?list=29_p1">另类</a>
</dd>
</dl>
</div>
</div>
<div class="m-g">
<div class="b-listtab-main">

<div class="s-tab-main">
<ul class="list g-clear">


<?php   //    导航
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
if (empty($_GET['list'])) {
$arta= file_get_contents('http://www.yy.com/shenqu/clist/t10025_p1.html');
} else {
$arta= file_get_contents('http://www.yy.com/shenqu/clist/t100' .$_GET['list']. '.html');
	}
$uu1 = '#<img  src="(.*?)"   alt="(.*?)">#';
$qq = '#<p class="text">(.*?)</p>#';
$ww = '#<a href="(.*?)" title="(.*?)" class="target-link"   >#';

preg_match_all($uu1,$arta, $lj);
preg_match_all($qq,$arta, $rs);
preg_match_all($ww,$arta, $ee);
$bf = $lj[1];
$mz = $lj[2];
$gk = $rs[1];
$rr = $ee[1];
$tt = $ee[2];
$responsg = str_replace('/shenqu/play/id_','', $rr);
$responsa = str_replace('.html','', $responsg);
foreach ($bf as $gg => $qz1){
?>






<li class="item"><a class="js-tongjic" target="_blank" href="./playy.php?post=<?php echo $responsa[$gg];?>">
                            <div class="cover g-playicon">
                                <img src="<?php echo $qz1;?>">
                                <span class="hint"><?php echo $gk[$gg];?></span>                            </div>
                            <div class="detail">
                                <p class="title g-clear">
                                    <span class="s1"><?php echo $mz[$gg];?></span>
                                </p>
                                <p class="star"></p>
                            </div>
                        </a>
</li>



<?php
}
?>
</ul>
<div class="paging"> 
		 
		 <a href="<?php  
		 
		 $feng=$_GET['list']; 
		 $newstr = substr($feng,0,strlen($feng)-1); 
		 
		 $aaa = explode('_p',$feng); 
		 
		 
		 $hello1=$aaa[1]-1;
		 $boss="?list=".$newstr.$hello1;
		 echo $boss;
		 ?> " target="_self">上一页</a>
		 
		 
		 <a href="
		 
		 <?php  $feng=$_GET['list']; 
		 $newstr = substr($feng,0,strlen($feng)-1); 
		 
		 $aaa = explode('_p',$feng); 
		 
		 
		 $hello1=$aaa[1]+1;
		 $boss="?list=".$newstr.$hello1;
		 echo $boss;
		 ?>" target="_self">下一页</a>
         
         <a href="javascript:void(0);">第<?php echo $hello1-1;?>页</a>
         
</div>


<div class="asst asst-list-footer"><?php echo $aik["tv_ad"];?></div></section>
<?php
include "footer.php";
?></body></html>
