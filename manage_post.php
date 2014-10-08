<!DOCTYPE html>
<html>
<head>
	<title>文章管理</title>
	<style>
		li {
			margin: 2% auto;
			max-width: 50%;
		}
		.button {
			float: right;
			margin: 0 1%;
		}
		.pagination {
			margin: 3% auto;
			max-width: 50%;
			text-align: center;
		}
		.pagination a {
			text-decoration: none;
			border: 1px solid #AAE;
			color: #15B;
		}

		.pagination a, .pagination span {
			display: inline-block;
			padding: 0.1em 0.4em;
			margin-right: 5px;
			margin-bottom: 5px;
		}

		.pagination .current {
			background: #26B;
			color: #fff;
			border: 1px solid #AAE;
		}

		.pagination .current.prev, .pagination .current.next{
			color:#999;
			border-color:#999;
			background:#fff;
		}

		h1 {
			text-align: center;
			margin: 4% auto;
		}
	</style>
</head>
<body>
	<main>
		<h1>文章管理</h1>
		<ol id="Searchresult">正在加载...</ol>
		<ol id="hiddenresult" style="display:none;">
		</ol>
		<div id="Pagination" class="pagination"><!-- 这里显示分页 --></div>
	</main> 
</div>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.pagination.js"></script>
<script>
	$.getJSON("read.php", function(articles) {
		var length =articles.length;
		for (var id in articles.reverse()) {
			var article = articles[id];
			var articleStr = "<li class='show' id='" + article.id + "'>" + 
			"<a href='post.php?id=" + article.id + "' target='_blank' class='title'>" + article.title + "</a>" +
			"<a href='del_post.php?id=" + article.id + 
			"' class='button' onclick=\"return confirm('是否删除？');\">[删除文章]</a>" +
			"<a href='edit_post.php?id=" + article.id + "' target='_blank' class='button'>[编辑文章]</a>" +
			"<span class='button'>" + article.time + "</span>" +
			"</li>";
			$('#hiddenresult').append(articleStr);
		}
		var items_per_page = 10;
		function pageselectCallback(page_index, jq){
			var max_elem = Math.min((page_index+1) * items_per_page, length);
			$("#Searchresult").html("");
			for(var i=page_index*items_per_page;i<max_elem;i++){
				$("#Searchresult").append($("#hiddenresult .show:eq("+i+")").clone());
			}
			return false;
		}
		$("#Pagination").pagination(length, {
			items_per_page: items_per_page,
			callback: pageselectCallback
		});
	});
</script>
</html>
