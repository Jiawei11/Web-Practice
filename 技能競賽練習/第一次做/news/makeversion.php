<?php
    include_once('link.php');
    $css = "span{" . "font-size:" . $_POST['size'] . "px;" . "color:" . $_POST['color'] .";" . "background-color:" . $_POST['background-color']; .  ";}";
    echo $css;
    $sql = $db->prepare('insert into news(new_title,new_css) values(:title,:css)');
    $sql->bindValue('title',$_POST['title']);
    $sql->bindValue('css',$css);
    $sql->execute();
    header("Location:index.php");
?>