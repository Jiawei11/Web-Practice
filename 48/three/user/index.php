<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
	<?php
		session_start();
		if(!isset($_SESSION['power'])){
			echo "<script>alert('請先登入');location.href='login.php';</script>";
		}else if($_SESSION['power'] == "管理者"){
			echo '<center>'."管理者專區".'<p>';
			echo "<a href='adduser.php' class='ui-button'>新增</a>".'<p>';
			echo "<a href='list.php' class='ui-button'>列表</a>".'<p>';
			echo "<a href='search/index.html' class='ui-button'>查詢</a>".'<p>';
			echo "<a href='logout.php' class='ui-button'>登出</a>";
		}else if($_SESSION['power'] == "一般使用者"){
			echo '<center>'."一般會員專區".'<p>';
			echo "<a href='logout.php' class='ui-button'>登出</a>";
		}
	?>
</body>
</html>