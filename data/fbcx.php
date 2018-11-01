<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<?php
if (is_file("./data/aik.seturl.php")) {
    include "./data/aik.seturl.php";
    if (is_array($seturl)) {
        if (count($seturl["title"]) > 0) {
            $i = 0;
            while ($i < count($seturl["title"])) {
                $urls = array("name" => $seturl["title"][$i], "urls" => array("type" => array($seturl["type"][$i]), "url" => array($seturl["newurl"][$i]), "ly" => array("×Ô¶¨Òå")));
                $mbz = str_replace("+", "imjh", base64_encode($seturl["newurl"][$i]));
                ?>
                <li class="item">
                    <a class="js-tongjic"
                                    href="mplay.php?id=<?php echo $seturl["type"][$i]; ?>&url=<?php echo $mbz; ?>&name=<?php echo $seturl["title"][$i]; ?>"
                                    target="_blank">
                    <div class="cover g-playicon">
                        <img src="<?php echo $seturl["img"][$i]; ?>"
                                                       alt="<?php echo $seturl["title"][$i]; ?>"><span
                                class="hint"></span></div>
                    <div class="detail">
                        <p class="title g-clear">
                            <span class="s1"><?php echo $seturl["title"][$i]; ?></span>
                            <span class="s2"></span></p>
                        <p class="star"></p></div>
                </a></li> <?php
                $i = $i + 1;
            }
            ?></ul></div></div>
            <div class="clearfloat"></div><?php
        }
    }
}
