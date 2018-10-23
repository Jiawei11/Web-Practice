<?php
	session_start();
	if($_SESSION['power'] == "管理者"){
		echo "管理者專區".'<P>';
		echo "<a href='adduser.php'>新增會員</a>".'<p>';
		echo "<a href='list.php'>會員列表</a>".'<p>';
		echo "<a href='search.php'>查詢會員</a>".'<p>';
		echo "<a href='logout.php'>登出</a>";
	}else if($_SESSION['power'] == "一般使用者"){
		echo "一般會員專區";
		echo "<a href='logout.php'>登出</a>";
	}
?>