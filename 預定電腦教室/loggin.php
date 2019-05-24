<?php
	session_start();
	include_once('link.php');
	date_default_timezone_set('Asia/Taipei');
	$sql = $db->prepare('select * from member where account=:acc');
	$sql->bindValue('acc',$_POST['user']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
		$Count = $db->prepare('select * from error where id=1');
		$Count->execute();
		$CountRow = $Count->fetch(PDO::FETCH_ASSOC);
		$_SESSION['Count'] =$CountRow['errorcount'];
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check'] >= $_SESSION['Count']){
			$_SESSION['check'] = 0;
			header('location:error.php');
		}
	}
	if($row == false){
		err();
		echo "<script>alert('帳號錯誤。');location.href='login.php';</script>";
	}else if($row['pwd'] != $_POST['pwd']){
		err();
		echo "<script>alert('密碼錯誤。');location.href='login.php'</script>";
	}else if($row['stop'] != 0){
		echo "<script>alert('您的帳號被停權，請聯繫管理者!。');location.href='login.php'</script>";
	}else{
		if(isset($_POST['check'])==""){
			$_SESSION['cbool'] = false;
		}else{
			$_SESSION['cbool'] = true;
		}
		$_SESSION['power'] = $row['power'];
		$_SESSION['user'] = $row['user'];
		$sql2 = $db->prepare('update member set log=:t where id=:id');
		$sql2->bindValue('t',date('Y/m/d H:i:s'));
		$sql2->bindValue('id',$row['id']);
		$sql2->execute();
		echo "<script>alert('登入成功。');location.href='member.php';</script>";
	}
?>