<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
$info = file_get_contents("http://demo.dataoke.com/");
$vname = "#title=\"(.*?)\" style=\"font-size: 16px;\"#";
$imgg = "#<img src=\"(.*?)\" height=\"272\" style=\"border: 0;max-width:272px;\"/>#";
$lianjie = "#<a rel=\"nofollow\" data-gid=\"(.*?)\" href=#";
$quan = "#<span class=\"coupon theme-bg-color-9 theme-color-1 theme-border-color-1\">(.*?)</span>#";
$quanz = "#<span>(.*?)</span>#";
$quany = "#</i>(.*?)</p>#";
$quanh = "#<div class=\"buy-price\">(.*?)</div>#";
preg_match_all($vname, $info, $namearr);
preg_match_all($imgg, $info, $imggarr);
preg_match_all($lianjie, $info, $lianarr);
preg_match_all($quan, $info, $quanarr);
preg_match_all($quany, $info, $quanyarr);
preg_match_all($quanh, $info, $quanharr);
preg_match_all($quanz, $info, $quanzarr);
$zimg = $imggarr[1];
$name = $namearr[1];
$iidd = $lianarr[1];
$daiq = $quanarr[1];
$daih = $quanharr[1];
$daiy = $quanyarr[1];
$daiz = $quanzarr[1][5];
foreach ($iidd as $key => $iddd) {
    $link1 = $aik["dtk_ad"] . "/index.php?r=l/d&id=" . $iddd . "&u=" . $aik["dtk_id"];
    ?>
    <style>.s0 {
            word-wrap: break-word;
            font-size: 13px;
            color: #999;
            width: 190px;
            height: 40px;
            line-height: 15px;
        }
    </style>
    <li class='item'><a class='js-tongjic' href='<?php echo $link1; ?>' title='<?php echo $zname; ?>' target='_blank'>
            <div class='cover g-playicon'>
                <img src='<?php echo $zimg[$key]; ?>' alt='<?php echo $zname; ?>'/>
                <span class='pay' style=' width:30%;background:#ff435e;'><?php echo $daiq[$key]; ?></span>
                <span class='hint'
                      style='text-decoration: line-through;right:50px;right:100px;'><?php echo $daiy[$key]; ?></span>
                <span class='hint' style='right:50px;'><?php echo $daiz; ?></span>
                <span class='hint'
                      style='background:#fef07e;width: 40px; height:30px; line-height:30px;text-align: center; font-size:14px; font-weight:bold; color:#ff435e;'><?php echo $daih[$key]; ?></span>
            </div>
            <div class='detail'>
                <p class='title g-clear' style=' margin-top:5px;'>
                    <span class='s0'><?php echo $name[$key]; ?></span>
                </p>
            </div>
        </a>
    </li>
    <?php
} ?>
