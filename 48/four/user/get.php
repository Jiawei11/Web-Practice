<?php
	include_once('link.php');
	$txt = $_POST['key'];
	$sort = $_POST['sort'];
	$method = $_POST['method'];
	$str = "";
	if($txt !=""){
		$str = "select * from login where user='{$txt}' order by {$sort} {$method}";
	}else{
		$str = "select * from login order by {$sort} {$method}";
	}
	$sql = $db->query($str);
	while($row=$sql->fetch(PDO::FETCH_ASSOC)){
?>
	<body>
    	<table border="1px" width="800" height="auto">
        	<tr>
            	<th>編號</th>
                <th>帳號</th>
                <th>密碼</th>
                <th>姓名</th>
                <th>權限</th>
            </tr>
            <tr>
            	<td><?php str_pad($row['id'],3,0,STR_PAD_LEFT); ?></td>
                <td><?php $row['user'];?></td>
                <td><?php $row['pwd'];?></td>
                <td><?php $row['name'];?></td>
                <td><?php $row['power'];?></td>
            </tr>
        </table>
    </body>
<?php
	}
?>