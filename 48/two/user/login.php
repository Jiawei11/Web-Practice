<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>Login Page</title>
<style>
	div>h1{
		background:blue;
		text-align:center;
		color:white;
	}
	#drop div{
		width:30px;
		height:30px;
		border:1px solid #333;	
	}
	#drop {
		display:-webkit-inline-box;
	}
</style>
<script>
	$(function(){
		cap(4);
		$('#btn').click(function(){
			$('#img>img').remove();
			$('#drop>div').remove();
			cap(4);
		});
	});	
	
	function cap(Len){
		var arr = [];
		for (var i = 1;i<=Len;i++){
			$.ajax({
				url:'cap/text.php',
				async:false,
				success: function(e){
					arr.push(e)
					console.log(e);
					var img = document.createElement('img');
					img.src = 'cap/plot.php?code=' + e;
					$('#img').append(img);
					$('#drop').append("<div></div>");
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
		
		$('#drop div').droppable({
			drop:function(event,ui){
				ui.helper.appendTo(this).css({
					'top':0,
					'left':0,
				})
				place();
			}
		})
		
		}
		
		function place(){
			var value ='';
			$('#drop>div>img').each(function(){
				value += ($(this).attr('value'));
			})	
			$("[name=txt]").val(value);
			return true;
		};
		
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
    <div><h1>汽車共乘網站管理</h1></div>
    <a href='../index.php' class="ui-button">回首頁</a>
    <form action="loggin.php" method="post">
    <table align="center" width="300x" border="1px" height="auto">
    	<tr>
        	<td>帳號:<input type="text" name="user" required/></td>
        </tr>
        <tr>
        	<td>密碼:<input type="password" name="pwd" required/></td>
        </tr>
        <tr>
            <td colpsan="2">驗證碼<div id="img">
           	</div></td>
        </tr>
        <tr>
        	<td colpsan="2">驗證<br />
				<div id="drop"></div>
			</td>
        </tr>
        <tr>
        	<td>
            <input type="submit" value="登入" />
            <input type="reset"  value="清除" />
           	<input type="button" id="btn" value="重新產生"/>
            </td>
        </tr>
    </table>
    <input type="hidden" name="ans" />
    <input type="hidden" name="txt" />
   </form>
</body>
</html>
