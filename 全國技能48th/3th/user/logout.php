<?php
	include_once('link.php');
	session_start();
	date_default_timezone_set("Asia/Taipei");
	$sql = $db->prepare('update `login` set logout=:log where id=:id');
	$sql->bindValue('log',date('Y-m-d H:i:s'));
	$sql->bindValue('id',$_SESSION['id']);
	$sql->execute();
	unset($_SESSION['power']);
	unset($_SESSION['id']);
	echo "<script>alert('登出成功');location.href='login.php';</script>";
?>