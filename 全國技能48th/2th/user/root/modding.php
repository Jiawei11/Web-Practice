<?php
	include_once('../link.php');
	$sql = $db->prepare('update user set user=:user,password=:pwd,name=:name where id=:id');
	$sql->bindValue('user',$_POST['user']);
	$sql->bindValue('pwd',$_POST['pwd']);
	$sql->bindValue('name',$_POST['name']);
	$sql->bindValue('id',$_POST['id']);
	$sql->execute();
	header('location:list.php');
?>