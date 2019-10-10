<?php
require_once("connect_n.php");
$sql=mysql_query("select * from `tb_news`");
//$info=mysql_fetch_array($sql);
$pagename=5;
$num=mysql_num_rows($sql); //一共几条记录
$pagesize=5;	//每页显示五条
$pagecount=ceil($num/$pagesize);	//共有几页
$page=$_GET['page']?$_GET['page']:1;	//默认第一页
$pageno=($page-1)*$pagesize;
$res=mysql_query("select * from `tb_news` limit $pageno,$pagesize");
$info=mysql_fetch_array($res);
?>

<table border="1" width="800"><h1>新闻</h1><tr><th>id</th><th>标题</th><th>内容</th></tr>

<?php
$count=1;
do{
echo "<tr><td>".$count."</td>";
echo "<td>".$info[title]."</td>";
echo "<td>".$info[content]."</td>";
$count++;
}while($info=mysql_fetch_array($res));
?>
</table>

<table>
 <tr>
	<td>页次：<?php echo $page?>/<?php echo $pagecount ?> &nbsp;记录：共<?php echo $num?>条&nbsp;</td>
		<?php
		if($page>1)
		{
			echo"<td><a href='page.php?page=1'>首页</a>&nbsp;&nbsp;
			<a href='page.php?page=".($page-1)."'>上一页</a>&nbsp;";
		}?>
		<?php
		if($page<$pagecount)
		{	
			echo"<td><a href='page.php?page=".($page+1)."'>下一页</a>&nbsp;
			<a href='page.php?page=$pagecount'>尾页</a>";
		}?>
	</td>
 </tr>
</table>
<br>

<script language="javascript" >
function del(id){
	if(confirm("确定删除这条新闻？")){
		window.location="del.php?id="+id;
	}
}
</script>
