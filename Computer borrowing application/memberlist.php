<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body align="center">
	<p><h1>會員清單</h1></p>
    <table align="center">
    	<thead>
        	<tr>
            	<th>使用者編號</th>
                <th>帳號</th>
                <th>密碼</th>                
                <th>姓名</th>
                <th>權限</th>
                <th>方法</th>
            </tr>
        </thead>
        <tbody>
            	<?php
					session_start();
					include_once('link.php');
					$sql = $db->prepare('select * from member');
					$sql->execute();
					while($row=$sql->fetch(PDO::FETCH_ASSOC)){
				?>
                <tr>
                	<th><?php echo str_pad($row['id'],3,0,STR_PAD_LEFT); ?></th>
                    <th><?php echo $row['account']; ?></th>
                    <th><?php echo $row['pwd'];?></th>                    
                    <th><?php echo $row['user']; ?></th>
                    <th><?php echo $row['power'];?></th>
                    <th>
                    	<?php
						 if($row['user'] == "admin"){
							echo "不能修改";
							continue;	
						 }
						 if($row['power'] == "一般使用者" && $_SESSION['power'] == "管理者"){
							echo "<a href='stop.php?id=$row[id]'>停權</a>";
						 }
						?>
                    	<a href='mod.php?id=<?php echo $row['id']; ?>'>修改</a>
                    	<a href='del.php?id=<?php echo $row['id']; ?>'>刪除</a>                     
                    </th>
                </tr>
                <?php
					}
				?>
        </tbody>
    </table>
</body>
</html>