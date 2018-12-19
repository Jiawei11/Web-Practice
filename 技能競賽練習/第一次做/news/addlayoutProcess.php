<?php
    include_once('./link.php');
    $sql = $db->prepare('insert into newstyle(new_title,new_css) values(:title,:css)');
    $css = "color:" . $_POST['titlecolor'] . ";font-size:" . $_POST['size'] . "px;";
    $sql->bindValue('title',$_POST['title']);
    $sql->bindValue('css',$css);
    $sql->execute();
    header('location:addVersion.php');
?>