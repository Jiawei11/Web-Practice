<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
</head>

<body>
	<form action="adding.php" method="post">
	帳號:<input type="text" name="user">
    密碼:<input type="text" name="password">
    姓名:<input type="text" name="name">
    權限:<input type="radio" name="power" value="一般使用者">一般使用者
    	<input type="radio" name="power" value="管理者">管理者
    <input type="submit" />
    <input type="reset" />
    <a href='index.php'>回功能列表</a>
    </form>
</body>
</html>