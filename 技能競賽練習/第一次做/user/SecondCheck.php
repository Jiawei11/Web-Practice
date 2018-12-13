<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="jquery/jquery-ui.min.js"></script>
    <script scr="jquery/jquery-ui.js"></script>
    <title>二段驗證</title>
    <style>
        button{
            width:200px;
            height:170px;
        }
    </style>
    <script>
        var Second = [];
        $(function(){
            $('div').attr('align','center');
            $('button').css('background-color','gray');
            $('button').click(function(){
                if($(this).attr('Exist') == undefined){
                    $(this).attr('Exist','true');
                    Second.push($(this).attr('value'));
                    $(this).css('background-color','yellow');
                }else{
                    $(this).removeAttr('Exist');
                    Second.splice(Second.indexOf($(this).attr('value')),1);
                    $(this).css('background-color','gray');
                }
                $('[name=ans]').val(Second.join(','));
            });
        });
    </script>
</head>
<body>
    <div>
        <button value=1></button>
        <button value=2></button>
        <button value=3></button>
    </div>
    <div>
        <button value=4></button>
        <button value=5></button>
        <button value=6></button>
    </div>
    <div>
        <button value=7></button>
        <button value=8></button>
        <button value=9></button>
    </div>
    <div>
        <form action="Second.php?Check=true" method="post">
            <input type="hidden" name="ans">
            <input type="submit" value="登入">
        </form>
    </div>
</body>
</html>