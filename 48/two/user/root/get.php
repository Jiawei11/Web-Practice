<?php
	include_once('../link.php');
	$data = "%".$_POST['user']."%";
	$sql = $db->prepare('select * from user where user like :user');
	$sql->bindValue('user',$data);
	$sql->execute();
?>
<html>
	<head></head>
	<body>
    <?php
    	while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	?>
   		<table align="center" width="1000" height="120" border="3px">
        	<tr>
            	<th height="20" width="200">編號</th>
                <th height="20" width="200">帳號</th>
                <th height="20" width="200">密碼</th>
                <th height="20" width="200">姓名</th>
                <th height="20" width="200">權限</th>
            </tr>
            <tr height="100" align="center">
            	<td><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT) ?></td>
                <td><?php echo $row['user'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['power'] ?></td>
            </tr>
         </table>
        <?php
		}
		?>
        <P>
    </body>
</html>