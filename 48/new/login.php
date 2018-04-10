<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
	body{
		font-family:'微軟正黑體';
	}
	h1{
		text-align:center;
		background-color:#09C;
		color:#FFF;
		border-radius:10px;
		width:500px;
		margin: auto;
	}
	table{
		text-align:	center;
	}
	#drop{
		 display: -webkit-inline-box;
	}
	#drop div{
		width:30px;
		height:30px;
		border:1px solid #333;	
	}
	a{
		margin:10px;
		margin-left:255px;
	}
</style>
<script>
	$(function(){
		title();
		cap();
		$('#reset').click(function(){
			var code = "";
			$('[name=ans]').val(code);
			
	});
	});
	function title(){
			var title = $("#conta>h1").text();
			document.title = title;
	};
	function cap(Len){
		var Len = 4;
		for(var i = 1 ; i<=4;i++){
			$.ajax({
				url: 'text.php',
				async:false,
				success:function(e){
					var img = document.createElement('img');
					img.src = 'plot.php?code=' + e;
					$("#img").append(img);
					$("#drop").append("<div></div>");
					$(img).attr('value',e);
					value();
				},
			});
		}
		$('#img img').draggable({
			snap: '#drop',
			snapMode:'inner',
			revert:'invalid'
		})
		
		$('#drop div').droppable({
			drop:function(event,ui){
				ui.helper.appendTo(this).css({
					'top':0,
					'left':0,
				})
				txt();
			}
		})
	};
	$(function(){
		$('#show').click(function(){
		if(this.checked){
			$('#pwd').attr('type','text');
		}else{
			$('#pwd').attr('type','password');
		}
	});
	});
	

	function value(){
		var value = '';
		$('img').each(function(){
			value += ($(this).attr('value'));
		});
		$("[name=ans]").val(value);
		return true;
	};
	
	function txt(){
		var value = '';
		$('#drop>div>img').each(function(){
			value += ($(this).attr('value'));
		});
		$("[name=txt]").val(value);
		return true;
	};
</script>
</head>

<body>
	<?php
		session_start();
		echo $_SESSION['check'];
	?>
	<div id="conta">
    <form action="./loggin.php" method="POST">
    	<h1>汽車共乘網站-登入</h1>
           <a href="./" class="ui-button fill">回首頁</a>
           <table align="center" width="500px" height="auto" border="1px">
           		<tr>
                	<td>帳號:<input type="text" name="user" /></td>
                </tr>
                <tr>
                	<td>密碼:<input id="pwd" name="pwd" type="password" />
					<input type="checkbox" id="show">顯示密碼</td>
                </tr>
                <tr>
                	<td>圖形驗證碼:
                        <div id="img"></div>
                    </td>
                </tr>
                <tr>
                	<td>托放區:
                 		<div id="drop"></div>
                    </td>
                </tr>
				<tr>
                	<td><input type="submit" class="ui-button" id="btn">
					<td><button type="button" id="reset">重產</button></td>
				</tr>
           </table>
		   <input type="text" name="ans">
           <input type="text" name="txt">
           </form>
    </div>
</body>
</html>
