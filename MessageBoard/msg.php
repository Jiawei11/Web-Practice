<?php
	include_once('link.php');
	$sql = $db->prepare('select * from message');
	$sql->execute();
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
		echo $row['title'];
	}
?>