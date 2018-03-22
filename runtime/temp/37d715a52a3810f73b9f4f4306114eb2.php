<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\WWW\tp5\public/../application/news\view\login\register.html";i:1521105006;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="/tp5/public/static/css/css.css">
    <script type="text/javascript" src="/tp5/public/static/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="/tp5/public/static/js/js.js"></script>
</head>
<body class="body">
	<div class="all">
	  <div class="allA">
	  <b class="allAa">欢迎注册</b>
	  </div>
	  <div class="allB">	  	
		<form name="form1" class="form" method="" action="checkRegister" onsubmit="return myCheckk(this)">
			用&nbsp;户&nbsp;名:<input type="text" name="username" id="username"><br/>
			密&nbsp;&nbsp;&nbsp;码&nbsp;:<input type="password" name="password" id="password"><br/>
			重复密码:<input type="text" name="yzm" id="yzmm"><br/>
			<input type="submit" value="注册" id="button"> 
			<input type="reset" value="清空" id="button1">
		</form>
	  </div>
	</div>
	<div id='tips' ></div>
</body>
<script type="text/javascript">
	var tips=document.getElementById('tips');
	
	$('#button').click(function(){
				$.ajax({
				url: 'checkRegister',
				type: 'POST',
				data:$('form').serialize(),
				//可以用作前端验证
				success:function(data){
						if (data=='用户注册成功') {
							tips.innerHTML="用户注册成功";
							setTimeout("aa()",3000);
							
						} else {
							tips.innerHTML=data;
						}
	        	 	  	
        	 	},
            	error:function(){
		            	}
				});
			});
	function aa(){
		window.location.href="<?php echo url('Index/test1'); ?>";
	}
</script>
</html>