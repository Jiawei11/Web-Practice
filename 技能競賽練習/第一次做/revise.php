<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revise Member Data</title>
</head>
<body>
    <?php
        include_once('link.php');
        $sql = $db->prepare('select * from member where id=:id');
        $sql->bindValue('id',$_GET['id']);
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
    ?>
    <div align="center">
        <a href="memberlist.php">回功能區</a><p></p>
        <form action="ReviseProcess.php" method="post">
            帳號: <input type="text" name="user" value=<?php echo $row['user'];  ?>><p></p>
            密碼: <input type="text" name="pwd" value=<?php echo $row['pwd'];  ?>><p></p>
            姓名: <input type="text" name="name" value=<?php echo $row['name'];  ?>><p></p>
            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            <input type="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>