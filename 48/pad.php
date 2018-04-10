<?php
	include_once('link.php');
	$sql = $db->prepare('SELECT id FROM login ORDER by id DESC LIMIT 1');
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	$str = str_pad($row['id'],3,0,STR_PAD_LEFT).'<br>';
	echo $str;
?>