<?php
	include_once('link.php');
	session_start();
		function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check']>=3){
			header('location:err.html');
			$_SESSION['check'] = 0;
		}
	}
	
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$ans = $_POST['ans'];
	$txt =$_POST['txt'];
	$sql = $db->prepare('select * from login where username=:user');
	$sql->bindValue('user',$user);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		err();
		echo "<script>alert('帳號錯誤。');location.href='./login.php';</script>";
	}else if($pwd != $row['password']){
		err();
		echo "<script>alert('密碼錯誤。');location.herf='./login.php';</script>";
	}else if($txt != $ans){
		err();
		echo "<script>alert('驗證碼錯誤。');location.href='./login.php';</script>";
	}else{
		echo "登入成功";
	}
?>