<?php
	session_start();
	include_once('link.php');
	$sql = $db->prepare('update member set account=:a,pwd=:p,user=:u,power=:power where id=:id');
	$sql->bindValue('a',$_POST['account']);
	$sql->bindValue('p',$_POST['pwd']);
	$sql->bindValue('u',$_POST['user']);
	$sql->bindValue('power',$_POST['power']);
	$sql->bindValue('id',$_SESSION['id']);
	$sql->execute();
	echo "<script>alert('修改成功。');location.href='member.php';</script>";
?>