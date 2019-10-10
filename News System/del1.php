<?php
require_once("connect_n.php");
$id = $_GET['id'];
mysql_query("DELETE FROM tb_news WHERE id={$id}") or die('删除数据出错：'.mysql_error()); 
echo "<script>alert('删除新闻成功！');window.location.href='del.php';</script>";
?>