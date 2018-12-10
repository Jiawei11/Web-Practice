<?php
    include_once('link.php');
    $sql = $db->prepare('update member set user=:user,pwd=:pwd,name=:name,rank=:rank where id=:id');
    $sql->bindValue('user',$_POST['user']);
    $sql->bindValue('pwd',$_POST['pwd']);
    $sql->bindValue('name',$_POST['name']);
    $sql->bindValue('rank',$_POST['rank']);
    $sql->bindValue('id',$_POST['id']);
    $sql->execute();
    header("Location:memberlist.php");
?>