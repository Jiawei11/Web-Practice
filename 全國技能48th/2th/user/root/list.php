<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>User List</title>
</head>
<body>
	<?php
		session_start();
		include_once('../link.php');
		$sql = $db->prepare('select * from user');
		$sql->execute();
		if($_SESSION['power'] != "管理者"){
			echo "<script>alert('沒有權限');location.href='../login.php';</script>";
		}
	?>
    <center><a class="ui-button" href="../index.php">回頁面</a>
	<table wdith="100%"  border="1px" align="center">
		<tr>
    	<th	width="100px" height="80px">ID</th>
        <th	width="100px" height="80px">帳號</th>
        <th	width="100px" height="80px">密碼</th>
		<th	width="100px" height="80px">名稱</th>
      	<th	width="100px" height="80px">權限</th>
        <th	width="100px" height="80px">功能</th>
        <th width="100px" height="80px">登入時間</th>
   	 </tr>
     <?php
	 	while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	 ?>
     <tr align="center">
     <td><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT); ?></td>
     <td><?php echo $row['user'];?></td>
     <td><?php echo $row['password'];?></td>
     <td><?php echo $row['name'];?></td>
     <td><?php echo $row['power'];?></td>
     <td><?php if($row['power'] == "管理者"){
			echo "無法更改";
		}else{?>
      <a href="mod.php?id=<?php echo $row['id'];?>">修改</a>
	  <a href="delete.php?id=<?php echo $row['id'];?>">刪除</a>
    <?php 
		}
	?>
      </td>
      <td><?php echo $row['login']; ?></td>
     </tr>
     <?php
		}
	 ?>
    </table>
</body>
</html>