<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"H:\wamp\www\tp5\public/../application/teacher\view\index\test1.html";i:1520302017;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>主页</title>
</head>
<body>
	<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
		<?php echo $vo['id']; ?>:<?php echo $vo['title']; ?><br>
	<?php endforeach; endif; else: echo "" ;endif; foreach($data as $vo): ?>
		<?php echo $vo['id']; ?>:<?php echo $vo['title']; ?><br/>
	<?php endforeach; ?>
</body>
</html>
