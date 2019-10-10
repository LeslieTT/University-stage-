<?php
require_once("connect_u.php");
$sql=mysql_query("select * from `tb_user`");
$info=mysql_fetch_array($sql);
$user=$_POST['user'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$tnumber=$_POST['tnumber'];
$email=$_POST['email'];
do{if($user==$info['user'])$a=1;}
while($info=mysql_fetch_array($sql));
if(!empty($_POST[submit])){
	if(empty($_POST['user']))
		echo "<script>alert('用户名不能为空！');history.back();</script>";
	else if(empty($_POST['password']))
		echo "<script>alert('密码不能为空！');history.back();</script>";
	else if($a)
		echo"<script>alert('用户名已存在！');history.back();</script>";
	else if($password!=$password1)
		echo"<script>alert('两次输入密码不一致！');history.back();</script>";
	else 
	 {
		 $save=mysql_query("insert into `tb_user`(user,password,tnumber,email)values('$user','$password','$tnumber','$email');");
		 if($save)
		 {
			 echo "<script>alert('恭喜注册成功！');</script>";
		 }
		 echo "<br>请确认您的信息";
		 echo "<br>用户名:".$user;
		 echo "<br>";
		 echo "密  码:".$password;
		 echo "<br>";
		 echo "手机号:".$tnumber;
		 echo "<br>";
		 echo "邮箱:".$email;
		 echo "<br>";
		 // echo "爱好:";
		 // for($i=0;$i<count($_POST[ford]);$i++)
			 // echo $_POST[ford][$i]."&nbsp" ;
		 echo "<br>";
		 echo "<a href='load.php'>去登陆</a>";
	 }
 }
?>