<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body align="center">
	<?php
    	include_once('link.php');
		session_start();
		$sql = $db->prepare('select * from member where id=:id');
		$sql->bindValue('id',$_GET['id']);
		$sql->execute();
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		$_SESSION['id'] = $row['id'];
	?>
    <form action="modprocess.php" method="POST">
    	<table>
            <thead>
                <tr>
                    <th>帳號</th>
                    <th>密碼</th>
                    <th>姓名</th>
                    <th>權限</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="account" value=<?php echo $row['account']; ?> /></td>
                    <td><input type="text" name="pwd" value=<?php echo $row['pwd']; ?> /></td>
                    <td><input type="text" name="user" value=<?php echo $row['user']; ?> /></td>
                    <td>
                        <input type="radio" name="power" value="一般使用者" checked="checked"/>一般使用者
                        <input type="radio" name="power" value="管理者" />管理者
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="id" value=<?php echo $row['id']; ?> />
        <input type="submit" value="修改" />
    </form>
</body>
</html>