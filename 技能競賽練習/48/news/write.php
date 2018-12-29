<?php
    session_start();
    include_once('link.php');
    if(isset($_SESSION['version']) == false){
        echo "<script>alert('未選擇版型。');location.href='createnews.php';</script>";
    }
    
    
    
    
    
    function checkcol($data){
        switch($data){
            case "news_coin":
                text($name = "item_money");
                break;
            case "news_link":
                text($name = "item_link");
                break;
            case "news_summary":
                text($name = "item_summary");
                break;
            case "news_title":
                text($name = "item_name");
                break;
            case "news_img":
                text($name = "item_img");
                break;
        }
    }

    function text($name){
        switch($name){
            case ($name == "item_money"  || $name == "item_link" || $name == "item_name" || $name == "item_summary"):
                echo "<input type='text' name={$name}>";
                break;
            case "item_img":
                echo "<input type='file' name={$name}>";
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
        }
    </style>
</head>
<body>
    <div align="center">
        <a href="createnews.php">功能區</a><p></p>
        <h1>填寫資料</h1><p></p>
    </div>
    <?php
                $sql = $db->prepare('select * from version where id=:id');
                $sql->bindValue('id',$_SESSION['version']);
                $sql->execute();
                $row=$sql->fetch(PDO::FETCH_ASSOC);
    ?>
    <form action="writeprocess.php?title=<?php echo $row['title']; ?>" method="post" enctype="multipart/form-data">
        <table>
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
        <hr>
        <div align="center">
            <input type="submit" value="確定">
        </div>
    </form>
</body>
</html>