<?php
    session_start();
    $_SESSION['MaxPeople'] = $_POST['MaxNumber'];
    $_SESSION['Temp'] = array();
    echo "<script>alert('人數設定完成。');location.href='./';</script>";
?>