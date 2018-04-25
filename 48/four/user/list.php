<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
    <a href='index.php'>回首頁</a>
	<?php
    	session_start();
		if($_SESSION['power'] !="管理者"){
			echo "<script>alert('不是管理者');location.href='login.php';</script>";
		}
		include_once('link.php');
		$sql = $db->prepare('select * from login');
		$sql->execute();
		while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	?>
    <table border="1px" width="600" height="auto">
    	<tr>
        	<th>編號</th>
            <th>帳號</th>
            <th>密碼</th>
            <th>姓名</th>
            <th>權限</th>
            <th>登入</th>
            <th>登出</th>
            <th>功能</th>
        </tr>
        <tr>
        	<td><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT); ?></td>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['pwd']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['power']; ?></td>
            <td><?php echo $row['login']; ?></td>
            <td><?php echo $row['logout']; ?></td>
            <td><?php 
					if($row['user'] == "admin"){
						echo "無法更改";
					}else{
				?>
                <a href='mod.php?id=<?php echo $row['id'] ?>'>修改</a>
                <a href='del.php?id=<?php echo $row['id'] ?>'>刪除</a>
                <?php }?></td>  
                <P>                      
        </tr>
    </table>
    <?php } ?>
</body>
</html>
