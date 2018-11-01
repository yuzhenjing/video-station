<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
$info = file_get_contents("http://www.360kan.com/dongman/list");
$vname = "#<span class=\"s1\">(.*?)</span>#";
$vlist = "#<a class=\"js-tongjic\" href=\"(.*?)\">#";
$vstar = "# <p class=\"star\">(.*?)</p>#";
$nname = "#<span class=\"hint\">(.*?)</span>#";
$vimg = "#<div class=\"cover g-playicon\">\r\n                                <img src=\"(.*?)\">\r\n#";
$bflist = "#<a data-daochu(.*?) href=\"(.*?)\" class=\"js-site-btn btn btn-play\"></a>#";
$array = array();
preg_match_all($vname, $info, $namearr);
preg_match_all($vlist, $info, $listarr);
preg_match_all($vstar, $info, $stararr);
preg_match_all($vimg, $info, $imgarr);
preg_match_all($fname, $info, $fnamearr);
preg_match_all($nname, $info, $nnamearr);
$i = 0;
while ($i < 12) {
	$gul = $listarr[1][$i];
	$cd = $host . "/alist.php?id=" . $gul;
	$guq = $listarr[1][$i];
	$_GET["id"] = $gul;
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
