<?php
$id = $_GET['id'];
$db = mysql_connect("127.0.0.1", "heshan", "90092729") or die("connect failed.");
mysql_select_db("hs_blog", $db) or die("select failed.");
$sql = "delete from blog where id=${id}";
$result = mysql_query($sql);
mysql_close($db);
header("location: manage_post.php");
?>
