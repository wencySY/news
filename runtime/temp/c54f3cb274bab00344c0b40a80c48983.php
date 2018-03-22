<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"H:\wamp\www\tp5\public/../application/teacher\view\index\showlist.html";i:1520410434;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>展示用户</title>
	<style type="text/css">
		table{
			margin: auto;
			text-align: center;
			height: 100px;
			width: 400px;
		}
		.add{
			text-align: center;
		}
		a:visited{
			color: blue;
		}
	</style>
</head>
<body>
	<table border="1px" >
		
			
			<th>名称</th>
			<th>注册时间</th>
			<th>性别</th>
			<th>年龄</th>
			<th>编辑</th>
			<th>删除</th>
		
		
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<tr>
			<td><?php echo $vo['name']; ?></td>
			<td><?php echo $vo['reg_time']; ?></td>
			<td><?php if($vo['sex'] == '1'): ?>男<?php else: ?>女<?php endif; ?></td>
			<td><?php echo $vo['age']; ?></td>
			<td><a href="<?php echo url('edit',['id' => $vo['id'] ]); ?> ">编辑</a></td>
			<td><a href="<?php echo url('del',['id' => $vo['id'] ]); ?>">删除</a></td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<p class='add'><a href="add">添加用户</a></p>
</body>
</html>