<?php
include ('../../inc/aik.config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=edge" >
<meta name="viewport"   content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
<title><?php echo $aik['sitename'];?>在线直播解析播放器</title>
<!--<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>-->
<script src=""></script><link rel="stylesheet" href="http://g.alicdn.com/de/prismplayer/2.5.0/skins/default/aliplayer-min.css" />
<script type="text/javascript" src="http://g.alicdn.com/de/prismplayer/2.5.0/aliplayer-min.js"></script>
</head>
<body>
 <div  class="prism-player" id="J_prismPlayer" style="position: absolute;left:0%;"></div>
 <script>
    var player = new Aliplayer({
    id: "J_prismPlayer",
         autoplay: false,
         isLive:true,
         playsinline:true,
         width:"100%",
         height:"100%",
         controlBarVisibility:"click",
         useH5Prism:false,
         useFlashPrism:false,
         source:"<?php echo $_GET['url'];?>",
         cover:"",
         skinLayout:[{"name":"H5Loading","align":"cc"},
                {"name":"infoDisplay","align":"cc"},
                {"name":"controlBar","align":"blabs","x":0,"y":0,"children":[{"name":"playButton","align":"tl","x":15,"y":26},
                {"name":"fullScreenButton","align":"tr","x":20,"y":25},
                {"name":"volume","align":"tr","x":20,"y":25},
                {"name":"timeDisplay","align":"tl","x":10,"y":24},
                {"name":"streamButton","align":"tr","x":20,"y":23},
                {"name":"progress","align":"tlabs","x":0,"y":0}]},
                {"name":"bigPlayButton","align":"blabs","x":30,"y":80}]
         },function(player){
            console.log("播放器创建了。");
          }
    );
  </script>
  </div>

<b>【提示:】视频不会自动播放，请点击三角形播放按钮进行观看直播！部分直播频道需加载一会，才有出现直播版块黑色区域然后点击播放按钮观看！或刷新一下页面！</b>
</div>
</body>
</html>
