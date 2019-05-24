<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body align="center">
	<form action="adduserprocess.php" method="POST">
    <p><h1>新增使用者</h1></p>
    <p>帳號:<input type="text" name="account" /></p>
    <p>密碼:<input type="password" name="pwd" /></p>
    <p>姓名:<input type="text" name="user" /></p>
    <p>
   		權限:<input type="radio" name="power" value="一般使用者" checked	/>一般使用者
	        <input type="radio" name="power" value="管理者"/>管理者
    </p>
    <p>
    	<input type="submit" />
        <input type="reset" />
    </p>
    </form>
</body>
</html>