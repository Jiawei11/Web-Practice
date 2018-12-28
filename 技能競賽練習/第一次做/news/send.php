<?php
    session_start();
    include_once('link.php');
    $sql = $db->prepare('insert into news(news_title,news_img,news_summary,news_coin,news_link,news_version) values(:nt,:ni,:ns,:nc,:nl,:nv)');
    $sql->bindValue('nt',$_SESSION['item_name']);
    $sql->bindValue('ni','<img src="news_img/'.$_SESSION['item_img']['name'].'">');
    $sql->bindValue('ns',$_SESSION['item_summary']);
    $sql->bindValue('nc',$_SESSION['item_money']);
    $sql->bindValue('nl','<a href="'.$_SESSION['item_link'].'">Link</a>');
    $sql->bindValue('nv',$_SESSION['item_title']);
    $sql->execute();
    echo "<script>alert('新增完成。');location.href='createnews.php';</script>";
?>