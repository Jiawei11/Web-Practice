<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>輪播相片</title>
    <script>
        var index = 0;
        setInterval(() => {
            if(index==document.getElementsByClassName('img').length){index = 0;}
            document.getElementById('big').src = document.getElementsByClassName('img')[index].src.split("/").pop();
            index = index + 1;
        }, 2000);
    </script>
    <style>
        img{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <div>
        <img src="./img/1.png" class="img">
        <img src="./img/2.png" class="img">
        <img src="./img/4.jpg" class="img">
    </div>
    <div>
        <img src="" id="big">
    </div>
</body>
</html>