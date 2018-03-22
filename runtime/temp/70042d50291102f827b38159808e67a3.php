<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"H:\wamp\www\tp5\public/../application/net\view\index\test.html";i:1520389989;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): if( count($user)==0 ) : echo "" ;else: foreach($user as $key=>$vo): ?>
	<?php echo $vo; ?><br>
	<?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>