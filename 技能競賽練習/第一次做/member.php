<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Member Cateogry</title>
</head>

	<?php
		session_start();
		if(isset($_SESSION['member']) == false){
			echo '<script>alert("沒有登入");location.href="login.php"</script>';
		}
	?>
<body>
	<div align="center">
    	<span>
			<?php
				if($_SESSION['Permission'] == "管理者"){
					echo "管理者專區" . "<p>";
					echo "<a href='MemberList.php'>會員清單</a>" . "<p>";
					echo "<a href='AddUser.php'>新增會員</a>" . "<p>";
				}else{
					echo "會員專區" ."<p>";
				}
			?>
			<a href="Logout.php">登出</a>
		</span>
    </div>
</body>
</html>