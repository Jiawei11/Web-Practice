<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
    <script>
        $(function(){
            $('img').css({
                'width':'200px'
            });
            $('img').click(function(){
                $('#MainImg').attr('src',$(this).attr('src'));
            })
        });
    </script>
</head>
<body>
    <div align="center">
        <img src="./images/g1.png" id="MainImg">
    </div>
    <div id="smallimg">
        <img src="./images/g2.png">
        <img src="./images/g3.jpg">
    </div>
</body>
</html>