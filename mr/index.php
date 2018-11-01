<?php
include ('../inc/aik.config.php');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo $aik['sitename'];?>-每日一刊</title>
		<meta charset="utf-8" />
        <?php $json =  json_decode(file_get_contents("http://meiriyikan.cn/api/json.txt")); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		  <meta name="keywords" content="<?php echo $aik['title'];?>，每日一刊 每日一文  每日一笑 每日一图 每日一语 优美文章 天天更新 每日热点 ">
    <meta name="description" content="<?php echo $aik['title'];?>，<?php echo $aik['sitename'];?>。">
    <meta name="baidu-site-verification" content="DSXNBi8EHU" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  <style type="text/css">
    	.nav-logo{
    		float: left;
			
		    height: 40px;
		    margin-top: 0;
			padding-left:3%;
		    overflow: hidden;
			
    	}
    	.nav-logo a{
    		margin: 0;
    		padding: 0;
    	}
		.image{ width:100%;}
  </style>
  				<link rel="stylesheet" href="assets/css/news.css" />
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
			  <header id="header" class="alt">
				  <img class="nav-logo" src="images/logo.png">
						<h1><a href="index.html"></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>菜单</span></a>
									<div id="menu">
										<ul>
											<li><a href="../dh.html">导航</a></li>

											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
			  
					<section id="banner">
					  
						<div class="inner">
						
						  <h2>-每日一刊</h2>
						  <p>刊号:<?php echo date(Ymd); ?><br /></p>
							
							<ul class="actions">
								<li><a href="#article" class="button special">阅读</a></li>
							</ul>
						</div>
						<a href="#article" class="more scrolly">Learn More</a>
					</section>

                <!-- 最新资讯 -->


			  <section id="news" class="wrapper style5">
				<div class="inner">
				
				<span class="badge pull-left">聚焦热点</span><br>
				 
				 <?php 
				 foreach( $json->news as $unit){
				$news_title= $unit->news_title;
				$news_url= $unit->news_url;
				$news_img= $unit->news_img;
				$news_time= $unit->news_time;
				$news_content= $unit->news_content;
echo '<div class="media our-news-item">
			<a href="'.$news_url.'"><news-title class="media-heading">'.$news_title.'</news-title></a>
			  <div class="media-left">
				<a class="news-img" href="'.$news_url.'">
				  <img class="media-ob" src="'.$news_img.'">
				</a>
			  </div>
			  <div class="media-body">
				<p>'.$news_content.'</p>
				<div class="dynamic-li">
				  <span>来源：新华网<br>时间：'.$news_time.'</span>
				</div>
			  </div>
			</div>';
}
				 ?>

				  <hr>

                    <!-- 每日一文 -->

                    <span id="article" class="badge pull-left">精选美文</span><br>

				  <h3><?php echo $json->article_title; ?></h3>
				  <h4><?php echo $json->article_author; ?></h4>
				  <?php echo $json->article_content; ?>

				  <hr>

				  <span class="badge pull-left">每日一图</span><br>


				  <h4><?php echo $json->img_title; ?></h4>
				  
				  <img class="image" src="<?php echo $json->img_url; ?>" >
				
				  <p><?php echo $json->img_content; ?></p>

			  <hr>
				  <span class="badge pull-left">历史上的今天</span><br>

				<?php echo $json->lishi; ?>
				</div></section>
				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">

							<header class="major">
								<h2><?php echo $json->yiyu; ?><br />
								</h2>

							</header>
						
						</div>
					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
						<li>官方平台：<a href="../index.php" >每日一刊</a> </li>
						
							<li>All rights reserved&copy;<?php echo $aik['sitename'];?></li><li>发行商：<a href="../dh.html">每日一刊</a>           最新新闻资讯信息</li>
						</ul>

						
						
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/loading.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<!--百度收录自动推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
	</body>
</html>



