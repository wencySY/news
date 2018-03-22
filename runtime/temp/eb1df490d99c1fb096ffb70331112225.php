<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\wamp\www\tp5\public/../application/news\view\show\show.html";i:1521007426;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>新闻-分类</title>
</head>
<body>
	<?php echo $data['title']; ?>
	<br>
	<?php echo $data['author']; ?>&nbsp;<?php echo $data['create_time']; ?>&nbsp;<?php echo $data['status']; ?>
	<br>
	<?php echo $data['content']; ?>
	<br>
	<?php echo $data['update_time']; ?>
</body>
</html>