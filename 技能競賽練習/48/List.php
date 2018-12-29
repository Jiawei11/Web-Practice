<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .menu{
            display:none;
            border-radius:50px;

        }

        .nav ul li:hover .menu{
            display:block;
        }
        
        .nav{
            width:100%;
            height:30px;
            background:#39f;
            border-radius:50px;
        }

        .nav ul li div ul li{
            list-style-type:none;
            float:left;
        }

        ul{
            margin:0;
            padding:0;
        }

        .nav ul li:hover .menu ul li{
            background:#39f;
            color:white;
            border-radius:10px 10px 10px 10px;
        }
        
        a{
            color:white;
            text-decoration:none;
        }

        .nav ul li{
            padding: 0 10px;
            line-height:25px;
        }
    </style>
</head>
<body>
    <div class="nav">
        <ul><li><a href="#">選單1</a>
                <div class="menu">
                    <ul>
                        <li><a href="#">子選單1</a></li>
                        <li><a href="#">子選單2</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>