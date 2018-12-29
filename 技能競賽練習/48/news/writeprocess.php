<?php
    session_start();
    $_SESSION['item_name'] = $_POST['item_name'];
    $_SESSION['item_img'] = $_FILES['item_img'];
    $_SESSION['item_summary'] = $_POST['item_summary'];
    $_SESSION['item_money'] = $_POST['item_money'];
    $_SESSION['item_link'] = $_POST['item_link'];
    $_SESSION['item_title'] = $_GET['title'];
    $_SESSION['DataCheck'] = "true";
    move_uploaded_file($_SESSION['item_img']['tmp_name'],'news_img/' . $_SESSION['item_img']['name']);
    echo "<script>alert('資料儲存完畢。');location.href='createnews.php';</script>";
?>