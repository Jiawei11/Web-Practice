<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	include_once('link.php');
	$sql = $db->prepare('select * from login where id=:id');
	$sql->bindValue('id',$_GET['id']);
	$sql->execute();
	$row=$sql->fetch(PDO::FETCH_ASSOC);
?>
	<form action="modding.php" method="post">
    	帳號:<input type="text" value=<?php echo $row['user'];?> name="user">
        密碼:<input type="text" value=<?php echo $row['pwd'];?>  name="pwd">
        姓名:<input type="text" value=<?php echo $row['name'];?> name="name">
        <input type="submit" />
        <input type="reset" />
        <input type="hidden" value=<?php echo $row['id'];?>  name="id">
    </form>

</body>
</html>