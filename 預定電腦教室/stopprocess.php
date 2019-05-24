<?php
	include_once('link.php');
	$sql=$db->prepare('update member set stop=:s where id=:id');
	$sql->bindValue('s',$_POST['stop']);
	$sql->bindValue('id',$_POST['id']);
	$sql->execute();
	echo "<script>alert('停權狀態已更改。');location.href='login.php'</script>";
?>