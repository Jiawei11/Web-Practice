<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
	session_start();
	date_default_timezone_set('Asia/Taipei');
	include_once('link.php');
	function err(){
		$_SESSION['check'] +=1;
		if($_SESSION['check'] == 3){
			$_SESSION['check'] = 0;
				 echo '<script>alert("錯誤以達到三次");location.href="err.php"</script>'; 
		}	
	}

	function AddAction($reset){
		if($reset == 0){
			echo 1234;
		}else{
			$action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
			$action->bindValue('u',$_POST['username']);
			$action->bindValue('t',date('Y-m-d H:i:s'));
			$action->bindValue('r',"成功");
			$action->bindValue('a',"登入");
			$action->execute();
		}
	}
	$sql = $db->prepare('select * from member where user=:user');
	$sql->bindValue('user',$_POST['username']);
	$sql->execute();
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		err();
		$action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
		$action->bindValue('u',$_POST['username']);
		$action->bindValue('t',date('Y-m-d H:i:s'));
		$action->bindValue('r',"失敗");
		$action->bindValue('a',"登入");
		$action->execute();
		echo '<script>alert("帳號有誤");location.href="login.php"</script>';	
	}elseif($row['pwd'] != $_POST['pwd']){
		err();
		$action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
		$action->bindValue('u',$_POST['username']);
		$action->bindValue('t',date('Y-m-d H:i:s'));
		$action->bindValue('r',"失敗");
		$action->bindValue('a',"登入");
		$action->execute();
		echo '<script>alert("密碼有誤");location.href="login.php"</script>';
	}elseif($_POST['CaptchaAns'] != $_POST['ans']){
		err();
		$action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
		$action->bindValue('u',$_POST['username']);
		$action->bindValue('t',date('Y-m-d H:i:s'));
		$action->bindValue('r',"失敗");
		$action->bindValue('a',"登入");
		$action->execute();
		echo '<script>alert("圖形驗證碼有誤");location.href="login.php"</script>';
	}else{
		$_SESSION['member'] = $_POST['username'];
		$_SESSION['Permission'] = $row['rank'];
		$action = $db->prepare('insert into records(user,time,result,action) values(:u,:t,:r,:a)');
		$action->bindValue('u',$_POST['username']);
		$action->bindValue('t',date('Y-m-d H:i:s'));
		$action->bindValue('r',"成功");
		$action->bindValue('a',"登入");
		$action->execute();
		echo "<script>alert('登入成功');location.href='member.php'</script>";	
	}
?>
</body>
</html>