<?php
	include_once('link.php');
	session_start();
	date_default_timezone_set("Asia/Taipei");
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check'] >=3){
			echo "<script>alert('超過三次錯誤');location.href='err.html';</script>";
			$_SESSION['check'] = 0;
		}
	}
	$sql = $db->prepare('select * from login where user=:user');
	$sql->bindValue('user',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		err();
		echo "<script>alert('帳號錯誤');location.href='login.php';</script>";
	}else if($_POST['pwd'] != $row['password']){
		err();
		echo "<script>alert('密碼錯誤');location.href='login.php';</script>";
	}else if($_POST['text'] != $_POST['ans']){
		err();
		echo "<script>alert('驗證碼錯誤錯誤');location.href='login.php';</script>";
	}else{
		$date = $db->prepare('update login set login=:time where id=:id');
		$date->bindValue('time',date('Y-m-d H:i:s'));
		$date->bindValue('id',$row['id']);
		$date->execute();
		$_SESSION['power'] = $row['power'];
		$_SESSION['id'] = $row['id'];
		echo "<script>alert('登入成功');location.href='index.php';</script>";
	}
?>