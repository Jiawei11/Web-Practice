<?php
    include_once('link.php');
    $sql = $db->prepare('insert into message(user,message) values(:u,:m)');
    $sql->bindValue('u',$_POST['user']);
    $sql->bindValue('m',$_POST['msg']);
    $sql->execute();
    echo "<script>alert('新增完成。');location.href='index.php';</script>";
?>