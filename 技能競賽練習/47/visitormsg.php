<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor Message</title>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <script src="./jquery/jquery-ui.min.js"></script>
    <style>
        table{
            border:1px solid #ccc;
        }
        
        tbody>tr>td{
            text-align:center;
        }
    </style>
</head>
<body>
    <div align="center">
        <a href="./">回首頁</a>
        <a href="./msg.php">新增留言</a>
    </div>
    <p></p>
    <table align="center">
        <thead>
            <tr>
                <th>姓名</th>
                <th>留言內容</th>
                <th>E-mail</th>
                <th>電話</th>
                <th>時間</th>
                <th>管理者回復</th>
                <th>修改刪除時間</th>
                <th>使用方法</th>
            </tr>
        </thead>
        <?php
            include_once('link.php');
            $sql = $db->query('select * from msg order by date desc');
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><?php echo $row['mailbool'] == 1? $row['mail'] : "不顯示"?></td>
                <td><?php echo $row['phonebool'] == 1? $row['phone'] : "不顯示" ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['rootrequest'] == "" ? "還未回復" : $row['rootrequest']; ?></td>
                <td><?php echo $row['deldate']==$row['date'] ? "未刪除" : $row['deldate']; ?></td>
                <td>
                    <a href="">修改</a>
                    <a href="">刪除</a>
                </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</body>
</html>