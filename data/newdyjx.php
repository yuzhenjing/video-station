<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include "./inc/config.php";
$info = file_get_contents("http://www.360kan.com/dianying/list.php?cat=all&year=all&area=all&act=all&rank=createtime");
$vname = "#<span class=\"s1\">(.*?)</span>#";
$vlist = "#<a class=\"js-tongjic\" href=\"(.*?)\">#";
$vstar = "#<p class=\"star\">(.*?)</p>#";
$vimg = "#<div class=\"cover g-playicon\">\r\n                                <img src=\"(.*?)\">#";
$nname = "#<span class=\"hint\">(.*?)</span>#";
$fname = "#<span class=\"s2\">(.*?)</span>#";
$array = array();
preg_match_all($vname, $info, $namearr);
preg_match_all($vlist, $info, $listarr);
preg_match_all($vstar, $info, $stararr);
preg_match_all($vimg, $info, $imgarr);
preg_match_all($nname, $info, $nnamearr);
preg_match_all($fname, $info, $fnamearr);
$i = 0;
while ($i < 12) {
	$gul = $listarr[1][$i];
	$zimg = $imgarr[1][$i];
	$zname = $namearr[1][$i];
	$fname = $fnamearr[1][$i];
	$nname = $nnamearr[1][$i];
	$zstar = $stararr[1][$i];
	$player = "play.php?play=" . $gul;
?>
		    <li  class='item'><a class='js-tongjic' href='<?php echo $player;?>' title='<?php echo $zname;?>' target='_blank'>
         <div class='cover g-playicon'>
          <img src='<?php echo $zimg;?>' alt='<?php echo $zname;?>' /> <span class='hint'><?php echo $nname;?></span>
         </div>
         <div class='detail'>
          <p class='title g-clear'>
		    <span class='s1'><?php echo $zname;?></span>
			<span class='s2'><?php echo $fname;?></span></p>
           <p class='star'><?php echo $zstar;?></p>
          </div>
         </a></li> <?php
	$i = $i + 1;
}
