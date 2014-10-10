<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>美食博客</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/head_pic.css" />
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<style>
		body {
			font-size: 140%
		}
		.main-content {
			background-color: #ffffff;
		}
		main {
			margin: 30px 0 0 0;
		}
		/*幻灯图*/
		.item img {
			width: 100%;
			height: 400px;
			overflow: hidden;
		}
		/*文章列表*/
		article .title {
			margin: 0;
			color: #fff;
			background-color: #a58478;	
			border-top-left-radius: 2px;
			border-top-right-radius: 2px;
			line-height: 2em;
			font-size: 180%;
			float: none;
		}
		article li {
		}
		article img {
			max-width: 100%;
			width: 250px;
			height:200px;
		}
		article .content {
			padding: 15px;
			margin-left: 280px;
			float: none;
			width: initial;
		}
		article .img {
			width: 280px;
			padding: 15px;
		}

		article .info {
			margin: 15px 0 0 2em;
		}
		.digest{
			font-size: 120%;
			text-indent: 2em;
			text-align: left;
			line-height: 1.6em;
			max-height: 100%;
			padding: 25px 0;
		} 
		.digest a {
			float: right;
			color: #f5bca8;
		}
		.digest a:hover {
			color: #f5bca8;
			outline: 0;
		}
		.list {
			margin: 30px 0;
			padding: 0;
			border-radius: 5px;
			box-shadow: 0px 1px 5px #888888;
			background-color: rgb(243, 243, 243);
			list-style-type:none;
		}
		/* aside */
		aside {
			margin: 3% 0 0 0;
			padding: 0;
			font-size: 100%;
		}
		.aside-box {
			border: 0;
			box-shadow: 0px 1px 3px #888;
		}
		aside ul {
			list-style-type:none;
			padding-left: 5%;
		}
		.aside-title {
			background-color: #91BBDA;
			font-size: 120%;
			padding: 5%;
			color: #fff;
		}
		h3.aside-title {
			margin-bottom: 0;
		}
		.aside-body {
			padding: 5%;
		}
		.aside-body .label {
			line-height: 2.5em;
			font-size: 100%;
		}
		.aside-body p {
			font-size: 90%;
			color: #635E5E;
		}
		.aside-body li {
			line-height: 2em;
			font-size: 120%;
		}
		.ec-circle{
			max-width: 250px;
			height: 250px;
			-webkit-border-radius: 210px;
			-moz-border-radius: 210px;
			border-radius: 50%;
			overflow: hidden;
			text-decoration: none !important;
			background: #FFFFFF url(images/tx.jpg) no-repeat center center;
			-webkit-box-shadow: 
			inset 0 0 1px 230px rgba(0,0,0,0.3),
			inset 0 0 0 7px #d5ad94;
			-moz-box-shadow: 
			inset 0 0 1px 230px rgba(0,0,0,0.3),
			inset 0 0 0 7px #d5ad94;
			box-shadow: 
			inset 0 0 1px 230px rgba(0,0,0,0.3),
			inset 0 0 0 7px #d5ad94;
			-webkit-transition: box-shadow 400ms ease-in-out;
			-moz-transition: box-shadow 400ms ease-in-out;
			-o-transition: box-shadow 400ms ease-in-out;
			-ms-transition: box-shadow 400ms ease-in-out;
			transition: box-shadow 400ms ease-in-out;
			/*For IE < 9 so that we have some kind of effect */
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
			display: block;
			outline: none;
		}
		.ec-circle-hover{
			-webkit-box-shadow: 
			inset 0 0 0 0 rgba(0,0,0,0.6),
			inset 0 0 0 13px #c18167,
			0 0 10px rgba(0,0,0,0.3);
			-moz-box-shadow: 
			inset 0 0 0 0 rgba(0,0,0,0.6),
			inset 0 0 0 13px #c18167,
			0 0 10px rgba(0,0,0,0.3);
			box-shadow: 
			inset 0 0 0 0 rgba(0,0,0,0.6),
			inset 0 0 0 13px #A18378,
			0 0 10px rgba(0,0,0,0.3);
			/*For IE < 9 so that we have some kind of effect */
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		}
		.ec-circle p{
			color: transparent;
			font-size: 2em;
			text-align: center;
			margin-top: 70%;
			text-shadow: 0px 0px 100px #42322C;
			-webkit-transition: text-shadow 400ms ease-in-out;
			-moz-transition: text-shadow 400ms ease-in-out;
			-o-transition: text-shadow 400ms ease-in-out;
			-ms-transition: text-shadow 400ms ease-in-out;
			transition: text-shadow 400ms ease-in-out;
		}
		.ec-circle-hover p{
			text-shadow: 0px 0px 1px red;
		}

		/* go to top*/
		.go-top {
			position: fixed;
			top: 90%;
			right: 7%;
		}
		.go-top a {
			display: block;
			cursor: pointer;
			outline: none;
		}
	</style>
</head>
<body>
	<header id="header">
	</header>
	<div class="container-fluid main-content">
		<main role="main" class="col-md-9">
			<!-- 幻灯图 -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active"><img src="images/1.jpg" alt="image1"/>
						<div class="carousel-caption">
							<h3>龙虾粉丝</h3>
						</div>
					</div>
					<div class="item"><img src="images/2.jpg" alt="image2"/>
						<div class="carousel-caption">
							<h3>意大利披萨</h3>
						</div>
					</div>
					<div class="item"><img src="images/3.jpg" alt="image3"/>
						<div class="carousel-caption">
							<h3>海鲜拼盘</h3>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only"></span>
				</a>
			</div>
			<!-- 文章列表 -->
			<article>
				<?php
				$id = $_GET["id"];
				$db = mysql_connect("127.0.0.1", "heshan", "90092729") or die("connect failed.");
				mysql_select_db("hs_blog", $db);
				if ($id == "") {
					$results = mysql_query("select * from blog order by id desc");
				} else {
					$results = mysql_query("select * from blog where id = ${id} order by id desc");
				}

				$records = array();
				while($row = mysql_fetch_array($results))
				{
					?>
					<li class="list row" id="<?php echo $row['id']; ?>">
						<h2 class="col-md-12 title"><?php echo $row['title']; ?></h2>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
							<div class="view">
								<div class="view-back">
									<span class="glyphicon glyphicon-heart">18</span>
									<span class="glyphicon glyphicon-eye-open">76</span>
									<a href="#">&rarr;</a>
								</div>
								<img  src="<?php echo $row['head_pic']; ?>" style="width:320px;height:200px">
							</div>
						</div>



						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
							<div class="article_info">
								<span class="info glyphicon glyphicon-time"></span>
								<span><?php echo $row['time']; ?></span>
								<span class="info glyphicon glyphicon-user"></span>
								<span><?php echo $row['author']; ?></span>
								<span class="info glyphicon glyphicon-tags"></span>
								<span><?php echo $row['tag']; ?></span>
							</div>
							<div class="digest">
								<p><?php echo substr($row['digest'], 0, 448); ?></p>
								<p><a href="post.php?id=<?php echo $row['id']?>" target="_blank">More &gt;&gt;</a></p>
							</div>
						</div>
					</li>

					<?php    
					}
					mysql_close($db);
					?>
				</article>
			</main>
			<aside class="col-md-3 hidden-xs hidden-sm">
				<a href="https://github.com/heshan0927/resume" id="circle" class="ec-circle" target="_blank"><p></p></a>
				<div class="aside-box">
					<h3 class="aside-title">热门文章</h3>
					<div class="aside-body">
						<ol>
							<li><a href="post.php?id=3">黄金三色蛋</a></li>
							<li><a href="post.php?id=3">鱼香肉丝</a></li>
							<li><a href="post.php?id=3">番茄炒蛋</a></li>
							<li><a href="post.php?id=3">清蒸鲈鱼</a></li>
							<li><a href="post.php?id=3">青椒肉丝</a></li>
						</ol>
					</div>
				</div>	
				<div class="aside-box">
					<h3 class="aside-title">热门标签</h3>
					<div class="aside-body">
						<span class="label label-primary">川菜</span>
						<span class="label label-warning">家常菜</span>
						<span class="label label-danger">西餐</span>
						<span class="label label-info">湘菜</span>
						<span class="label label-success">甜品</span>
						<span class="label label-warning">小吃</span>
						<span class="label label-success">烘焙</span>
						<span class="label label-info">快手菜</span>
						<span class="label label-success">烧烤</span>
						<span class="label label-primary">低脂</span>
						<span class="label label-danger">高蛋白</span>

					</div>
				</div>
				<div class="aside-box">
					<h3 class="aside-title">最新留言</h3>
					<div class="aside-body">
						<ul>
							<li>
								<a href="">浅眠</a>
								<p>嘿嘿~来看看~最近厨艺有很大进步。</p>
							</li>
							<li>
								<a href="">颜如玉</a>
								<p>岁月匆匆太匆匆,长驻在你心中</p>
							</li>
							<li>
								<a href="">张妈妈的厨房</a>
								<p>吃不胖！长不老！玩转美食到永远！</p>
							</li>
							<li>
								<a href="">Saraly</a>
								<p>加油！</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="aside-box">
					<h3 class="aside-title">友情链接</h3>
					<div class="aside-body">
						<ul>
							<li><a href="">下厨房</a></li>
							<li><a href="">99道私房菜</a></li>
							<li><a href="">美食工厂</a></li>
							<li><a href="">天天美食</a></li>
							<li><a href="">美食天下</a></li>
							<li><a href="">吃货福利</a></li>
						</ul>
					</div>
				</div>	
			</aside>
		</div>
		<footer class="clearfix col-md-12">

		</footer>
		<a class="go-top" href="#" id="btt"><img src='images/top.png' /></a>
	</body>

	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/headroom.js"></script>
	<!-- headroom 隐藏顶部及gotop按钮 -->
	<script>
		function initPage() {
			var myElement = document.querySelector(".navbar-fixed-top");
			var headroom  = new Headroom(myElement,{
				"tolerance": 5,
				"offset": 50,
				"classes": {
					"initial": "animated",
					"pinned": "fadeInDown",
					"unpinned": "fadeOutUp"
				}
			});
			headroom.init(); 
			var bttHeadroom = new Headroom(document.getElementById("btt"), {
				"tolerance" : 5,
				"offset" : 50,
				"classes" : {
					"initial": "animated",
					"pinned": "fadeInDown",
					"unpinned": "fadeOutUp"
				}
			});
			bttHeadroom.init();
			// 导航栏动画
			$('.navbar-nav>li>a').hover(
				function(){
					$(this).addClass('animated bounce');
				},
				function(){
					$(this).removeClass('animated bounce');
				}
				);
			// aside头像
			$('#circle').hover(
				function(){
					$(this).addClass('ec-circle-hover animated swing');
				},
				function(){
					$(this).removeClass('ec-circle-hover animated swing');
				}
				);
			// 文章题图动画
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['js/jquery-1.8.3.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {

					if( url === 'js/jquery.hoverfold.js' ) {
						$( 'article' ).hoverfold();
					}

				}
			});
		}
		$("#header").load("nav.html", "", initPage); 
	</script>
	</html>
