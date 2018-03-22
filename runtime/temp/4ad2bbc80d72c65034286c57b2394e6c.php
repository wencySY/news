<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"H:\wamp\www\tp5\public/../application/admin\view\user\create.html";i:1520219244;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>创建用户</title>
<style>
body {
font-family:"Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif;
font-size:16px;
padding:5px;
}
.form{
padding: 15px;
font-size: 16px;
}
.form .text {
padding: 3px;
margin:2px 10px;
width: 240px;
height: 24px;
line-height: 28px;
border: 1px solid #D4D4D4;
}
.form .btn{
margin:6px;
padding: 6px;
width: 120px;
font-size: 16px;
border: 1px solid #D4D4D4;
cursor: pointer;
background:#eee;
}
a{
color: #868686;
cursor: pointer;
}
a:hover{
text-decoration: underline;
}

h2{
color: #4288ce;
font-weight: 400;
padding: 6px 0;
margin: 6px 0 0;
font-size: 28px;
border-bottom: 1px solid #eee;
}
div{
margin:8px;
}
.info{
padding: 12px 0;
border-bottom: 1px solid #eee;
}
.copyright{
margin-top: 24px;
padding: 12px 0;
border-top: 1px solid #eee;
}
</style>
</head>
<body>
<h2>创建用户</h2>
<FORM method="post" class="form" action="<?php echo url('admin/user/add'); ?>">
昵 称：<INPUT type="text" class="text" name="nickname"><br/>
邮 箱：<INPUT type="text" class="text" name="email"><br/>
生 日：<INPUT type="text" class="text" name="birthday"><br/>
<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
<INPUT type="submit" class="btn" value=" 提交 ">
</FORM>

</body>
</html>