<h1>添加新闻</h1>
<form name="form1" method="post" action="add1.php">
新闻标题：<input type="text" name="title" maxlength="20"><p/>
新闻内容：<textarea rows="10" name="content" cols="30" ></textarea><p/>
<input type="submit" name="submit" value="添加" onclick="return check(form1)">
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

