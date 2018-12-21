<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        table{
            border:200px solid #ccc;
            text-align:center;
        }
    </style>
</head>
<body>
   <div align="center"><a href="addmember.php">新增會員</a></div>
   <table align="center">
    <thead>
        <tr>
            <td>會員</td>
            <td>訊息</td>
            <td>日期</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once('link.php');
            $sql = $db->query('select * from message');
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $row['user'];  ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
   </table> 
</body>
</html>