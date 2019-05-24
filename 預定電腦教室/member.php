<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
	<h1 align="center">
    	<?php
			session_start();
			if($_SESSION['power'] == "管理者"){
				echo "管理者專區" . "<p>";
				if($_SESSION['user'] == "admin"){
					echo "<a href='seterror.php'>修改錯誤次數</a>" . "<p>";
				}
				echo "<a href='adduser.php'>新增使用者</a>" . "<p>";
				echo "<a href='memberlist.php'>會員清單</a>" . "<p>";
			}else{
				echo "一般會員專區" . "<p>";
				echo "<a href='borrowclass.php'>電腦教室借用申請</a>" . "<p>";
			}
		?>
		<a href="recordborrow.php">申請紀錄</a>
		<p></p>
		<a href="./logout.php">登出</a>
    </h1>
</body>
</html>