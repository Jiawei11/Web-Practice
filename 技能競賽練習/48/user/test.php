<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>test</title>
    <script>
        $(function(){
            $('[type=button]').click(function(){
               if($('div').css('display') == "block"){
                   $('div').css('display','none');
               }else{
                   $('div').css('display','block');
               }
            });
        });
    </script>
</head>
<body>
    <div style="display:block;">
        這是一個div
    </div>
    <input type="button" value="123">
</body>
</html>