<?php    
    include_once('./link.php');
    $sql = $db->prepare('select * from member where m_name=:user');
    $sql->bindValue('user',$_POST['User']);
    $sql->execute();
    
    $query = $sql->fetch(PDO::FETCH_ASSOC);
    if($query == false || $query['m_pwd'] != $_POST['Pwd']){
        echo "<script>alert('帳號或密碼錯誤!!');location.href='index.html';</script>";
    }else{
        $_SESSION['User'] = $query;
        echo "<script>alert('登入成功!');location.href='Order.php';</script>";
    }