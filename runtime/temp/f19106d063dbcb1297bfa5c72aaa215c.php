<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\wamp\www\tp5\public/../application/news\view\index\add.html";i:1521009657;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>添加新闻</title>
</head>
<body>
	<form action="add" method="post" enctype="multipart/form-data">
		<p><label>标题</label>
		<input type="text" name="title"></p>
		<p><label>作者</label>
		<input type="text" name="author"></p>
		<p><label>类别</label>
		<select name="status">
			<option value="0">游戏</option>
			<option value="1">体育</option>
			<option value="2">汽车</option>
			<option value="3">奇闻</option>
		</select></p>
		<p><label>内容</label>
		<textarea name="content"></textarea></p>
		<p><input type="submit" value="提交">&nbsp;<input type="reset" name="重置"></p>
	</form>
</body>
</html>