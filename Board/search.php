<?php
    include_once('link.php');
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = $db->prepare('select * from member where username=:user AND password=:pwd');
    $sql->bindValue('user',$user);
    $sql->bindValue('pwd',$pwd);
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
    $sqll = $db->prepare('select * from board');
    $sqll->execute();
    $roww=$sqll->fetch(PDO::FETCH_ASSOC);
    if($row['level'] == 'admin')
    {
        $sql = $db->prepare('select * from board');
        $sql->execute();
        while($record = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<table border='1px' align='center' style='font-size:40px;'>";
            echo "<th>序號</th><th>標題</th><th>內容</th><th>日期</th><th>功能</th>";
            echo '<tr><td>'. $record['id'] .'</td>';
            echo '<td>'. $record['title'] .'</td>';
            echo '<td>'. $record['content'] .'</td>';
            echo '<td>'. $record['date'] .'</td>';
            echo "<td><a href='del.php?id=$record[id]'>刪除</a><br><a href='updatee.php?id=$record[id]&title=$record[title]'>修改</a></td>";           
            echo '<tr>';
            echo "</table>";
        }
    }
    else if ($roww['id'] == '')
    {
        echo "沒有留言，請新增。<br>";
        echo "<a href='index.html'>留言去~</a>";
    }
    else
    {
        $sql = $db->prepare('select * from board');
        $sql->execute();
        while($record = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<table border='1px' align='center' style='font-size:40px;'>";
            echo "<th>序號</th><th width='20%'>標題</th><th width='20%'>內容</th><th>日期</th><th>功能</th>";
            echo '<tr><td>'. $record['id'] .'</td>';
            echo '<td>'. $record['title'] .'</td>';
            echo '<td>'. $record['content'] .'</td>';
            echo '<td>'. $record['date'] .'</td>';
            echo "<a href='index.html'>回首頁</a><td>無功能</td></tr>";
            echo "</table>";
        }
    }
?>