<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>修改</title>
</head>
<body align="center">
	<?php
		include_once('../link.php');
		$get = $_GET['id'];
		$sql = $db->prepare('select * from user where id=:id');
		$sql->bindValue('id',$get);
		$sql->execute();
 		while($row = $sql->fetch(PDO::FETCH_ASSOC)){	
	?>
    <h1>修改會員資料</h1>	
    <form action="modding.php" method="post">
    帳號:<input class="ui-corner-all" type="text" name="user" value=<?php echo $row['user'];?> />
    <P>
    密碼:<input class="ui-corner-all"  type="text" name="pwd" value=<?php echo $row['password'];?> />
    <p>
    姓名:<input class="ui-corner-all" type="text" name="name" value=<?php echo $row['name'];?> />
    <P>
    <input class="ui-button" type="submit" />
    <Input class="ui-button" type="reset" />
    <a class="ui-button" href="../index.php">回頁面</a>
	<?php
		}
	?>
    <input type="hidden" name=id value=<?php echo $_GET['id'];?> />
    </form>
</body>
</html>