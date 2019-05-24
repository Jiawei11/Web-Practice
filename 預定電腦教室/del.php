<?php
	include_once('link.php');
	$sql = $db->prepare('delete from member where id=:id');
	$sql->bindValue('id',$_GET['id']);
	$sql->execute();
	header('location:memberlist.php');
?>