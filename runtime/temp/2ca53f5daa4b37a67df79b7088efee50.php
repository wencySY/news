<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"H:\wamp\www\tp5\public/../application/teacher\view\user\test6.html";i:1520902896;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>分页</title>
</head>
<body>
	<ul>
	<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vol): ?>
		<li><?php echo $vol['name']; ?></li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php echo $page; ?>
</body>
</html>