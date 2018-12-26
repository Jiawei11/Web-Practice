<table align="center">
    <?php
        include_once('link.php');
        if($_POST['key'] == ""){
            $query = 'select * from news where news_coin <=' . $_POST['n'];
        }else{
            $query = 'select * from news where news_title="' . $_POST['key'] . '" and news_coin<=' . $_POST['n'];
        }
        $sql=$db->prepare($query);
        $sql->execute();
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