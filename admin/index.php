<?php 
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>蜜爱柚影视管理后台 - Powered by 聚合直播平台开源</title>
<meta name="keywords" content="蜜爱柚源码" />
<meta name="description" content="蜜爱柚影视，聚合直播平台" />
<link href="./images/woaik.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
</head>
<body>
<?php $nav = 'home';include('head.php'); ?>
<div id="hd_main">
   <div style="margin:20px;">

      <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td colspan="2" align="center">欢迎使用蜜爱柚影院管理系统！</td>
    </tr>
  <tr>
    <td align="right">当前使用版：</td>
    <td><span>V3.6.5</span></td>
  </tr>
  <tr>
    <td align="right">最新版：</td>
    <td><a href="https://pan.baidu.com/s/1kVIe1Bx" target="_blank"><font color="#FF0000">点击查看</font></a></td>
  </tr>
  <tr>
    <td width="213" align="right">服务器操作系统：</td>
    <td width="387"><?php $os = explode(" ", php_uname()); echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?>)</td>
  </tr>
  <tr>
    <td width="213" align="right">服务器解译引擎：</td>
    <td width="387"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
  </tr>
  <tr>
    <td width="213" align="right">PHP版本：</td>
    <td width="387"><?php echo PHP_VERSION?></td>
  </tr>
  <tr>
    <td align="right">源码：</td>
    <td>蜜爱柚二次优化修复多功能开源版</td>
  </tr>
  <tr>
    <td align="right">allow_url_fopen：</td>
    <td><?php echo ini_get('allow_url_fopen') ? '<span class="green">支持</span>' : '<span class="red">不支持</span>'?></td>
  </tr>
  <tr>
    <td align="right">curl_init：</td>
    <td><?php if ( function_exists('curl_init') ){ echo '<span class="green">支持</span>' ;}else{ echo '<span class="red">不支持</span>';}?></td>
  </tr>

<tr>
    <td align="right">/data/目录权限检测：</td>
    <td><?php echo is_writable('../data/') ? '<span class="green">可写</span>' : '<span class="red">不可写</span>'?></td>
  </tr>  

  <tr>
    <td colspan="2" style="line-height:220%; text-indent:28px;">源码交流群<font color="red">（①号QQ群:50532281（已满），
</br>站长QQ1：56146737</font></a>，感谢朋友们的支持！</br>更多使用帮助及精品源码请移步：<a href="https://dtmbw.com/" target="_blank">https://pan.baidu.com/s/1kVIe1Bx</a></font></br></br>
3.6.5版本更新：</br>
1.修复站外影视资源采集，增加更多站外资源搜索功能。由于采集不同资源网站，请先输入关键字进行搜索，可在片名加上影片的第几部的数字，如；侏罗纪公园或者输入侏罗纪公园2，详细说明请看源码使用说明.TXT文档</br>
2.修复更新上页、下页不显示bug问题。</br>
3.电视剧部分增加播放源，在线音乐搜索试听或下载源码更新。</br>
4.新增加最新影视资源网采集功能。</br>
5.修复YY舞曲采集，小幅度优化</br>
6.首页自动生成静态页面，增加加载速度。</br>
7.电视直播更新采集。</br>
8.侵权视频页面修改为跳转404。</br>
9.注意：空间里面自动会生成index.html缓存文件，如更新源码或修改文件源码信息，请在空间里面找到index.html这个文件删除即可！再刷新页面访问就会更新了！</br>
10.本源码程序为多功能版开源码！修复了其他一些小BUG。</br>

</td> 
    </tr>
   
</table>

   </div>

</div>
<?php include('foot.php'); ?>
</body>
</html>
