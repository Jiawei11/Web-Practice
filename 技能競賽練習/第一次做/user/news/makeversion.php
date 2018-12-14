<?php
    include_once('link.php');
    $sql = $db->prepare('insert into news(news_title,news_img,news_summary,news_coin,news_link) values(:nt,:ni,:ns,:nc,:nl)');
    $sql->bindValue('nt',$_POST['title']);
    $sql->bindValue('ni',$_FILES['img']['name']);
    $sql->bindValue('ns',$_POST['summary']);
    $sql->bindValue('nc',$_POST['coin']);
    $sql->bindValue('nl',$_POST['link']);
    $sql->execute();
    move_uploaded_file($_FILES['img']['tmp_name'],"news_img/".$_FILES['img']['name']);
    header('location:index.php');
?>