<?php
    include_once('link.php');
    session_start();
    $sql = $db->prepare('select * from member where user=:user');
    $sql->bindValue('user',$_POST['User']);
    $sql->execute();
    
    $row = $sql->fetch(PDO::FETCH_ASSOC);

    if($row == false){
        echo "<script>alert('無此帳號');location.reload();</script>";
    }elseif($row['pwd'] != $_POST['Pwd']){
        echo "<script>alert('密碼錯誤');location.reload();</script>";
    }else{
        $_SESSION['user'] = $row['user'];
        $_SESSION['rank'] = $row['power'];
        $_SESSION['id'] = $row['id'];
        echo "<script>alert('登入成功');location.reload();</script>";
    }   