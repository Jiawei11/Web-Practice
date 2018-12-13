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
        <span>製作版型</span>
        <form action="./makeversion.php" method="post">
            版型標題:<input type="text" name="title" placeholder="版型標題" required><p>
            字型大小:<input type="number" name="size" placeholder="字型大小" required><p> 
            文字顏色:<input type="color" name="color" required><p>
            背景顏色:<input type="color" name="background-color" required><p>
            <input type="submit">
            <input type="reset">
        </form>
    </div>
</body>
</html>