<?php
	session_start();
	unset($_SESSION['power']);
	echo "<script>alert('登出成功。');location.href='../login.php'</script>";
?>