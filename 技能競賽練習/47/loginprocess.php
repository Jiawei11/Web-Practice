<?php
    include_once('link.php');
    $sql = $db->prepare('select * from member where user=:us');
    $sql->bindValue('us',$_POST['user']);
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    
    if($row == false){
        echo "<script>alert('Error:Account');location.href='login.php';</script>";
    }elseif($row['pwd'] != $_POST['pwd']){
        echo "<script>alert('Error:Password');location.href='login.php';</script>";
    }else {
        echo "<script>alert('Success!!');location.href='member.php';</script>";
    }
?>