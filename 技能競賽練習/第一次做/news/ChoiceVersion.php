<?php
    include_once('./link.php');
    $sql = $db->query('select * from version');
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        echo "<td><input type='radio' name='version' value={$row['title']} checked>{$row['title']}</td>";
    }
?>