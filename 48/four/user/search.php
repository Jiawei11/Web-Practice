<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>無標題文件</title>
<script>
	$(function(){
		$('#btn').click(function(){
			$.ajax({
			url:'get2.php',
			type:'POST',
			data:{
				'key':$('[name=key]').val(),
				'sort':$('[name=sort]:checked').val(),
				'method':$('[name=method]:checked').val(),
			},
			success: function(e){
				$("#div1").html(e);
				console.log(e);
			}
		})
		})
	});
</script>
</head>

<body>
	關鍵字:<P>
	<input type="text" name="key"/><P>	
	<input type="radio" name="sort" value="user"checked/>帳號
    <input type="radio" name="sort" value="name"/>姓名
    <input type="radio" name="sort" value="id"/>編號
    <P>
    <input type="radio" name="method" value="asc" checked />遞增
    <input type="radio" name="method" value="desc"/>遞減
    <P>
	<input type="button" class="ui-button" id="btn" value="查詢"/>
    <a href="index.php" class="ui-button">回功能列表</a>
    <div id="div1"></div>
</body>
</html>