<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>製作電子報</title>
</head>
<body>
    <form action="addVersionProcess.php" method="post" enctype="multipart/form-data">
        <table align="center">
                <tr>
                    <th>電子報製作</th>
                </tr>
                <tr>
                    <td>
                        <a href="./index.php">回首頁</a>
                        <a href="./addlayout.php">新增版型</a><br>
                        <span>
                            <?php
                                include_once('link.php');
                                $sql = $db->prepare('select * from newstyle');
                                $sql->execute();
                                while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                                    echo $row['new_title'];
                                    echo "<input type='radio' name='layout' value='{$row['new_title']}' required>";
                                }
                            ?>
                        </span><p></p>
                        <span>商品名稱</span>
                        <input type="text" name="name"><p></p>
                        <input type="file" name="img"><p></p>
                        <span>商品簡介</span>
                        <input type="text" name="summary"><p></p>
                        <span>費用</span>
                        <input type="text" name="money"><p></p>
                        <span>相關連結</span>
                        <input type="text" name="link"><p></p>
                        <input type="submit">
                        <input type="reset">
                    </td>
                </tr>
            </table>
    </form>
</body>
</html>