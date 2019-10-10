<?php
session_start();
if(!isset($_SESSION['user'])){  
    echo "<script>alert('您未登陆，请先登陆！');window.location.href='load.php'</script>";
    exit();  
}  
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
if($_SESSION['user']=='admin')
	echo 
		"<div id='header'>
		<h1 id='h1'>新闻中心（管理员模式）</h1>
		</div>";
else
	echo
		"<div id='header'>
		<h1 id='h1'>新闻中心（普通模式）</h1>
		</div>";
?>

<div id="menu">
<ul>
	<li><a href="all.php" target="myiframe">全部新闻</a></li>
	<li><a href="page.php" target="myiframe">分页显示</a></li>
	<li><a href="search.php" target="myiframe">查询新闻</a></li>
	<?php
	if($_SESSION['user']=="admin")
	{	
		echo "<li><a href='add.php' target='myiframe'>添加新闻</a></li>";
		echo "<li><a href='del.php' target='myiframe'>删除新闻</a></li>";
		echo "<li><a href='edit.php' target='myiframe'>编辑新闻</a></li>";
	}
	?>
	<li><a href="load.php?action=logout" >注销</a></li>
</ul>
</div>
<iframe id="content" name="myiframe">
<div>

</div>
</body>