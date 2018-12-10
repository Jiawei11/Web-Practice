<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>資料清單</title>
    <style>
        table{
            border-style: solid;
            width:auto;
            height:auto;
        }
    </style>
</head>
<div align="center">
            <a href="member.php">回功能區</a>
</div>
<?php
    include_once('link.php');
    $sql = $db->prepare('select * from records');
    $sql->execute();
    while($row=  $sql->fetch(PDO::FETCH_ASSOC)){
?>
<body>
    <div align="center">
        <table>
            <tr>
                <th>使用者</th>
                <th>時間</th>
                <th>動作</th>
                <th>結果</th>
            </tr>
            <tr>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo $row['result']; ?></td>
            </tr>
        </table>
        <p></p>
    </div>
</body>
<?php
    }
?>
</html>