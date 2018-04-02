<?php
    include_once('link.php');
    $id = $_POST['id'];
    $get = $_POST['text'];
    $sql = $db->prepare('UPDATE `board` SET content=:get WHERE id=:id');
    $sql->bindValue('get',$get);
    $sql->bindValue('id',$id);
    $sql->execute();
    echo '<script>alert("留言更新成功");location.href="search.php"</script>';
?>