<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"H:\wamp\www\tp5\public/../application/teacher\view\index\edit.html";i:1520409876;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>增加用户</title>
</head>
<body>
	<form method="post" action="<?php echo url('edit'); ?>"  >
		<p><label>名称：</label>
	    <input type="text" name="name" placeholder="名称" value="<?php echo $data['name']; ?>" /></p>
	    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	    <p><label>注册:  </label>
	    <input type="text" name="reg_time" placeholder="注册" value="<?php echo $data['reg_time']; ?>"></p>
	    <p><label>性别：</label>
        	<select name="sex">
                <option value="1">男</option>
                <option value="2">女</option>
            </select>
        </p>
        <p>
        <label>年龄：</label>
	    <input type="text" name="age" placeholder="年龄" value="<?php echo $data['age']; ?>" />
	    </p>
	    <input type="submit" value="确定">
	</form>
</body>
</html>