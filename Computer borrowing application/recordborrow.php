<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;
        }

        table{
            border-collapse:collapse;
            margin:0 auto;
            text-align:center;
        }
    </style>
</head>
<body>
    <p>
        <div align="center">
            <a href="./member.php">功能區</a>
        </div>
    </p>
    <table>
        <thead>
            <tr>
                <th>電腦教室編號</th>
                <th>借用時間</th>
                <th>借用時段</th>
                <th>借用目的</th>
                <th>審核狀態</th>
            </tr>
        </thead>
        <tbody>
            <?php
                session_start();
                include_once('link.php');
                $sql=$db->prepare('select * from class where applyer=:er');
                $sql->  bindValue('er',$_SESSION['user']);
                $sql->execute();
                while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            ?>
             <tr>
                <td><?php echo $row['classid']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo implode(" ",explode(",",$row['timeslot']));?></td>
                <td><?php echo $row['purpose'];?></td>
                <td><?php echo $row['apply'];?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>