<?php
	session_start();
	include_once('../link.php');
	$sql = $db->prepare('select * from login');
	$sql->execute();
	if($_SESSION['power'] != "管理者"){
		echo "<script>alert('You are not admin.');location.href='./admin/adlogim.html';</script>";	
	}
?>
<head>
<script>
	function check(){
		if(!confirm('確定要刪除這個會員嗎?'))
		return false;
	}
</script>
</head>
<table wdith="100%"  border="1px" align="center">
	<tr>
    	<th	width="100px" height="80px">ID</th>
        <th	width="100px" height="80px">名稱</th>
       <th	width="100px" height="80px">權限</th>
        <th	width="100px" height="80px">功能</th>
    </tr>
    <?php
    while($record = $sql->fetch(PDO::FETCH_ASSOC)){
		?><tr align="center">
    	<td><?php echo $record['id'];?></td>
        <td><?php echo $record['username'];?></td>
        <td><?php echo $record['power'];?></td>
        <td><?php 
		if($record['power'] == "管理者"){
			echo "無法操作";
		}else{
			echo '<a  href="del.php?id='.$record['id'].'" onclick="return check()">刪除</a>';
		}
			
?>
        </td>
    </tr>
		<?Php }
	?>
</table>