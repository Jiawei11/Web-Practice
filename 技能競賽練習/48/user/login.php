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
	#CaptchaAnsImg>div{
		border:1px solid #333;
		height:40px;
		width:40px;
	}
	#CaptchaAnsImg>div{
		display:-webkit-inline-box;
	}
</style>
<script>
	$(function(){
		CreateCaptchaImg();
		$('#CaptchaReset').click(function(){
			$('#CaptchaImg>img').remove();
			$('#CaptchaAnsImg>div').remove();
			CreateCaptchaImg();
		})
	});

	function CreateCaptchaImg(){
		var code = [];
		for(var i = 1;i<=4;i++){
			$.ajax({
				url:'./Captcha/CaptchaText.php',
				async:false,
				success: function(result){
					code.push(result);
					var img = document.createElement('img');
					img.src = './Captcha/CaptchaImg.php?Number=' + result;
					$(img).appendTo($('#CaptchaImg'));
					$(img).attr('value',result);
					$('#CaptchaAnsImg').append('<div></div>');
				}
			})
			code.sort();
			$("[name=ans]").val(code.join(''));
			$('#CaptchaImg>img').draggable({
				snap:'#CaptchaAnsImg',
				snapMode:'corner',
				revert:'invalid'
			});


			function AddValue(){
				var value = "";
				$('#CaptchaAnsImg>div>img').each(function(){
					value += $(this).attr('value');
				});
				$('[name=CaptchaAns').val(value);
				return true;
			};

			$('#CaptchaAnsImg>div').droppable({
				drop:function(event,ui){
					ui.helper.appendTo(this).css({
						'top':0,
						'left':0
					})
					AddValue();
				}
			});
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

				<div></div>
			</div>
			<div>
				<button type="button" id="CaptchaReset">驗證碼重新產生</button>
			</div>
			<p></p>
			<div>
				驗證碼輸入區:
				<div id="CaptchaAnsImg">
				</div>
			</div>
			<input type="hidden" name="ans">
			<input type="hidden" name="CaptchaAns" id="">
			<br>
            <input type="submit" />
            <input type="reset" />
        </form>
        </div>
    </div>
</body>
</html>