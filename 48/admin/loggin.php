<?php session_start(); ?>
<?php
	include_once('../link.php');
	$sql = $db->prepare('select * from login where username=:user AND power="管理者"');
	$sql->bindValue('user',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	$row['power'];
	if($_POST['user'] != $row['username'])
	{
	echo "<script>alert('You not admin');location.href='../login.html';</script>";
		}else{
					$_SESSION['user'] = $row['username'];
					$_SESSION['power'] = $row['power'];
				echo "<body align='center'>";
	echo $row['username'].'<br>';
	echo "<a href='./add.php'>新增帳號</a>".'<br>';
	echo "<a href='./all.php'>會員列表</a>";
	}
?>