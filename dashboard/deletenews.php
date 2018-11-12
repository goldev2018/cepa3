<?php 
include 'config.php';
$delete = $_GET['delete'];
$link = $_GET['link'];

$sql = $db->prepare("DELETE FROM newsroom WHERE id='$delete'");
$sql->execute();


unlink($link);
echo '<script>alert("Delete Successfully")</script>';
header("location: edit_news.php");

?>

