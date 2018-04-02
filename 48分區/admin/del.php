<?php
    include_once('../link.php');
    $get = $_GET['id'];
    $sql = $db->prepare('delete from login where id=:id');
    $sql->bindValue('id',$get);
    $sql->execute();
    echo header('location:all.php');
?>