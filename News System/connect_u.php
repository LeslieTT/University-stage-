<?php
$conn_u=mysql_connect("localhost","root","root")or die("数据库连接失败！".mysql_error());
$db_user=mysql_select_db("db_user",$conn_u);
mysql_query("set names utf8");
?>