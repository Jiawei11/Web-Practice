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
                'width':'200px',
                'height':'300px'
            })
        });

        function ChangeImg(x){
            var Img = document.getElementById('MainImg');
            var Data = x.src.split("/");
            Img.src = Data[Data.length-1];
        };
    </script>
</head>
<body>
    <div align="center">
        <img src="g1.png" id="MainImg">
    </div>
    <div id="smallimg">
        <img src="g2.png" onclick="ChangeImg(this);">
        <img src="g3.jpg" onclick="ChangeImg(this);">
    </div>
</body>
</html>