<?php
	require_once("conncet_u.php");
	$user=$_POST[user];
	$pwd=$_POST[pwd];
	if($user=="" || $pwd==""){
		echo "<script language='javascript'>alert('用户名或密码不能为空');history.back();</script>";
	}
	else if()
?>
<table>
<?php 
if($user=="admin" && $pwd=="admin")
	header("location:admin.php");
else
	header("location:guest.php")
?>
</table>