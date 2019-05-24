<?php
    session_start();
    include_once('link.php');
    $sql = $db->prepare('insert into class(classid,date,timeslot,purpose,applyer) values(:id,:d,:slot,:pur,:er)');
    $sql->bindValue('id',implode(",",$_POST['classid']));
    $sql->bindValue('d',$_POST['date']);
    $sql->bindValue('slot',implode(",",$_POST['slot']));
    $sql->bindValue('pur',$_POST['purpose']);
    $sql->bindValue('er',$_SESSION['user']);
    $sql->execute();
    echo "<script>alert('申請完成。');location.href='member.php'</script>";
?>