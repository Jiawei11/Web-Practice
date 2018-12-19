<?php
    include_once('link.php');
    $sql = $db->prepare('insert into news(news_title,news_img,news_summary,news_coin,news_link,news_version) values(:nt,:ni,:ns,:nc,:nl,:version)');
    $sql->bindValue('nt',$_POST['name']);
    $sql->bindValue('ni',$_FILES['img']['name']);
    $sql->bindValue('ns',$_POST['summary']);
    $sql->bindValue('nc',$_POST['money']);
    $sql->bindValue('nl',$_POST['link']);
    $sql->bindValue('version',$_POST['layout']);
    $sql->execute();
    move_uploaded_file($_FILES['img']['tmp_name'],"news_img/" . $_FILES['img']['name']);
    header('location:index.php');
?>