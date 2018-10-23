<?php
	include_once('../link.php');
	$get = $_GET['id'];
	$sql = $db->prepare('delete from user where id=:id');
	$sql->bindValue('id',$get);
	$sql->execute();
	header('location:list.php'); 
?>