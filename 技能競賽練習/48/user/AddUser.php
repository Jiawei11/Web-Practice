<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <a href="./member.php">功能區</a>
    </div>
    <div align="center">
        <span>新增會員</span>
        <form action="AddUserProcess.php" method="post">
            姓名: <input type="text" name="name">
            <p>
            帳號: <input type="text" name="user">
            <p>
            密碼: <input type="password" name="pwd">
            <p></p>
            權限
            <p></p>
            <input type="radio" name="rank" value="一般使用者" checked>一般使用者
            <input type="radio" name="rank" value="管理者">管理者
            <p></p>
            <input type="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>