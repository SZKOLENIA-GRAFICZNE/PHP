<?php 
require_once('db.php');
$item_id = $_REQUEST['item_id'];
$author_id = $_REQUEST['author_id'];
$content = $_REQUEST['content'];

$query = $db->prepare("INSERT INTO comment (id, item_id, author_id, content)
                VALUES (NULL, ?, ?, ?)");
$query->bind_param("iis", $item_id, $author_id, $content);
$result = $query->execute();
header("Location: item.php?id=$item_id");
?>