<?php
	include_once('link.php');
	$sql = $db->prepare('update login set user=:user,pwd=:pwd,name=:name where id=:id');
	$sql->bindValue('user',$_POST['user']);
	$sql->bindValue('pwd',$_POST['pwd']);
	$sql->bindValue('name',$_POST['name']);
	$sql->bindValue('id',$_POST['id']);
	$sql->execute();
	echo "<script>alert('修改完成');location.href='list.php';</script>";
?>