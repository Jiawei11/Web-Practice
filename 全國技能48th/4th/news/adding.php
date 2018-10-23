<?php
	include_once('link.php');
	$data = $_POST['css'];
	$sql = $db->prepare('insert into css(css) values(:css)');
	$sql->bindValue('css',$data);
	$sql->execute();
?>