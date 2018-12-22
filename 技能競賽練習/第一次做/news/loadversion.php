<?php
    session_start();
    include_once('link.php');
    if($_SESSION['DataCheck'] != "true"){
        echo "<script>alert('為填寫資料。');location.href='createnews.php';</script>";
    }

    $sql = $db->prepare('select * from version where id=:id');
    $sql->bindValue('id',$_SESSION['version']);
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    
    function checkcol($data){
        switch($data){
            case "費用":
                echo $_SESSION['item_money'];
                break;
            case "相關連結":
                echo $_SESSION['item_link'];   
                break;
            case "商品簡介":
                echo $_SESSION['item_summary'];
                break;
            case "商品名稱":
                echo $_SESSION['item_name']; 
                break;
            case "相片":
                echo $_SESSION['item_img']['name']; 
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border:1px solid #ccc;
            margin:auto auto;
            text-align:center;
        }
    </style>
</head>
<body>
    <div align="center">
        <a href="createnews.php">功能區</a><p></p>
        <h1>填寫資料</h1><p></p>
    </div>
    <table align="center">
        <thead>
            <tr>
                <th><?php echo $row['col1']; ?></th>
                <th><?php echo $row['col2']; ?></th>
                <th><?php echo $row['col3']; ?></th>
                <th><?php echo $row['col4']; ?></th>
                <th><?php echo $row['col5']; ?></th>
                <th><?php echo $row['col6']; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php checkcol($row['col1']); ?></td>
                <td><?php checkcol($row['col2']); ?></td>
                <td><?php checkcol($row['col3']); ?></td>
                <td><?php checkcol($row['col4']); ?></td>
                <td><?php checkcol($row['col5']); ?></td>
                <td><?php checkcol($row['col6']); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>