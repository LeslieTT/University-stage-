<?php
require_once("connect_n.php");
$sql=mysql_query("select * from tb_news");
$info=mysql_fetch_array($sql);
?>

<table border="1" width="800"><h1>新闻</h1><tr><th>id</th><th>标题</th><th>内容</th><th>删除</th></tr>
<?php
$count=1;
do{
echo "<tr><td>".$count."</td>";
echo "<td>".$info[title]."</td>";
echo "<td>".$info[content]."</td>";
echo "<td><a href='javascript:del({$info['id']})'>删除<a></td></tr>";
$count++;
}while($info=mysql_fetch_array($sql));
?>
</table>
<br>
<script language="javascript" >
function del(id){
	if(confirm("确定删除这条新闻？")){
		window.location="del1.php?id="+id;
	}
}
</script>