<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"H:\wamp\www\tp5\public/../application/teacher\view\index\add.html";i:1520317510;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>增加用户</title>
</head>
<body>
	<form method="post" action="<?php echo url('add'); ?>"  >
		<p><label>名称：</label>
	    <input type="text" name="name" placeholder="名称" /></p>
	    <p><label>上级部门：</label>
        	<select name="sex">
                <option value="1">男</option>
                <option value="2">女</option>
            </select>
        </p>
        <p>
        <label>年龄：</label>
	    <input type="text" name="age" placeholder="年龄" />
	    </p>
	    <input type="submit" value="确定">
	</form>
</body>
</html>