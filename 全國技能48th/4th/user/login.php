<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
	div>h1{
		background-color:blue;
		font-size:40px;
		color:white;
		text-align:center;
	}
	#drop>div{
		border:1px solid #333;
		height:40px;
		width:40px;
	}
	#drop{
		display:-webkit-inline-box;
	}
</style>
<script>
	$(function(){
		cap();
		$('#btn').click(function(){
			$('#drop>div').remove();
			$('#img>img').remove();
			cap();
		});
	});
	function cap(){
		var arr = [];
		for(var i = 1;i<=4;i++){
			$.ajax({
				url:'./cap/text.php',
				async:false,
				success: function(e){
					arr.push(e);
					var img = document.createElement('img');
					img.src = './cap/plot.php?code=' + e;
					$('#img').append(img);
					$('#drop').append('<div></div>');
					$(img).attr('value',e);
				}
			})
			arr.sort();
			$("[name=ans]").val(arr.join(''));
			$('#img>img').draggable({
				snap:'#drop',
				snapMode:'corner',
				revert:'invalid',
			});
			$('#drop>div').droppable({
				drop:function(event,ui){
					ui.helper.appendTo(this).css({
						'top':0,
						'left':0,
					})
					place();
				}
			});
		}
		function place(){
			var value="";
			$('#drop>div>img').each(function(){
				value += $(this).attr('value');
				console.log(value); 	
			});
			
			$("[name=text]").val(value);
			return true;
		}
	}
</script>
</head>
<body align="center">
	<?php
		session_start();
		if(!isset($_SESSION['check'])){
			$_SESSION['check'] = 0;
		}
	?>
	<div><h1>汽車共乘網站管理-登入</h1></div>
	<a href='../index.html' class="ui-button">回首頁</a>
    <form action="loggin.php" method="post">
    <table align="center" border="1px" width="300" height="auto">
    	<tr>
        	<td align="center">帳號:<input type="text" name="user"></td>
        </tr>
        <tr>
       		<td align="center">密碼:<input type="password" name="pwd" /></td>
        </tr>
        <tr>
        	<td align="center">圖形驗證碼:<div id="img"></div></td>
        </tr>
        <tr>
        	<td>驗證區:<P><div id="drop"></div></td>
        </tr>
        <tr>
        	<td align="center">
            	<input type="submit" />
                <input type="reset" />
                <input type="button" id="btn" value="重產驗證碼">
            </td>
        </tr>
        <input type="text" name="ans" />
        <input type="text" name="text" />
    </table>
</form>
</body>
</html>