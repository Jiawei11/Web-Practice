<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body align="center">
	<h1>新增會員</h1>
	<form action="add.php" method="POST">
    	帳號:<input type="text" name="user" /><P>
		密碼:<input type="password" name="pwd" /><p>
        姓名:<input type="text" name="name" /><P>
        <input type="radio" name="one" value="一般使用者"/>一般使用者
        <input type="radio" name="one" value="管理者"/>管理者<P>
        <input type="submit" class="ui-button"/>
        <input type="reset"  class="ui-button"/>
        <a href="./index.php" class="ui-button">回功能列表</a>      
    </form>
</body>
</html>