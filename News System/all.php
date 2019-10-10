<?php
require_once("connect_n.php");
$sql=mysql_query("select * from tb_news");
$info=mysql_fetch_array($sql);
?>

<table border="1" width="800"><h1>新闻</h1><tr><th>id</th><th>标题</th><th>内容</th><th>评论</th></tr>
<?php
$count=1;
do{
echo "<tr><td>".$count."</td>";
echo "<td>".$info[title]."</td>";
echo "<td>".$info[content]."</td>";
echo "<td><a href='comment.php?id={$info['id']}'>评论</a></td></tr>";
$count++;
}while($info=mysql_fetch_array($sql));
?>
</table>
<br>

