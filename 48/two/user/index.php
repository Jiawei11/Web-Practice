<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>首頁</title>
</head>

<body>
	<?php
		session_start();
		if(!isset($_SESSION['power'])){
			echo "<script>alert('沒有權限');location.href='./login.php';</script>";
		}else if($_SESSION['power'] == "管理者"){
			echo "<center>";
			echo "管理者專區".'<br>';
			echo "<a href='./root/adduser.php' class='ui-button'>新增會員</a>".'<p>';
			echo "<a href='./root/list.php' class='ui-button'>會員列表</a>".'<p>';
			echo "<a href='./root/search.php' class='ui-button'>查詢</a>".'<p>';
			echo "<a class='ui-button'  href='./root/logout.php'>登出</a>";
		}else if ($_SESSION['power'] == "一般使用者"){
			echo "<center>";
			echo "一般會員專區".'<br>';
			echo "<a href='./root/logout.php?>' class='ui-button'>登出</a>";
		}
	?>
</body>
</html>