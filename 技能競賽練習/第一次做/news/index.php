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
        <a href="layout.php">製作電子報</a>
        <a href="search.php">查詢電子報</a>
        <p>
            <table>
                <tr>
                    <th>編號</th>
                    <th>商品名稱</th>
                    <th>商品簡介</th>
                    <th>商品價錢</th>
                    <th>發佈日期</th>
                    <th>相關連結</th>
                    <th>圖片</th>
                </tr>
                <?php
                    include_once('link.php');
                    $sql = $db->prepare('select * from news');
                    $sql->execute();
                    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div align="center">
                    <tr align="center">
                        <td width="100px"><?php echo $row['id']; ?></td>
                        <td width="100px"><?php echo $row['news_title']; ?></td>
                        <td width="100px"><?php echo $row['news_summary']; ?></td>
                        <td width="100px"><?php echo $row['news_coin']; ?></td>
                        <td width="180px"><?php echo $row['news_date']; ?></td>
                        <td width="100px"><a href="<?php echo $row['news_link']; ?>">連結</a></td>
                        <td width="100px"><img src="news_img/<?php echo $row['news_img']; ?> " alt=""></td>
                    </tr>
                </div>
                <?php
                    }
                ?>
            </table>
    </div>
</body>
</html>