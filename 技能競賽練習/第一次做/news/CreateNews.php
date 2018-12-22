<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>製作電子報</title>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./jquery/jquery-ui.min.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <link rel="stylesheet" href="news.css">
    <script src="news.js"></script>
</head>
<body>
    <form action="send.php" method="post" onsubmit="return confirm('確定要新增嗎?');" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <th><a href="choiceversion.php">選擇版型</a></th>
                    <th><a href="write.php">填寫資料</a></th>
                    <th><a href="loadversion.php">預覽</a></th>
                    <th><input  id="submit" type="submit" value="確定送出"></th>
                    <th><button><a href="./">回首頁</a></button></th>
                </tr>
            </thead>
        </table>
    </form>
</body>
</html>