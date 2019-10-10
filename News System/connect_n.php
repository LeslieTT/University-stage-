<?php
$conn_n=mysql_connect("localhost","root","root")or die("数据库服务器连接失败！".mysql_error());
$db_select=mysql_select_db("db_news",$conn_n);
mysql_query("set names utf8");
?>