<?php
    include_once("link.php");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = $db->prepare('insert into board(title,content) values(:title,:content)');
    $sql->bindValue('title',$title);
    $sql->bindValue('content',$content);
    $sql->execute();
    echo '<script>alert("留言新增成功");location.href="index.html"</script>'
?>