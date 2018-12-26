<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查詢</title>
    <script src="./jquery/jquery-3.3.1.min.js"></script>
    <script src="./jquery/jquery-ui.min.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <script>
        $(function(){
            $('[type=submit]').click(function(){
                $.post('search.php',{key:$('#keyword').val(),n:$('#num').val()},function(result){
                    $('#div1').html(result)
                })
            });
        });
    </script>
    <style>
        img{
            width:500px;
        }
    </style>
</head>
<body>
    <div align="center">
        <a href="./index.php">回電子報首頁</a><p></p>
        關鍵字: <input type="text" id="keyword"><p></p>
        價錢範圍: <input type="number" id="num" required><p></p>
        <input type="submit" value="查詢">
        <input type="reset" value="重設">
    </div>
    <div id="div1"></div>
</body>
</html>