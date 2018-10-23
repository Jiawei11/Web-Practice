<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>新增會員</title>
</head>

<body align="center">
	<?php
		session_start();
		if($_SESSION['power'] != "管理者"){
			echo "<script>alert('沒有權限');location.href='../login.php';</script>";
		}
	?>
	<h1>新增會員</h1>
    <form action="adding.php" method="POST">
    帳號:<input class="ui-corner-all" type="text" name="user" />
    <P>
	密碼:<input class="ui-corner-all" type="password" name="pwd" />
    <P>
    姓名:<input class="ui-corner-all" type="text" name="name" />
    <P>
	權限:<input type="radio" name="root" value="一般使用者"  checked/>一般使用者
    	 <input type="radio" name="root" value="管理者" />管理者
    <P>
    <input class="ui-button" type="submit" />
    <input class="ui-button" type="reset" />
    <a class="ui-button" href="../index.php">回頁面</a>
    </form>
</body>
</html>