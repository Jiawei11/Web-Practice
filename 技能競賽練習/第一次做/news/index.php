<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>電子報</title>
    <style>
        body{
            user-select:none;
        }

        img{
            width:100%;
            height:20%;
        }

        td{
            width:970px;
        }
    </style>
</head>
<body>
    <div align="center">
        <div style="background-color:aqua;">
            <span style="font-size:50px;">商品電子報首頁</span>
            <a href="../">回首頁</a>
            <a href="./createnews.php">製作電子報</a>
            <a href="./SearchVersion.php">搜尋電子報</a>
        </div>
    </div>

    <table>
        <?php
            include_once('link.php');
            $sql = $db->query('select * from news');
            while($row=$sql->fetch(PDO::FETCH_ASSOC)){
                $sql2=$db->prepare('select * from version where title=:t');
                $sql2->bindValue('t',$row['news_version']);
                $sql2->execute();
                while($row2=$sql2->fetch(PDO::FETCH_ASSOC)){
        ?>
        <thead>
            <tr>
                <td><?php echo $row2['col1']; ?></td>
                <td><?php echo $row2['col2']; ?></td>
                <td><?php echo $row2['col3']; ?></td>
                <td><?php echo $row2['col4']; ?></td>
                <td><?php echo $row2['col5']; ?></td>
                <td><?php echo $row2['col6']; ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
                <?php 
                    switch ($row2['col1']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
                <td>
                <?php 
                    switch ($row2['col2']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
                <td>
                <?php 
                    switch ($row2['col3']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
                <td>
                <?php 
                    switch ($row2['col4']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
                <td>
                <?php 
                    switch ($row2['col5']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
                <td>
                <?php 
                    switch ($row2['col6']) {
                        case "發佈日期":
                            echo $row['news_date'];
                            break;
                        case "費用":
                            echo $row['news_coin'];
                            break;
                        case "相關連結":
                            echo "<a href='{$row['news_link']}'>相關連結</a>";
                            break;
                        case "商品簡介":
                            echo $row['news_summary'];
                            break;
                        case "相片":
                            echo "<img src=news_img/{$row['news_img']}";
                            break;
                        case "商品名稱";
                            echo $row['news_title'];
                            break;
                        }
                    ?>
                </td>
            </tr>
        </tbody>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>