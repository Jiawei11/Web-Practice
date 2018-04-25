<?php
	session_start();
	date_default_timezone_set("Asia/Taipei");
	include_once('link.php');
	$time = $db->prepare('update login set logout=:clock where id=:id');
	$time->bindValue('clock',date("Y-m-d H:i:s"));
	$time->bindValue('id',$_SESSION['id']);
	$time->execute();
	unset($_SESSION['power']);
	unset($_SESSION['id']);
	echo "<script>alert('登出完成');location.href='login.php';</script>";
?>