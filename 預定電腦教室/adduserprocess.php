<?php
	include_once('link.php');
	$sql = $db->prepare('insert into member(user,account,pwd,power) values(:u,:a,:p,:po)');
	$sql->bindValue('u',$_POST['user']);
	$sql->bindValue('a',$_POST['account']);
	$sql->bindValue('p',$_POST['pwd']);
	$sql->bindValue('po',$_POST['power']);
	$sql->execute();
	echo "<script>alert('新增完成。');location.href='member.php';</script>";
?>