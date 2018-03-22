<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"H:\wamp\www\tp5\public/../application/news\view\login\login.html";i:1520996887;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<link rel="stylesheet" type="text/css" href="/tp5/public/static/css/css.css">
</head>
<body>
	<div class="all">
	  <div class="allA">
	  <b class="allAa">欢迎登陆</b>
	  </div>
	  <div class="allB">	  	
		<form class="form" method="post" action="login">
			用户名:<input type="text" name="username" id="username"><br/>
			密&nbsp;&nbsp;码:<input type="password" name="password" id="password"><br/>
			验证码:<input type="text" name="yzm" id="yzm"> <span class="yy"><img src="<?php echo captcha_src(); ?>" alt="captcha" id="yzmimg" /></span><br/>
			<!-- <button id="button">登陆</button>   <button id="button"><a href="">注册</a></button> -->
			<input type="button" value="登陆" id="button"> 
			<a href="<?php echo url('register'); ?>"><input type="button" value="注册" id="button1"></a>
		</form>
	  </div>
	</div>
</body>
<script type="text/javascript" src="/tp5/public/static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	//验证码点击刷新
	$('#yzmimg').click(function(){
	    	this.src="<?php echo captcha_src(); ?>?d="+Math.random();
    });
	
	//给登录按钮绑定点击事件
    $('#button').click(function(){
        //事件处理程序
        $('form').submit();
    });
	
</script>
</html>