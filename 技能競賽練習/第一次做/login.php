<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<script scr="jquery/jquery-ui.js"></script>
<title>汽車共乘網站管理 -- 登入</title>
<style>
	span{
		font-size:40px;
		color:red;
	}
</style>
<script>
	$(function(){
		CreateCaptchaImg();
		$('#CaptchaReset').click(function(){
			$('#CaptchaImg>img').remove();
			CreateCaptchaImg();
		})
	});
	function CreateCaptchaImg(){
		var Data = [];
		for(var i = 1;i<=4;i++){
			$.ajax({
				url:'./Captcha/CaptchaText.php',
				async:false,
				success: function(e){
					Data.push(e);
					var img = document.createElement('img');
					img.src = './Captcha/CaptchaImg.php?Number=' + e;
					$('#CaptchaImg').append(img);
					$(img).attr('value',e);
				}
			})
			Data.sort();
			$("[name=ans]").val(Data.join(''));
		}
	};
</script>
</head>

<?php
	session_start();
	if(isset($_SESSION['check']) == false){
		$_SEESION['check'] = 0;
	}
?>
<body>
	<div align="center">
    	<div align="center">汽車共乘網站管理 -- 登入</div>
        <div align="center">
        <form action="loggin.php" method="POST">
        	帳號:<input type="text" name="username" />
            <p>
            密碼:<input type="password" name="pwd" />
            <P>
			驗證碼:
			<div id="CaptchaImg">
			
			</div>
			<div>
				<button type="button" id="CaptchaReset">驗證碼重新產生</button>
			</div>
			<div>
				驗證碼輸入區:
				<br>
				<input type="text" name="CaptchaAns">
			</div>
			<input type="hidden" name="ans">
			<br>
            <input type="submit" />
            <input type="reset" />
        </form>
        </div>
    </div>
</body>
</html>