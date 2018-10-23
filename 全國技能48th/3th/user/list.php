<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
	<?php
		session_start();
		if($_SESSION['power'] != "管理者"){
			echo "<script>alert('沒有權限');location.href='login.php';</script>";
		}
    	include_once('link.php');
		$sql = $db->prepare('select * from login');
		$sql->execute();
		echo '<p>'.'<center>';
		echo "<a href='./index.php' class='ui-button'>回功能列表</a>";
		echo '<p>';
		while($row=$sql->fetch(PDO::FETCH_ASSOC)){
	?>
	<head>
		<style>
			th{
				color:white;
				background-color:#39f;
			}
			td{
				color:white;
				background-color:#39f;
			}
		</style>
	</head>
    <table border="1px" width="1024" height="auto" align="center">
   		<tr>
        	<th height="60" width="70" align="center">編號</th>
        	<th height="60" width="70" align="center">帳號</th>
        	<th height="60" width="70" align="center">密碼</th>
            <th height="60" width="70" align="center">姓名</th>
            <th height="60" width="70" align="center">登入</th>
            <th height="60" width="70" align="center">登出</th>
            <th height="60" width="70" align="center">權限</th>
        </tr>
        <tr>
        	<td height="60"  width="70" align="center"><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT)?></td>
        	<td height="60"  width="70" align="center"><?php echo $row['user']?></td>
            <td height="60" width="70" align="center"><?php echo $row['password']?></td>
            <td height="60" width="70" align="center"><?php echo $row['name']?></td>
            <td height="60" width="70" align="center"><?php echo $row['login']?></td>
            <td height="60" width="70" align="center"><?php echo $row['logout']?></td>
            <td height="60" width="70" align="center">
            	<?php if($row['user'] == "admin"){
					echo "無法更改";
				}else{?>
                <a href="mod.php?id=<?php echo $row['id']?>" class="ui-button">修改</a>
                <a href="del.php?id=<?php echo $row['id']?>" class="ui-button">刪除</a>
            	<?php
				}
				?>
            </td>
        </tr>
    </table>
    <?php
	echo '<p>';
	}
	?>
</body>
</html>