<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>電子報</title>
    <style>
        img{
            width:280px;
            height:350px;
        }
    </style>
</head>
<body>
    <div align="center">
        <div style="background-color:aqua;">
            <span style="font-size:50px;">商品電子報首頁</span>
            <a href="../">回首頁</a>
            <a href="./addVersion.php">製作電子報</a>
            <a href="./SearchVersion.php">搜尋電子報</a>
        </div>
        <div width="700px;">
            <?php
                include_once('./link.php');
                $sql = $db->query('select * from news');
                while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                    $sql2 = $db->prepare('select new_css,new_title from newstyle where new_title = :check');
                    $sql2->bindValue('check',$row['news_version']);
                    $sql2->execute();
                    $record = $sql2->fetch(PDO::FETCH_ASSOC);
            ?>
                <table style="<?php echo $record['new_css'];  ?>" width="350px;">
                    <tr>
                        <th><?php echo $row['news_title']; ?></th>
                        <th><?php echo $row['news_coin']; ?></th>
                    </tr>
                    <tr>
                        <td>
                            <img src="news_img/<?php echo $row['news_img']; ?>">
                        </td>
                        <td>
                            <?php echo $row['news_summary']; ?><p></p>
                            <?php echo $row['news_date']; ?><p></p>
                            <a href="<?php echo $row['news_link']; ?>">相關連結</a>
                        </td>
                    </tr>
                </table>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>