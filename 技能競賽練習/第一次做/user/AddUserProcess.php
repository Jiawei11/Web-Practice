<?php
    include_once('link.php');
    $sql = $db->prepare('insert into member(name,user,pwd,rank) values(:name,:user,:pwd,:rank)');
    $sql->bindValue('name',$_POST['name']);
    $sql->bindValue('user',$_POST['user']);
    $sql->bindValue('pwd',$_POST['pwd']);
    $sql->bindValue('rank',$_POST['rank']);
    $sql->execute();
    echo "<script>alert('新增成功');location.href='member.php';</script>";
?>