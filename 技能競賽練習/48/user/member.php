<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
	<title>Member Cateogry</title>
</head>
	<script>
		$(function(){
			var a = setInterval(() => {
				var check = confirm('繼續使用');
				setInterval(() => {
					console.log(check);
					if(check != false || check !=true){	
						location.href ='logout.php';
					}
				}, 5000);
				if(check==true){
					check = true;
				}else{
					check =false;
				}

				if(check == false){
					location.href='logout.php';
				}
			}, (60000));
			
		});
	</script>
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
					echo "<a href='ActionList.php'>紀錄資料</a>" . "<p>";
				}else{
					echo "會員專區" ."<p>";
				}
			?>
			<a href="Logout.php">登出</a>
		</span>
    </div>
</body>
</html>