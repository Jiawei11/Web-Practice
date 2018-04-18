<?php
	include_once('../link.php');
	$sql = $db->prepare('select * from user where user=:user');
	$sql->bindValue('user',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row	== true){
		echo "<script>alert('帳號已存在。');location.href='./adduser.php';</script>";
	}else{
	$sql = $db->prepare('insert into user(user,password,name,power) values(:user,:pwd,:name,:power)');
	$sql->bindValue('user',$_POST['user']);
	$sql->bindValue('pwd',$_POST['pwd']);
	$sql->bindValue('name',$_POST['name']);
	$sql->bindValue('power',$_POST['root']);
	$sql->execute();
	echo "<script>alert('新增成功。');location.href='./list.php';</script>";
	}
?>
