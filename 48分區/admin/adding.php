<?php
	include_once('../link.php');
	$sql = $db->prepare('select username from login where username=:user');
	$sql->bindValue('user',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($_POST['user'] != $row['username']){
		$sql = $db->prepare('insert into login(username,password,power) values(:user,:pwd,:power)');
		$sql->bindValue('user',$_POST['user']);
		$sql->bindValue('pwd',$_POST['pwd']);
		$sql->bindValue('power',$_POST['power']);
		$sql->execute();
		echo "<script>alert('add');location.href = 'all.php';</script>";
	}else
	{
	echo "已有帳號";
	header("location:./admin/adlogin.html");
		}
?>