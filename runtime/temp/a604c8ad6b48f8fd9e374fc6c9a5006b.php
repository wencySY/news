<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"H:\wamp\www\tp5\public/../application/news\view\index\edit.html";i:1521094240;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>编辑新闻</title>
	<link rel="stylesheet" type="text/css" href="/tp5/public/static/css/css.css">
</head>
<body class="edit">
<font class="font1">编辑新闻</font>
<div class="div">
	<form action="" method="" >
		<input type="hidden"  name="ida" value="<?php echo $data['id']; ?>" class="input">
		<p><label>标题:</label>
		<input type="text" name="title" value="<?php echo $data['title']; ?>" class="input"></p><br/>

		<p><label>作者:</label>
		<input type="text" name="author" value="<?php echo $data['author']; ?>" class="input"></p><br/>
		<p><label>类别:</label>
		<select name="status">
			<option value="0">游戏</option>
			<option value="1">体育</option>
			<option value="2">汽车</option>
			<option value="3">奇闻</option>
		<select></p><br/>
			<p>内容:</p>
		<p>
		<textarea name="content" class="input1" style="resize: none;"><?php echo $data['content']; ?></textarea></p><br/>
		<p><input type="button" value="发表" id="button2">&nbsp;<input type="reset" name="重置" id="button3"></p>
	</form>
</div>
</body>

<script type="text/javascript" src="/tp5/public/static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#button').click(function(){
			$('form').submit();
		});
	});
</script>
</html>