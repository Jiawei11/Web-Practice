<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>電子報</title>
    <style>
        img{
            width:100px;
        }
    </style>
</head>
<body>
    <div align="center">
        <span style="font-size:60px;background-color:green;">商品電子報首頁</span>
        <a href="../member.php">功能區</a>
        <a href="./layout.php">製作電子報</a>
        <a href="./SearchNews.php">查詢電子報</a>
        <p>
            <table>
                <?php
                    include_once('link.php');
                    $sql = $db->prepare('select * from news');
                    $sql->execute();
                    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div align="center">
                    <tr>
                        <span>
                            <td>
                                <img src="news_img/<?php echo $row['news_img']; ?>" alt="">
                            </td>
                            <td><?php echo $row['news_title']; ?> </td>
                        </span>
                    </tr>
                </div>
                <?php
                    }
                ?>
            </table>
    </div>
</body>
</html>