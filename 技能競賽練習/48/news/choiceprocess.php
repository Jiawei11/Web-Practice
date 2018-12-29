<?php
    session_start();
    include_once('link.php');
    $_SESSION['version'] = $_GET['id'];
    echo "<script>alert('選擇完成');location.href='createnews.php';</script>";
?>