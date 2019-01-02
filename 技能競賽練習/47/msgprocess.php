<?php
    include_once('link.php');
    date_default_timezone_set("Asia/Taipei");
    $sql = $db->prepare('INSERT INTO msg(username,mail,mailbool,phone,phonebool,content,nxcode,deldate) values(:n,:m,:mb,:p,:pb,:c,:nx,:deld)');
    $sql->bindValue('n',$_POST['user']);
    $sql->bindValue('m',$_POST['mail']);
    $sql->bindValue('mb',isset($_POST['mailcheck']) == false ? 0 : 1);
    $sql->bindValue('p',$_POST['phone']);
    $sql->bindValue('pb',isset($_POST['phonecheck']) == false ? 0 : 1);
    $sql->bindValue('c',$_POST['content']);
    $sql->bindValue('nx',$_POST['nxcode']);
    $sql->bindValue('deld',date('Y/m/d H:i:s'));
    $sql->execute();
    echo "<script>alert('訪客留言新增完成。');location.href='msg.php';</script>";
?>