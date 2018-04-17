<?php
	include_once('link.php');
	session_start();
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
		echo "<script>alert('帳號錯誤。');locaiton.href='./login.php';</script>";
		err();
	}else if($row['password'] != $pwd){
		echo "<script>alert('密碼錯誤。');locaiton.href='./login.php';</script>";
		err();
	}else if($txt != $ans){
		err();
	echo "<script>alert('驗證碼錯誤。');location.href='./login.php';</script>";
	}else{
		echo "<script>alert('登入成功。');location.href='index.php';</script>";
		$_SESSION['power'] = $row['power'];
	}
?>