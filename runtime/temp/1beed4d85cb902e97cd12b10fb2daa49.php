<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"H:\wamp\www\tp5\public/../application/teacher\view\user\test3.html";i:1520905602;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>验证码</title>
</head>
<body>
	<div><img src="<?php echo captcha_src(); ?>" alt="captcha" id="wency" />
		<form action="test3" method="post"><p>
			<input type="text" name="captcha" placeholder="验证码" maxlength="6"  >
			<input type="submit" name="提交">
		</p></form>
	</div>
	<div>
		<form action="" method="" id='wency2'>
			名字<input type="text" name="name" id="namea">
			年龄<input type="text" name="age" id='ageb'>
			<input type="button" name="提交" value="提交" id="wency3">
		</form>
	</div>
	
	<div id="asdf"></div>
</body>
<script type="text/javascript" src="/tp5/public/static/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
	var asdf=document.getElementById("asdf");

	//验证码点击刷新
	$("#wency").click(function(){
		this.src="<?php echo captcha_src(); ?>?d="+Math.random();
	});
	//ajax部分
	$(function () {
			$('#wency3').click(function(){
				$.ajax({
				timeout:2000,
				url: 'test5',
				type: 'POST',
				data:$('#wency2').serialize(),
				//可以用作前端验证
				success:function(data){
						var jss=JSON.parse(data);
						if ($('#namea').val()==''||$('#ageb').val()=='') {
							asdf.innerHTML="名字或者年龄不能为空";
						}  else{
							asdf.innerHTML="name:"+jss.name +"  "+"age:"+jss.age;
						}
	        	 	  	
        	 	},
            	error:function(xhr,ff1,ff2){
            			console.log(xhr);
            			console.log(ff1);
            			console.log(ff2);
		            	}
				});
			});
	});
</script>
</html>