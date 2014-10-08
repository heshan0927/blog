<?php
$id = $_GET["id"];
$db = mysql_connect("127.0.0.1", "heshan", "90092729") or die("connect failed.");
mysql_select_db("hs_blog", $db);
if ($id == "") {
	$results = mysql_query("select * from blog");
} else {
	$results = mysql_query("select * from blog where id = ${id}");
}

$records = array();
while($row = mysql_fetch_array($results))
{
    $record = array(
    	"id" => $row["id"],
    	"title" => $row["title"],
    	"content" => $row["content"],
    	"digest" => $row["digest"],
    	"head_pic" => $row["head_pic"],
    	"time" => $row["time"],
        "author" => $row["author"],
        "tag" => $row["tag"]
        );
    array_push($records, $record);
}
echo json_encode($records);
mysql_close($db);
?>

