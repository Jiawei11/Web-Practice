<?php
    include_once('./link.php');
    echo json_encode($_SESSION['User']); //以JSON格式輸出
?>