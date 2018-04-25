<?php
	include_once('link.php');
	$sql = $db->prepare('delete from login where id=:id');
	$sql->bindValue('id',$_GET['id']);
	$sql->execute();
	header("location:list.php");
?>