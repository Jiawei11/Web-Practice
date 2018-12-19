<?php
    include_once('./link.php');
    $sql = $db->prepare('insert into newstyle(new_css) values(:css)');
    $css = "span{color:" . $_POST['titlecolor'] . ";font-size:" . $_POST['size'] . "px;";
    $sql->bindValue('css',$css);
    $sql->execute();
    header('location:addVersion.php');
?>