<head>
<link rel="stylesheet" type="text/css" href="loadstyle.css" />
</head>
<form id="form1" name="form1" method="post" action="" >
<div id="div1">
<div id="div-a">
	<img src='image/load.jpg'>
</div>
<div id="div-b">
	<h1>登陆界面</h1>
	<input type="user" name="user" id="user" size="20" placeholder="name">
	<input type="password" id="pwd" name="pwd" size="20" placeholder="password">
	<input type="submit" name="submit" value="提交" />
	<br>
	<br>
	<span>没有账号,</span><a href="register.php">立即注册</a>
	<br>
	<br>
	<br>
	<br>
	管理员账号密码：admin
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
</div>
</form>

<?php
session_start();

	require_once("connect_u.php");
	$user=$_POST[user];
	$pwd=$_POST[pwd];
	$check_query = mysql_query("select id from `tb_user` where user='$user' and password='$pwd' limit 1");  
if(!empty($_POST[submit])){
	if($user=="" || $pwd=="")
		echo "<script language='javascript'>alert('用户名或密码不能为空');history.back();</script>";
	else{
	if($result = mysql_fetch_array($check_query))
	{	
		$_SESSION['user']=$user;
		$_SESSION['password']=$pwd;
		if($user=="admin" && $pwd=="admin")
			header("location:admin.php");
		else
			header("location:admin.php");
	}
	else{
		echo "<script>alert('用户名或密码输入错误');history.back();</script>";
	}
	}
}
if($_GET['action'] == "logout"){  

    unset($_SESSION['user']);  

    unset($_SESSION['password']); 

    echo "<script>alert('注销成功！');</script>";

    exit;  

}  
?>