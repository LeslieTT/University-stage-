<?php
require_once("connect_u.php");

?>
<form name="form1" method="POST" action="welcome.php" enctype="multipart/form-data">
<table width="558" border="1" cellpadding="0" cellspacing="0" bgcolor="silver">
<tr>
	<td width="120">用户名:</td>
	<td width="143"><input type="text" name="user" ></td>
</tr>

<tr>
	<td>密码:</td>
	<td><input type="password" name="password" ></td>
</tr>

<tr>
	<td>确认密码：</td>
	<td><input type="password" name="password1" ></td>
</tr>

<tr>
	<td>手机号</td>
	<td><input type="text" name="tnumber" ></td>
</tr>

<tr>
	<td>邮箱</td>
	<td><input type="text" name="email" ></td>
</tr>

<tr>
	<td>&nbsp;</td>
	<td>
		<input type="submit" value="注册" name="submit" >
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="重置">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" onclick="location='load.php'" value="登陆界面">
		
	</td>
</tr>

</table>

</form>
