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
    <form action="addVersionProcess.php" method="post" onsubmit="return check();" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <th><input type="button" id="btn1" value="選擇版型"></button></th>
                    <th><input type="button" id="btn2" value="填寫資料"></button></th>
                    <th><input type="button" id="btn3" value="預覽"></button></th>
                    <th><input  id="submit" type="submit" value="確定送出"></th>
                    <th><button><a href="./">回首頁</a></button></th>
                </tr>
            </thead>
            <tbody>
                <tr id="Data">
                    <div id="div1"></div>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>