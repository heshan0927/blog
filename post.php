<!DOCTYPE html>
<html>
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
	<head>
		<meta charset="utf-8" />
		<title><?php echo $row['title']; ?></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<link rel="stylesheet" type="text/css" href="css/interactive-svg.css" />

		<style>

			main {
				background-color: #ffffff;
				margin: 0 auto;
				box-shadow: 0px 1px 5px #888;
			}
			main.container-fluid {
				padding: 0;
			}
			header {
				background: rgb(236, 236, 236);
			}
			header h1 {
				float: left;
				text-align: center;
				margin: 2% 2% 0 2%;
				width: 40%;
				font-size: 250%;
				line-height: 2.5em;
				font-weight: 300;
				color: #A55040;
				text-shadow: 1px 1px 5px #EEE;
			}
			#InteractiveSVG {
				width: 52%;
				height: 100px;
				margin: 3% 4% 2% 0;
				float: right;
			}
			.article_info {
				text-align: center;
				color: #949292;
			}
			.info {
				margin: 0 0 4% 2%;
			}
			.article {
				padding: 2% 5%;
			}
			figure img {
				max-height: 400px;
				padding: 1%;
				border: 3px solid #f5bca8;
			}
			.article p,.article li{
				font-size: 1.1em;
				line-height: 1.6;
			}
			.article ul,.article ol {
				padding-left: 20px;
			}
			.page_up {
				float: left;
				padding-left: 20px;
			}
			.page_down {
				float: right;
			}
			.page_turn {
				font-size: 150%;
				font-style: italic;
				height: 30px;
				padding: 0 1% 5% 1%;
			}
			.page_turn a{
				color: #A55040;
			}
		</style>
	</head>
	<body>
		<header id = "header">
		</header>
			<main class="container-fluid">
				<header>
					<div id="svg" class="svgLoaded">
						<h1 id="title"><?php echo $row['title']; ?></h1>
						<svg class="hidden-xs hidden-sm" version="1.1" id="InteractiveSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 100">
							<g id="quote-left-brace">
								<path fill="#f5bca8" d="m0,45.979561c5,0 7,-2.525337 7,-7.574852l0,-27.239114
								c0,-6.039649 4.045013,-11.165595 9.61499,-11.165595l0.38501,0l0,6.74319l-0.38501,0
								c-1.66098,0 -3.61499,2.554549 -3.61499,4.422405l0,27.239106c0,5.601337 -2.151001,9.334824 -6.05899,11.090298
								c3.903992,1.872356 6.05899,5.49345 6.05899,11.094803l0,27.239117c0,1.867874 1.95401,4.330246 3.61499,4.330246
								l0.38501,0l0,6.743187l-0.38501,0c-5.569,0 -9.61499,-5.033791 -9.61499,-11.073433l0,-27.239117
								c0,-5.049538 -2,-7.580479 -7,-7.580479l0,-7.029762z">
							</path>
						</g>
						<g id="quote-right-brace">
							<path fill="#f5bca8" d="m508,53.551006c-5,0 -7,2.550861 -7,7.651447l0,27.51461
							c0,6.100746 -4.643005,11.184319 -10.210999,11.184319l-0.789001,0l0,-6.811394l0.789001,0
							c1.659973,0 4.210999,-2.487297 4.210999,-4.372925l0,-27.51461c0,-5.657982 2.150024,-9.42923 6.059021,-11.202457
							c-3.903992,-1.891296 -6.059021,-5.549011 -6.059021,-11.207012l0,-27.513473
							c0,-1.886749 -2.551025,-4.467134 -4.210999,-4.467134l-0.789001,0l0,-6.81139l0.789001,0
							c5.567993,0 10.210999,5.177788 10.210999,11.278524l0,27.514609c0,5.100594 2,7.65715 7,7.65715l0,7.099735z">
						</path>
					</g>
					<rect x="30" y="10" fill="none" width="450" height="80"></rect>
					<text id="quote-text" transform="matrix(1 0 0 1 30 30)" style="font-size: 110%;">				
						<tspan x="5" y="0" fill="#949292"><?php echo substr($row['digest'], 0, 84); ?></tspan>
						<tspan x="5" y="25" fill="#949292"><?php echo substr($row['digest'], 84, 84); ?></tspan>
						<tspan x="5" y="50" fill="#949292"><?php echo substr($row['digest'], 168, 84); ?></tspan>
					</text>
					
				</text>
			</svg>
		</div>
		<div class="article_info">
			<span class="info glyphicon glyphicon-time"></span>
			<span><?php echo $row['time']; ?></span>
			<span class="info glyphicon glyphicon-user"></span>
			<span><?php echo $row['author']; ?></span>
			<span class="info glyphicon glyphicon-tags"></span>
			<span><?php echo $row['tag']; ?></span>
		</div>
	</header>
	<article class="article">
		<figure>
			<img src="<?php echo $row['head_pic']; ?>">
		</figure>
		<div class="content">
			<?php echo $row['content']; ?>
		</div>
	</article>
	<div class="page_turn">
		<?php 
			$sql ="select id from blog where id<$id order by id desc limit 1"; //上一篇文章 
			$result = mysql_query( $sql ); 
			if( mysql_num_rows( $result ) ) { 
				$previous_page = mysql_fetch_array( $result ); 
				echo "<a class='page_up' 
				href='/~cherry/post.php?id=${previous_page['id']}' target='_blank'>
				<span class='glyphicon glyphicon-arrow-left'></span>上一篇</a>";
			} 
			else { 
				echo "<span class='page_up'>没有了</span>"; 
			} 
			$sql ="select id from blog where id>$id limit 1";//下一篇文章 
			$result = mysql_query( $sql ); 
			if( mysql_num_rows( $result ) ) { 
				$next_page = mysql_fetch_array( $result );
				echo "<a class='page_down' 
				href='/~cherry/post.php?id=${next_page['id']}' target='_blank'>下一篇
				<span class=' glyphicon glyphicon-arrow-right'></span></a>";
			} 
			else { 
				echo "<span class='page_down'>没有了</span>"; 
			} 
			?>
		</div>
		<?php    
	}
	mysql_close($db);
	?>				
</main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/headroom.js"></script>

<!-- 导航栏动画及隐藏 -->
<script>
    $("#header").load("nav.html", "", function() { 
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

		$('.navbar-nav>li>a').hover(
			function(){
				$(this).addClass('animated bounce');
			},
			function(){
				$(this).removeClass('animated bounce');
			}
		);
	});
</script>
</html>
