<?php
	session_start();
	include_once('link.php');
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check'] >=3){
			$_SESSION['check'] = 0;
			echo '<script>alert("錯誤以達到三次");location.href="index.php"</script>';
		}	
	}
	$sql = $db->prepare('select * from member where user=:user');
	$sql->bindValue('user',$_POST['username']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		err();
		echo '<script>alert("帳號不存在");location.href="index.php"</script>';	
	}elseif($row['pwd'] != $_POST['pwd']){
		err();
		echo '<script>alert("密碼錯誤");location.href="index.php"</script>';	
	}else{
		echo '<script>alert("登入成功");location.href="member.php"</script>';	
	}
?>