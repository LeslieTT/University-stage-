<?php
require_once("connect_n.php");
$id=$_GET['id'];
$sql1=mysql_query("select * from tb_news where id='$id'");
$sql2=mysql_query("select * from tb_comment where id='$id'");	
$info2=mysql_fetch_array($sql2);	
$row=mysql_fetch_object($sql1);
echo "<h1>新闻内容</h1>";
echo "<td>".$row->title."</td>";
echo "<br>";
echo "<td>".$row->content."</td>";
?>

<h1>添加评论</h1>
<form name="form3" method="post" action="comment1.php">
<input type="hidden" name="id" value="<?php echo $id;?>">
评论内容：<textarea rows="5" name="comment_content" cols="30" ></textarea><p/>
<input type="submit" name="submit" value="添加" onclick="return check(form3)">
<input type="reset" name="reset" value="重置">
</form>

<script language="javascript">
 function check(form){
	 if(form.comment_content.value==""){
		 alert("评论不能为空");form.comment_content.focus();return false;
	 }
 }
</script> 

<h1>查看评论</h1>
<?php
$count=1;
if($info2){
do{
echo "<tr><td>".$count."楼</td><br>";
echo "<td>评论内容:".$info2[comment_content]."</td><br>";
echo "<td>评论时间:".$info2['time']."</td></tr><br><br>";
$count++;
}while($info2=mysql_fetch_array($sql2));
}
?>


