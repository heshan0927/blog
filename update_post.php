<?php 

$title    = mysql_escape_string($_POST["title"]);
$content  = mysql_escape_string($_POST["content"]);
$digest   = mysql_escape_string($_POST["digest"]);
$head_pic = mysql_escape_string($_POST["head_pic"]);
$author   = mysql_escape_string($_POST["author"]);
$tag      = mysql_escape_string($_POST["tag"]);
$id       = mysql_escape_string($_POST["id"]);
$db       = mysql_connect("127.0.0.1", "heshan", "90092729") or die("connect failed.");

mysql_select_db("hs_blog", $db) or die("select failed.");

$sql = "update blog set title = '${title}', content = '${content}', digest = '${digest}', head_pic = '${head_pic}', author = '${author}', tag = '${tag}' where id=${id}";
$result     = mysql_query($sql);

mysql_close($db);
if ($result) {
	echo "<script>alert('修改文章成功');window.location.href='/~cherry/article_show.php?id=${id}'</script>";
} else {
	echo "<script>alert('修改文章失败');window.location.href='/~cherry/article_editor.php?id=${id}'</script>";
}
?>
