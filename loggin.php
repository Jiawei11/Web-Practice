<?php
    include_once('link.php');
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = $db->prepare('SELECT * FROM member WHERE  username=:user AND password=:pwd');
    $sql->bindValue('user',$user);
    $sql->bindValue('pwd',$pwd);
    $sql->execute();
    $record = $sql->fetch(PDO::FETCH_ASSOC);
    echo $record['username'];
?>