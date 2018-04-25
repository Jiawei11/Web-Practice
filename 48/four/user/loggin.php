<?php
	session_start();
	include_once('link.php');
	date_default_timezone_set("Asia/Taipei");
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check']>=3){
			echo "<script>alert('錯誤超過三次');location.href='err.html';</script>";
			$_SESSION['check'] =0;
		}
	}
	$sql = $db->prepare('select * from login where user=:username');
	$sql->bindValue(':username',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if ($row == false){
		err();
		echo "<script>alert('帳號錯誤');location.href='login.php';</script>";
	}else if($row['pwd']!=$_POST['pwd']){
		err();
		echo "<script>alert('密碼錯誤');location.href='login.php';</script>";
	}else if($_POST['text'] != $_POST['ans']){
		err();
		echo "<script>alert('驗證碼錯誤');location.href='login.php';</script>";
	}else{
		$data = $db->prepare('update login set login=:time where id=:id');
		$data->bindValue('time',date("Y-m-d H:i:s"));
		$data->bindValue('id',$row['id']);
		$data->execute();
		echo "<script>alert('登入成功');location.href='index.php';</script>";
		$_SESSION['power'] = $row['power'];
		$_SESSION['id'] = $row['id'];
	}
?>