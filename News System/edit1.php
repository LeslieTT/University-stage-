<?php
require_once("connect_n.php");
$id=$_GET['id'];
$sql=mysql_query("select * from tb_news where id='$id'");
$row=mysql_fetch_object($sql);
if(!empty($_POST[submit])){
	$id=$_POST['id'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$sql=mysql_query("update tb_news set title='$title',content='$content' where id='$id'");
	if($sql) 
	{
		echo "<script>alert('编辑新闻成功！');window.location.href='admin.php';</script>";
	}
}
?>
<h1>编辑新闻</h1>
<form name="form2" method="post" action="">
新闻ID：<input type="hidden"  name="id" value="<?php echo $row->id;?>">
新闻标题：<input type="text" name="title"  maxlength="20" value="<?php echo $row->title;?>"><p/>
新闻内容：<textarea rows="10" name="content" cols="30" ><?php echo $row->content;?></textarea><p/>
<input type="submit" name="submit" value="编辑" onclick="return check(form2)">
<input type="reset" name="reset" value="重置">
</form>

<script language="javascript">
 function check(form){
	 if(form.title.value==""){
		 alert("标题不能为空");form.title.focus();return false;
	 }
	 if(form.content.value==""){
		 alert("内容不能为空");form.content.focus();return false;
	 }
 }
</script> 
