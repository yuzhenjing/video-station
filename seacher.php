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

if (!$_GET["sousuo"]) {
    $tiao = $aik["pcdomain"];
    ?>
    <meta http-equiv=refresh content='0; url=<?php echo $tiao; ?>'><?php
}
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="cache-control" content="no-siteapp">
        <title>《<?php echo $_GET["sousuo"]; ?>》-搜索结果-<?php echo $aik["title"]; ?></title>
        <link rel='stylesheet' id='main-css' href='css/style.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='main-css' href='css/seacher.css' type='text/css' media='all'/>
        <script type='text/javascript' src='http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js?ver=0.5'></script>
        <meta name="keywords" content="《<?php echo $_GET["sousuo"]; ?>》搜索结果">
        <meta name="description" content="<?php echo $aik["title"]; ?>-《<?php echo $_GET["sousuo"]; ?>》搜索结果">
        <!--[if lt IE 9]>
        <script src="js/html5.js"></script><![endif]-->
        <style>
            .w-mfigure {
                width: 18%;
                min-width: 150px;
                min-width: 100px;
                height: 180px;
                margin-left: 10px;
                margin-top: 0px;
                display: inline-block;
            }

            h4 {
                font-size: 12px
            }
        </style>
    </head>
<?php
include "header.php";
?>
    <base target='_blank'>
    <section class="container">
        <div style="text-align: center;padding: 10px 0;color: #FF7562;font-size: 12px;">温馨提示:请点击搜索结果的标题或封面图进行观看</div>
        <strong class="single-strong">全网搜索(来自爱奇艺/优酷/腾讯/乐视等)</strong>
        <div class="am-container main" style="padding:0">
            <?php
            $url = "https://video.360kan.com/v?ie=utf-8&src=360sou_home&q=" . $_GET["sousuo"] . "&_re=0";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, "Dalvik/1.6.0 (Linux; U; Android 4.1.4; DROID RAZR HD Build/9.8.1Q-62_VQW_MR-2)");
            curl_setopt($ch, CURLOPT_REFERER, "-");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $str = curl_exec($ch);
            curl_close($ch);
            if ($x = strpos($str, "<div  id='js-longvideo' data-logger='b=index_so'>")) {
                $str = substr($str, $x);
            }
            if ($x = strpos($str, "<div class=\"index-others    js-others\">")) {
                $str = substr($str, 0, $x);
            }
            if ($x = strpos($str, "<div  class=\"a-engineso-ad\">")) { /* <div  class=\"a-engineso-ad\"> <div class=\"button-container g-clear\"> */
                $str = substr($str, 0, $x);
            }
            $tihuan = str_replace("/index.php?kw", "?", $str);
            $tihuan = str_replace("http://www.360kan.com", "play.php?play=", $tihuan);
            $tihuan = str_replace("?ptag=360kan.tv.free", "?ptag=woaik", $tihuan);
            $tihuan = str_replace("http://v.qq.com", "splay.php?play=http://v.qq.com", $tihuan);
            $tihuan = str_replace("http://www.tudou.com", "splay.php?play=http://www.tudou.com", $tihuan);
            $tihuan = str_replace("http://www.iqiyi.com", "splay.php?play=http://www.iqiyi.com", $tihuan);
            $tihuan = str_replace("http://www.letv.com", "splay.php?play=http://www.letv.com", $tihuan);
            $tihuan = str_replace("http://www.le.com", "splay.php?play=http://www.le.com", $tihuan);
            $tihuan = str_replace("http://cps.youku.com/redirect.html?id=0000028f&url=", "splay.php?play=", $tihuan);
            $tihuan = str_replace("http://www.mgtv.com", "splay.php?play=http://www.mgtv.com", $tihuan);
            $tihuan = str_replace("http://tv.sohu.com", "splay.php?play=http://tv.sohu.com", $tihuan);
            $tihuan = str_replace("http://v.pptv.com", "splay.php?play=http://v.pptv.com", $tihuan);
            $tihuan = str_replace("http://film.sohu.com", "splay.php?play==http://film.sohu.com", $tihuan);
            $tihuan = str_replace("http://www.wasu.cn", "splay.php?play=http://www.wasu.cn", $tihuan);
            $tihuan = str_replace("> <img src=", "> <img ", $tihuan);
            $tihuan = str_replace("data-src", "src", $tihuan);
            $tihuan = str_replace("乐视</a>", "乐视播放线路</a>", $tihuan);
            $tihuan = str_replace("爱奇艺</a>", "爱奇艺播放线路</a>", $tihuan);
            $tihuan = str_replace("腾讯</a>", "腾讯播放线路</a>", $tihuan);
            $tihuan = str_replace("优酷</a>", "优酷播放线路</a>", $tihuan);
            $tihuan = str_replace("土豆</a>", "土豆播放线路</a>", $tihuan);
            $tihuan = str_replace("(付费)", "播放线路", $tihuan);
            $tihuan = str_replace("来源", "切换线路", $tihuan);
            $tihuan = str_replace("<h3 class=\"title\">", "<h3 class=\"title\">标题：", $tihuan);
            $tihuan = str_replace("><span class='btn-play-icon'>立即播放</span></a>", " hidden=\"hidde\"></a><span class='btn-play-icon'>请点击视频标题进行观看</span>", $tihuan);//立即播放-请点击视频标题进行观看
            $tihuan = str_replace("<span class=\"new-ico-jiao\"></span><span class='new-ico-fufei'></span><span class='new-ico-fufeitext js-fufeitext'></span>", "", $tihuan);
            $tihuan = str_replace("?vfm=", "&vfm=", $tihuan);
            $tihuan = str_replace("http://v.youku.com", "splay.php?play=http://v.youku.com", $tihuan);
            $szz = '#js-playicon" title="(.*?)"\s*data#';
            $szz1 = '#a href="(.*?)" class="g-playicon js-playicon"#';
            $szz2 = '#<img src="(.*?)" alt="(.*?)" \/>[\s\S]+?</div>#';
            //            $szz3 = '#(<b>(.*?)</b><span>(.*?)</span></li></ul>)?<ul class="index-(.*?)-ul g-clear">(\n\s*)?<li>(\n\s*)?<b>类型：</b>(\n\s*)?<span>(.*?)</span>#';
            //            $szz4 = '#<span class="playtype">(.*?)</span>#';
            //            $szz5 = '#href="(.*?)" class="btn#';
            preg_match_all($szz, $tihuan, $sarr);
            preg_match_all($szz1, $tihuan, $sarr1);
            preg_match_all($szz2, $tihuan, $sarr2);
            preg_match_all($szz3, $tihuan, $sarr3);
            preg_match_all($szz4, $tihuan, $sarr4);
            preg_match_all($szz5, $tihuan, $sarr5);
            $one = $sarr[1];
            $two = $sarr1[1];
            $three = $sarr2[1];
            ?>
            <div class="excerpts-wrapper">
                <div class="excerpts">
                    <div class="zhan">
                        <ul>
                            <?php
                            foreach ($one as $ni => $cs) {
                                echo "<li><a href='$two[$ni]'><b></b><img src='$three[$ni]'/><span>$cs</span></a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <p id="more"
               style="text-align: center;height: 50px;background: #eee;line-height: 50px;font-size: 16px;cursor: pointer;"
               onclick="ckmore()"> 点击查看被隐藏的搜索结果>> </p>
            <?php
            $link = $aik["zhanwai"];
            $a = $link . "/index.php/search?wd=" . rawurlencode($_GET["sousuo"]);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $a);
            curl_setopt($curl, CURLOPT_HEADER, 1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($curl);
            curl_close($curl);
            $response = strstr($response, "<div class=\"video-list\">");
            $response = strstr($response, "<div class=\"clr\"></div>", true);
            $response = str_replace("/attachment", $link . "/attachment", $response);
            $response = str_replace("/index.php/show/index/", "mplay.php?mso=", $response);
            ?>
        </div>
        </div>
        <strong class="single-strong">站外搜索列表Ⅰ</strong>
        <div class="excerpts-wrapper">
            <div class="excerpts">
                <div class="zhan"><?php echo $response; ?></div>
            </div>
        </div>
        <?php
        $link0 = $aik["zhanwai1"];
        $sourl = $link0 . "/index.php?m=vod-search";
        $post_data = array("wd" => $_GET["sousuo"]);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $sourl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = str_replace("/?m=vod-detail-id-", "vplay.php?vod=", $output);
        $output = str_replace("?m", "?gourl", $output);
        $output = str_replace(".html", "", $output);
        $pattern = "#<span class=\"xing_vb4\"><a href=\"(.*?)\" target=\"_blank\">(.*?)</a></span>#";
        preg_match_all($pattern, $output, $matches);
        $szlen = count($matches[0]);
        ?>
        <strong class="single-strong">站外搜索列表Ⅱ</strong>
        <ul class="mvul">
            <?php $xh = 0;
            while ($xh < $szlen) { ?>
                <li><?php echo $matches[0][$xh]; ?></li><?php
                $xh = $xh + 1;
            }
            ?>
        </ul>
        <div class="bdwp">
            <strong class="single-strong">百度网盘搜索列表</strong>
            <ul class="mvul">
                <li><span class="xing_vb4">
                        <a href="bdpan.php?sousuo=<?php echo $_GET["sousuo"]; ?>"
                           target="_blank"><?php echo $_GET["sousuo"]; ?> 百度网盘搜索结果 点击查看</a>
                    </span>
                </li>
            </ul>
        </div>
        <div class="bdwp">
            <strong class="single-strong">磁力搜索列表</strong>
            <ul class="mvul">
                <li><span class="xing_vb4">
                        <a href="cili.php?sousuo=<?php echo $_GET["sousuo"]; ?>&qiehuan=1"
                           target="_blank"><?php echo $_GET["sousuo"]; ?> 磁力搜索结果 点击查看</a>
                    </span>
                </li>
            </ul>
        </div>
        </div></div></div>
        <div style="clear: both;"></div>
    </section>

    <script>
        if (document.getElementById("js-longvideo-container") != undefined) {
            var more = document.getElementById('js-longvideo-container');
            var cimore = document.getElementById('more');
            more.style.display = 'none';

            function ckmore() {
                more.style.display = 'block';
                cimore.style.display = 'none';
            }
        } else {
            var cimore = document.getElementById('more');
            cimore.style.display = 'none';
        }

    </script>
    <script type="text/javascript">
        var hei = $('.a-engineso-body').height();
        var ben = $('.excerpts').height();
        if (hei < 0 && ben < 0) {
            if (confirm("抱歉.搜索内容无结果,是否为您跳转到主页")) {
                window.location.href = '/';
            }
            else {
                window.location.href = '/';
            }
        }
    </script><?php
include "footer.php";
