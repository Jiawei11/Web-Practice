<?php
	include_once('link.php');
	$sql = $db->prepare('update err set errorcount=:count where id=1');
	$sql->bindValue('count',$_POST['count']);
	$sql->execute();
	echo "<script>alert('修改成功。');location.href='member.php';</script>";
?>