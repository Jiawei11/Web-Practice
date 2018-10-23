<?php
	include_once('link.php');	
	session_start();
	date_default_timezone_set("Asia/Taipei");
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check'] >=3){
			header('location:err.html');
			$_SESSION['check'] = 0;
		}
	}
	$user = $_POST['user'];
	$pwd=$_POST['pwd'];
	$ans = $_POST['ans'];
	$txt = $_POST['txt'];
	$sql = $db->prepare('select * from user where user=:user');
	$sql->bindValue('user',$user);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		echo "<script>alert('帳號錯誤。');location.href='./login.php';</script>";
		err();
	}else if($row['password'] != $pwd){
		echo "<script>alert('密碼錯誤。');location.href='./login.php';</script>";
		err();
	}else if($txt != $ans){
		err();
	echo "<script>alert('驗證碼錯誤。');location.href='./login.php';</script>";
	}else{
		echo "<script>alert('登入成功。');location.href='./index.php';</script>";
		$date = $db->prepare('update user set login=:time where id=:id');
		$date->bindValue('time',date('Y-m-d H:i:s'));
		$date->bindValue('id',$row['id']);
		$date->execute();
		$_SESSION['power'] = $row['power'];
		$_SESSION['id'] = $row['id'];
	}
?>