<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"C:\WWW\tp5\public/../application/news\view\index\addimg.html";i:1521422498;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加图片</title>
	<link rel="stylesheet" type="text/css" href="/tp5/public/static/css/css.css">
</head>
<body class="addimg">
     <h3>添加图片</h3>
    <div class="div1">
	 <form action="addimg" enctype="multipart/form-data" method="post">
		<input type="button" value="继续添加" id='add' class="inputt"><br/><br/>
		<p><label><b>作 者 :</b></label>
			<input type="text" name="author"></p><br/>
		<p><label><b>新闻id:</b></label>
			<input type="text" name="new_id"></p><br/>
		<input type="file" name="image[]"/><br/> 
	</form>
	<input type="button" value="上传图片" id='up' class="inputt"/>
    </div>
	
</body>

<script type="text/javascript" src="/tp5/public/static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#add').click(function(){
			$('form').append('<input type="file" name="image[]" /> <br>');
		});
		$('#up').click(function(){
			$('form').submit();
		});
	});
</script>
</html>