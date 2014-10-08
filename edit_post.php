<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>编辑文章</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/common.css">
	<style>
		body{
			margin: 0;
			color: #958c88;
			background: #fcf2ee;
		}
		main {
			text-align: center;
			width: 60%; 
			background-color: #fff;
			margin-left: auto;
			margin-right: auto;
			padding: 0;
		}
		.btn {
			background-color: #f5bca8;
			color: #fff;
			width: 8%;
			height: 5%;
			font-size: 80%;
			border: 0;
			border-radius: 3px;
			margin: 0 0 15px 0;
		}
		h1 {
			font-size: 200%;
			padding: 1%;
		}
		#title {
			font-size: 90%;
		}
		#time {
			font-size: 90%
		}

		#content {
			/*width: 93%; */
			height: 20em;
			font-size: 100%;
			border: 2px solid #f5bca8;
		}
		label {
			margin-left: 2%;
		}
		p {
			font-size: 120%;
		}
		main input,textarea {
			border: 1px solid #f5bca8;
			color: #000;
		}
		#ueditor {
			margin: 0 auto;
			width: 95%;
		}
	</style>
	<script type="text/javascript" charset="utf-8" src="js/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="js/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<header id="header">
	</header> 
	<main role="main" class="container-fluid">
		<h1>编辑文章</h1>
		<form method="post" action="update_post.php" id="editor">
			<p class="row">
				<label for="title" class="col-md-1">标题</label>
				<input type="text" class="col-md-5" id="title" name="title" required>
				<label for="time" class="col-md-1">时间</label>
				<input type="text" id="time" name="time" class="col-md-4">
			</p>
			<p class="row">
				<label for="author" class="col-md-1">作者</label>
				<input type="text" class="col-md-5" id="author" name="author" required>
				<label for="tag" class="col-md-1">标签</label>
				<input type="text" class="col-md-4" name="tag" id="tag">
			</p>
			<p class="row">
				<label for="digest" class="col-md-1">文章摘要</label>
				<textarea class="col-md-5" name="digest" id="digest" cols="10" rows="2" required></textarea>
				<label class="col-md-1" for="head_pic">题图链接</label>
				<input class="col-md-4" name="head_pic" id="head_pic" rows="2" type="url">
			</p>
			<p>
				<script id="ueditor" type="text/plain">
				</script>
			</p>
			<p>
				<input type="submit" value="提交" class="btn" >
				<input type="hidden" id="article_id" name="id">
			</p>
		</form>
	</main>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script>
		$("#header").load("nav.html"); 
		<?php
		echo "var article_id = " . $_GET["id"] . ";\n";
		?>
		$('#article_id').attr('value', article_id);

		var time = new Date();
		$('#time').value = time.toLocaleString();
		var ue = UE.getEditor('ueditor', {
			textarea: "content",
			initialFrameHeight: 350,
			autoHeightEnabled: false
		});
		ue.ready(function(){
			$.getJSON("read.php?id=" + article_id, function(data) {
				$('#head_pic').attr('value',data[0].head_pic);
				$('#digest').text(data[0].digest);
				$('#title').attr('value',data[0].title);
				$('#author').attr('value',data[0].author);
				$('#tag').attr('value',data[0].tag);
				$('#time').attr('value',data[0].time);

				ue.setContent(data[0].content);
			});
		});
	</script>
</body>
</html>
