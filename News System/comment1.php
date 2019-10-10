<?php
require_once("connect_n.php");
date_default_timezone_set('PRC'); 
if(!empty($_POST[submit])){
	$id=$_POST['id'];
	$comment_content=$_POST['comment_content'];
	$time=date("Y-m-d H:i:s");
	$sql=mysql_query("insert into `tb_comment`(comment_content,id,time)values('$comment_content','$id','$time');");
	if($sql) 
	{
		echo "<script>alert('添加评论成功！');window.location.href='comment.php?id=$id';</script>";
	}
}
?>