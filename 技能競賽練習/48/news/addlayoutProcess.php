<?php
    include_once('link.php');
    $sql = $db->prepare('insert into version(title,col1,col2,col3,col4,col5,col6) values(:t1,:c1,:c2,:c3,:c4,:c5,:c6)');
    $sql->bindValue('t1',$_POST['title']);
    $sql->bindValue('c1',$_POST['key'][0]);
    $sql->bindValue('c2',$_POST['key'][1]);
    $sql->bindValue('c3',$_POST['key'][2]);
    $sql->bindValue('c4',$_POST['key'][3]);
    $sql->bindValue('c5',$_POST['key'][4]);
    $sql->bindValue('c6',$_POST['key'][5]);
    $sql->execute();
    echo "<script>alert('新增完成');location.href='createnews.php';</script>";
?>