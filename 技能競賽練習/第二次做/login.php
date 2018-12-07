<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery/jquery-3.3.1.min.js"></script>
<title>Index</title>
<style>
	span{
		font-size:40px;
		color:red;
	}
</style>
</head>

<?php
	session_start();
	if(isset($_SESSION['check'])){
		$_SEESION['check'] = 0;
	}
?>
<body>
	<div align="center">
    	輸入帳號和密碼
        <div align="center">
        <form action="loggin.php" method="POST">
        	帳號:<input type="text" name="username" />
            <p>
            密碼:<input type="password" name="pwd" />
            <P>
            <input type="submit" />
            <input type="reset" />
        </form>
        </div>
    </div>
</body>
</html>