<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>製作版型</title>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
    <script>
        function Check(){
           return (confirm('確定要新增嗎?') == true) ? true : false;
        }

        $(function(){
            $('button').click(function(){
                $.post('LoadCSS.php',{
                    title:$('[name=title').val(),
                    titlecolor:$('[name=titlecolor]').val(),
                    size:$('[name=size]').val(),}
                    ,function(result){$('#LoadCss').html(result);});
            });
        });
    </script>
</head>
<body>
    <div align="center">
        <a href="./">回首頁</a><p></p>
        <button>預覽CSS</button><p></p>
        <form action="addlayoutProcess.php" method="post" onsubmit="return Check();">
            版型標題: <input type="text" name="title"><p></p>
            字型大小: <input type="text" name="size"><p></p>
            字體顏色: <input type="color" name="titlecolor"><p></p>
            <input type="submit">
            <input type="reset">
        </form>
        <p></p>
        <div style="background-color:#39f;color:white">CSS預覽:</div>
        <div id="LoadCss">
        </div>
    </div>
</body>
</html>