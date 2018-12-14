<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>製作版型</title>
    <link rel="stylesheet" href="version.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
</head>
<body>
    <div align="center">
        <a href="index.php">功能區</a><p>
        <span>製作電子報</span>
        <form action="./makeversion.php" method="post" enctype="multipart/form-data">
            圖片:<input type="file" name="img"><p></p>
            商品名稱:<input type="text" name="title"><p></p>
            商品簡介:<input type="text" name="summary"><p></p>
            商品價錢:<input type="text" name="coin"><p></p>
            相關連結:<input type="text" name="link"><p></p>
            <input type="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>