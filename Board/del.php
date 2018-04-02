<?php
    include_once('link.php');
    $id = $_GET['id'];
    $sql = $db->prepare('delete from board where id=:id');
    $sql->bindValue('id',$id);
    $sql->execute();
    echo '<script>alert("留言刪除成功");location.href="search.php"</script>';
?>