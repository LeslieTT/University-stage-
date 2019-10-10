<form name="form4" method="post" action="">
<h1>新闻搜索</h1>
<tr>
	<td>请输入关键字：<input name="search" type="text" id="search" size="25"></td>
	<td><input type="submit" name="submit" value="查询"></td>
</tr>
</form>
<?php
require_once("connect_n.php");
$sql=mysql_query("select * from tb_news");
$info=mysql_fetch_array($sql);
if(!empty($_POST[submit])){
	$search=$_POST[search];
	$sql=mysql_query("select * from tb_news where concat(title,content) like '%".trim($search)."%'");
	$info=mysql_fetch_array($sql);
	if($info==true){
	echo "<table border='1' width='800'><h1>新闻</h1><tr><th>id</th><th>标题</th><th>内容</th><th>评论</th></tr>";
	$count=1;
	do{
	echo "<tr><td>".$count."</td>";
	echo "<td>".$info[title]."</td>";
	echo "<td>".$info[content]."</td>";
	echo "<td><a href='comment.php?id={$info['id']}'>评论</a></td></tr>";
	$count++;
	}while($info=mysql_fetch_array($sql));
	echo "</table>";
	}
	else{
	echo "<div align='center' style='color:#FF0000;font-size:12px'>对不起，您搜索的关键字不存在！</div>";
	}
}


?>
