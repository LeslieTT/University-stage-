<?php
require_once("connect_n.php");
if(!empty($_POST[submit])){
	$title=$_POST['title'];
	$content=$_POST['content'];
	$sql=mysql_query("insert into `tb_news`(title,content)values('$title','$content');");
	if($sql) 
	{
		echo "<script>alert('添加新闻成功！');history.back();</script>";
	}
}
?>