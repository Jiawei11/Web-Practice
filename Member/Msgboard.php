<head>
    <script src="./main.js"></script>
    <link rel="stylesheet" href="./main.css">
</head>
<table align="center">
<thead>
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>標題</th>
        <th>內容</th>
        <th>時間</th>
        </tr>
    </thead>
        
    <tbody>
        <?php
            include_once('link.php');
            $sql = $db->query('select * from data');
            $Count = $sql->rowCount();
            $MaxDataCount = 10;
            $Pages = ceil($Count/$MaxDataCount);
            $Page = isset($_GET['page']) == false ? 1 : $_GET['page'];
            $StartSelect = ($Page-1) * $MaxDataCount;
            $query = $db->query('select * from data LIMIT ' . $StartSelect . ',' . $MaxDataCount);
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php
            }
        ?>
    <tr>
        <td colspan="5">
            <div id="list">
                第
                <?php
                    for($i=1;$i<=$Pages;$i++){
                        if($Page - 3 < $i && $i < $Page + 3){
                ?>
                    <button class="test" CurrentPage='./index.php?page=<?php echo $i; ?>'><?php echo $i; ?></button>
                <?php
                    }
                }
                ?>
                頁
            </div>
        </td>
    </tr>
</tbody>
</table>