<?php
	include_once('link.php');
	$sql = $db->prepare('insert into login(user,pwd,name,power) values(:user,:pwd,:name,:power');
	$sql->bindValue('user',$_POST['user']);
	$sql->bindValue('pwd',$_POST['pwd']);
	$sql->bindValue('name',$_POST['name']);
	$sql->bindValue('power',$_POST['power']);
	$sql->execute();
	echo "<script>alert('新增成功');location.href='list.php';</script>";
?>