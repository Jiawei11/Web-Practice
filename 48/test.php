<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style>
	marquee{
		color:#0FC;
		font-size:30px;
	}
</style>
</head>
<body bgcolor="#333">
<?php
	session_start();
	include_once('link.php');
	$sql = $db->prepare('SELECT username FROM login where usernmae=:user');
	$sql->bindValue('user',$_SESSION['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	// if($_SESSION['user'] == $row['username'] and $_SESSION['power'] == "一般使用者"){
	// 	echo "<center>您為:".$_SESSION['power']."</center>";
	// 	}else{
	// 		echo "<script>alert('權限不足。');</script>";
	// 		// header("location:index.php");
	// 	}
	echo $row['username'];
?>
	<marquee>會員功能區...</marquee>
    <hr />
</body>
</html>