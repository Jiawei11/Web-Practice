<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>選擇版型</title>
</head>
<body align="center">
    <a href="createnews.php">功能區</a>
    <p></p>
    <h1>選擇版型</h1><p></p>
    <form action="choiceprocess.php" method="get">
        <?php
            include_once('./link.php');
            $sql = $db->query('select * from version');
            while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                echo "<input type='radio' name='id' id={$row['title']} value={$row['id']} checked>{$row['title']}";
            }
        ?>
        <p></p>
        <input type="submit" value="選擇完成">
    </form>
</body>
</html>