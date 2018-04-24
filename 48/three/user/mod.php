<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body align="center">
	<?php 
		session_start();
		include_once('link.php');
		$sql = $db->prepare('select * from login where id=:id');
		$sql->bindValue('id',$_GET['id']);
		$sql->execute();
		$row = $sql->fetch(PDO::FETCH_ASSOC);
	?>
    <h1>修改會員資料</h1>
    <form action="modding.php" method="post">
	帳號:<input type="text" name="user" value=<?php echo $row['user'];?> ><p>
    密碼:<input type="text" name="pwd" value=<?php echo $row['password'];?> ><p>
	姓名:<input type="text" name="name" value=<?php echo $row['name'];?> /><P>
    權限:<input type="radio" name="one" value="一般使用者" checked />一般使用者
    	 <input type="radio" name="one" value="管理者" />管理者<P>
   	<input type="submit" class='ui-button' />
    <input type="reset" class='ui-button' />
    <a href='index.php' class='ui-button'>回功能列表</a>
    <input type="hidden" name="id" value=<?php echo $row['id'];?> />
    </form>
</body>
</html>