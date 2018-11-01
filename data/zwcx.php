<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
$info = file_get_contents($aik["zhanwai"]);
$szz1 = "#<li><a href=\"/index.php/show/index/(.*?)\"><b></b><img src=\"(.*?)\" /><span>(.*?)</span></a></li>\r\n#";
preg_match_all($szz1, $info, $sarr1);
$i = 0;
while ($i < 12) {
	$zname = $sarr1[3][$i];
	$two = $sarr1[1][$i];
	$zimg = $sarr1[2][$i];
	$link = "mplay.php?mso=" . $two;
?>
		   <li  class='item'><a class='js-tongjic' href='<?php echo $link;?>' title='<?php echo $zname;?>' target='_blank'>
         <div class='cover g-playicon'>
          <img src='<?php echo $zimg;?>' alt='<?php echo $zname;?>' />
         
         </div>
         <div class='detail'>
          <p class='title g-clear'>
		    <span class='s1'><?php echo $zname;?></span></p>
          </div>
         </a></li><?php
	$i = $i + 1;
}
