<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
	div h1{
		background-color:blue;
		text-align:center;
		color:#FFF;
	}
	#drop>div{
		border:1px solid #333;
		height:30px;
		width:30px;
	}
	#drop{
		display:-webkit-inline-box;
	}
</style>
<script>
	$(function(){
		cap();
		$('#btn').click(function(){
			$('#img>img').remove();
			$('#drop>div').remove();
			cap();
		});
	});
	function cap(){
		var arr = [];
		for (var i =1;i<=4;i++){
			$.ajax({
				url:'cap/text.php',
				async:false,
				success:function(e){
					arr.push(e);
					var img = document.createElement('img');
					img.src = './cap/plot.php?code=' + e;
					$('#img').append(img);
					$('#drop').append('<div></div');
					$(img).attr('value',e);
				}
			})
			arr.sort();
			$('[name=ans]').val(arr.join(''));
			$('#img>img').draggable({
				snap:'#drop',
				snapMode:'corner',
				revert:'invalid',
			})
			$('#drop>div').droppable({
				drop:function(event,ui){
					ui.helper.appendTo(this).css({
						'top':0,
						'left':0,
					})
					place();
				}
			})
			function place(){
				var value = "";
				$('#drop>div>img').each(function(){
					console.log(this);
					value += ($(this).attr('value'));
				})
				$('[name=text]').val(value);
				return true;
			}
		}
	};
</script>
</head>
<body align="center">
	<?php
			session_start();
			if(!isset($_SESSION['check'])){
				$_SESSION['check'] = 0;
			}
		?>
	<div><h1>汽車共乘網站管理-首頁</h1></div>
    <form action="loggin.php" method="post">
    <table border="1px" width="300" height="auto" align="center">
    	<a href="../index.php" class="ui-button">回首頁</a>
        <p>
        <tr>
        	<td>帳號:<input type"text" name="user" /></td>
        </tr>
        <tr>
        	<td>密碼:<input type="password" name="pwd" /></td>
        </tr>
        <tr>
        	<td>圖形驗證碼:<div id="img"></div></td>
        </tr>
        <tr>
        	<td>驗證區:<P><div id="drop"></div></td>
        </tr>
        <tr>
       		<td>
            	<input type="submit" />
                <input type="reset" />
                <input type="button" id="btn" value="重新產生"/>
            </td> 	
        </tr>
        <input type="hidden" name="ans"/>
        <input type="hidden" name="text" />
    </table>
</form>
</body>
</html>