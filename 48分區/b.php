<?php
	session_start();
	include_once('link.php');
	$sql = $db->prepare('select * from login where username=:user AND password=:pwd');
	$sql->bindValue('user',$_POST['user']);
	$sql->bindValue('pwd',$_POST['pwd']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row['power'] == "一般使用者")
	{
		$_SESSION['power'] = "一般使用者";
		$_SESSION['user'] = $row['username'];
		echo "<script>alert('歡迎登入...自動導頁');location.href='test.php';</script>";
	}else if($row['power'] == "管理者"){
		echo "<script>alert('管理者請用管理者通道。');location.href='./admin/adlogin.html';</script>";
	}
	else{
	echo "<script>alert('權限不足。');location.href='index.php';</script>";
}
?>