<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor Message</title>
</head>
<body>
    <div align="center">
        <form action="./msgprocess.php" method="post" enctype="mulitpart/form-data">
            <a href="./visitormsg.php">回留言列表</a><p></p>
            姓名: <input type="text" name="user"><p></p>
            E-mail: <input type="text" name="mail"> <input type="checkbox" name="mailcheck"><p></p>
            電話: <input type="text" name="phone"> <input type="checkbox" name="phonecheck"><p></p>
            內容: <input type="text" name="content"><p></p>
            留言序號: <input type="text" name="nxcode"><p></p>
            <input type="submit">
            <input type="reset">
            <input type="file" name="files[]" multiple>
        </form>
    </div>
</body>
</html>