<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
	/*$(function(){
		$('button').click(function(){
			$.ajax({
				url:'get.php',
				type:'POST',
				data:{
					'user':$('#text').val(),
					'option':$('[name=option]').val(),
				},
				success:function(e){
					$('#div1').html(e);
				}
			})
		})
	});
	*/	
</script>
</head>
<body>
	<form action="get2.php" method="POST" name="form1" id="form">
        <div id="div1"></div>
        <input type="text" class="ui-corner-all" name="text" required="required"/>
        <input type="radio" name="option" value="desc" checked/>遞減    
        <input type="radio" name="option" value="asc" />遞增
        <button class="ui-button">Click</button>
        <a href="../index.php" class="ui-button">回查詢</a>
    </form>
</body>
</html>